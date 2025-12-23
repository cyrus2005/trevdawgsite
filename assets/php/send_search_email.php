<?php
// Send email notification when someone searches
// Include database configuration
require_once __DIR__ . '/config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents('php://input'), true);

if (!$data || empty($data['email'])) {
    echo json_encode(['status' => 'error', 'message' => 'Email required']);
    exit;
}

$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$criteria = $data;

// Build search criteria summary
$summary = [];
if (!empty($criteria['city'])) $summary[] = "City: " . $criteria['city'];
if (!empty($criteria['zipCode'])) $summary[] = "Zip: " . $criteria['zipCode'];
if (!empty($criteria['minPrice']) || !empty($criteria['maxPrice'])) {
    $min = !empty($criteria['minPrice']) ? '$' . number_format($criteria['minPrice']) : '$0';
    $max = !empty($criteria['maxPrice']) ? '$' . number_format($criteria['maxPrice']) : 'Any';
    $summary[] = "Price: $min - $max";
}
if (!empty($criteria['bedrooms'])) $summary[] = $criteria['bedrooms'] . "+ Bedrooms";
if (!empty($criteria['bathrooms'])) $summary[] = $criteria['bathrooms'] . "+ Bathrooms";
if (!empty($criteria['propertyType']) && $criteria['propertyType'] !== 'all') {
    $summary[] = "Type: " . ucfirst($criteria['propertyType']);
}

$criteriaText = implode("\n", $summary);

// Email to agent (Trevor)
$to = ADMIN_EMAIL;
$subject = "New Property Search Lead - HDRS Realty Co.";
$message = "NEW PROPERTY SEARCH LEAD - HDRS Realty Co.\n\n";
$message .= "═══════════════════════════════════════════\n\n";
$message .= "CONTACT INFORMATION:\n";
$message .= "Email: " . $email . "\n";
$message .= "Timestamp: " . date('Y-m-d H:i:s') . "\n";
$message .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
$message .= "SEARCH CRITERIA:\n";
$message .= $criteriaText . "\n\n";
$message .= "═══════════════════════════════════════════\n";
$message .= "This lead has been saved and tracked in your system.\n";
$message .= "Follow up with this potential client as soon as possible!";

$headers = "From: " . SITE_EMAIL . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email to agent
$agentEmailSent = @mail($to, $subject, $message, $headers);

// Log email if database is available
$db = getDBConnection();
if ($db && $agentEmailSent) {
    try {
        $stmt = $db->prepare("INSERT INTO email_log (to_email, subject, email_type, status) VALUES (?, ?, ?, ?)");
        $stmt->execute([$to, $subject, 'search_lead', 'sent']);
    } catch (PDOException $e) {
        logError("Error logging email: " . $e->getMessage());
    }
}

// Send confirmation email to user
$userSubject = "Your Property Search - HDRS Realty Co.";
$userMessage = "Thank you for searching for properties with HDRS Realty Co.\n\n";
$userMessage .= "Your Search Criteria:\n";
$userMessage .= $criteriaText . "\n\n";
$userMessage .= "We're working on finding the perfect properties for you. ";
$userMessage .= "Trevor Hondros will be in touch soon with matching listings.\n\n";
$userMessage .= "If you have any questions, please contact us at (713) 408-0604\n\n";
$userMessage .= "Best regards,\nHDRS Realty Co.";

$userEmailSent = @mail($email, $userSubject, $userMessage, $headers);

// Log user email if database is available
if ($db && $userEmailSent) {
    try {
        $stmt = $db->prepare("INSERT INTO email_log (to_email, subject, email_type, status) VALUES (?, ?, ?, ?)");
        $stmt->execute([$email, $userSubject, 'search_confirmation', 'sent']);
    } catch (PDOException $e) {
        logError("Error logging email: " . $e->getMessage());
    }
}

echo json_encode([
    'status' => 'success',
    'agent_email_sent' => $agentEmailSent,
    'user_email_sent' => $userEmailSent
]);
?>

