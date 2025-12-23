<?php
// Sell/Evaluate form handler for HDRS Realty Co.

// Include database configuration
require_once __DIR__ . '/config.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $firstName = isset($_POST['firstName']) ? htmlspecialchars(trim($_POST['firstName'])) : '';
    $lastName = isset($_POST['lastName']) ? htmlspecialchars(trim($_POST['lastName'])) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $address = isset($_POST['address']) ? htmlspecialchars(trim($_POST['address'])) : '';
    $formType = isset($_POST['formType']) ? htmlspecialchars(trim($_POST['formType'])) : ''; // 'sell' or 'evaluate'
    
    // Validation
    $errors = [];
    
    if (empty($firstName)) {
        $errors[] = "First name is required.";
    }
    
    if (empty($lastName)) {
        $errors[] = "Last name is required.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    }
    
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
    
    if (empty($formType) || !in_array($formType, ['sell', 'evaluate'])) {
        $errors[] = "Invalid form type.";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        $db = getDBConnection();
        $saved = false;
        
        // Save to database
        if ($db) {
            try {
                $stmt = $db->prepare("INSERT INTO property_requests (first_name, last_name, email, phone, address, form_type, ip_address, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $saved = $stmt->execute([
                    $firstName,
                    $lastName,
                    $email,
                    $phone,
                    $address,
                    $formType,
                    $_SERVER['REMOTE_ADDR'] ?? null,
                    $_SERVER['HTTP_USER_AGENT'] ?? null
                ]);
            } catch (PDOException $e) {
                logError("Database error in sell_evaluate.php: " . $e->getMessage());
            }
        }
        
        // Email configuration
        $to = ADMIN_EMAIL;
        $subject = "New " . ucfirst($formType) . " Request from HDRS Realty Co.";
        
        $email_body = "NEW " . strtoupper($formType) . " REQUEST - HDRS Realty Co.\n\n";
        $email_body .= "═══════════════════════════════════════════\n\n";
        $email_body .= "CONTACT INFORMATION:\n";
        $email_body .= "First Name: " . $firstName . "\n";
        $email_body .= "Last Name: " . $lastName . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Phone: " . $phone . "\n";
        $email_body .= "Address: " . $address . "\n\n";
        $email_body .= "Request Type: " . ucfirst($formType) . "\n\n";
        $email_body .= "═══════════════════════════════════════════\n";
        $email_body .= "Submitted: " . date('Y-m-d H:i:s') . "\n";
        $email_body .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
        $email_body .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";
        
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email (continue even if database save failed)
        $emailSent = @mail($to, $subject, $email_body, $headers);
        
        // Log email attempt if database is available
        if ($db && $emailSent) {
            try {
                $stmt = $db->prepare("INSERT INTO email_log (to_email, subject, email_type, status) VALUES (?, ?, ?, ?)");
                $stmt->execute([$to, $subject, $formType . '_request', 'sent']);
            } catch (PDOException $e) {
                logError("Error logging email: " . $e->getMessage());
            }
        }
        
        // Success - redirect (even if email fails, data is saved)
        $redirect = file_exists(__DIR__ . '/../../index.php') ? '/index.php' : '/index.html';
        header("Location: " . $redirect . "?formSubmitted=1&type=" . $formType . "#hero");
        exit();
    } else {
        // Validation errors - redirect with error message
        $redirect = file_exists(__DIR__ . '/../../index.php') ? '/index.php' : '/index.html';
        header("Location: " . $redirect . "?error=1&type=" . $formType . "#hero");
        exit();
    }
} else {
    // Not a POST request - redirect to home
    $redirect = file_exists(__DIR__ . '/../../index.php') ? '/index.php' : '/index.html';
    header("Location: " . $redirect);
    exit();
}
?>


