<?php
// Contact form handler for HDRS Realty Co.

// Include database configuration
require_once __DIR__ . '/config.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    // Handle both form formats: single "name" field or "firstName"/"lastName" fields
    if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
        $firstName = htmlspecialchars(trim($_POST['firstName']));
        $lastName = htmlspecialchars(trim($_POST['lastName']));
        $name = trim($firstName . ' ' . $lastName);
    } else {
        $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $firstName = '';
        $lastName = '';
        // Try to split name if provided
        if (!empty($name)) {
            $nameParts = explode(' ', $name, 2);
            $firstName = $nameParts[0] ?? '';
            $lastName = $nameParts[1] ?? '';
        }
    }
    
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required.";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        $db = getDBConnection();
        $saved = false;
        
        // Save to database
        if ($db) {
            try {
                $stmt = $db->prepare("INSERT INTO contact_submissions (first_name, last_name, name, email, phone, message, ip_address, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $saved = $stmt->execute([
                    $firstName,
                    $lastName,
                    $name,
                    $email,
                    $phone ?: null,
                    $message,
                    $_SERVER['REMOTE_ADDR'] ?? null,
                    $_SERVER['HTTP_USER_AGENT'] ?? null
                ]);
            } catch (PDOException $e) {
                logError("Database error in contact.php: " . $e->getMessage());
            }
        }
        
        // Email configuration
        $to = ADMIN_EMAIL;
        $subject = "New Contact Form Submission from HDRS Realty Co.";
        
        $email_body = "NEW CONTACT FORM SUBMISSION - HDRS Realty Co.\n\n";
        $email_body .= "═══════════════════════════════════════════\n\n";
        $email_body .= "CONTACT INFORMATION:\n";
        $email_body .= "Name: " . $name . "\n";
        if (!empty($firstName) && !empty($lastName)) {
            $email_body .= "First Name: " . $firstName . "\n";
            $email_body .= "Last Name: " . $lastName . "\n";
        }
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Phone: " . ($phone ? $phone : "Not provided") . "\n\n";
        $email_body .= "MESSAGE:\n";
        $email_body .= $message . "\n\n";
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
                $stmt->execute([$to, $subject, 'contact_form', 'sent']);
            } catch (PDOException $e) {
                logError("Error logging email: " . $e->getMessage());
            }
        }
        
        // Success - redirect (even if email fails, data is saved)
        $redirect = file_exists(__DIR__ . '/../../index.php') ? '/index.php' : '/index.html';
        header("Location: " . $redirect . "?success=1#contact");
        exit();
    } else {
        // Validation errors - redirect with error message
        $redirect = file_exists(__DIR__ . '/../../index.php') ? '/index.php' : '/index.html';
        header("Location: " . $redirect . "?error=1#contact");
        exit();
    }
} else {
    // Not a POST request - redirect to home
    $redirect = file_exists(__DIR__ . '/../../index.php') ? '/index.php' : '/index.html';
    header("Location: " . $redirect);
    exit();
}
?>

