<?php
/**
 * Database Configuration for HDRS Realty Co.
 * 
 * IMPORTANT: Update these values with your Namecheap hosting database credentials
 * You can find these in your Namecheap cPanel under "MySQL Databases"
 */

// Database configuration
define('DB_HOST', 'localhost'); // Usually 'localhost' on Namecheap
define('DB_NAME', 'your_database_name'); // Replace with your database name
define('DB_USER', 'your_database_user'); // Replace with your database username
define('DB_PASS', 'your_database_password'); // Replace with your database password
define('DB_CHARSET', 'utf8mb4');

// Email configuration
define('ADMIN_EMAIL', 'leads@hdrsrealtyco.com'); // Main email for form submissions
define('SITE_EMAIL', 'noreply@hdrsrealtyco.com'); // Email for automated messages

// Error reporting (set to false in production)
define('DEBUG_MODE', false);

/**
 * Get database connection
 * @return PDO|null
 */
function getDBConnection() {
    static $pdo = null;
    
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            if (DEBUG_MODE) {
                error_log("Database connection error: " . $e->getMessage());
            }
            return null;
        }
    }
    
    return $pdo;
}

/**
 * Log error safely
 */
function logError($message) {
    if (DEBUG_MODE) {
        error_log($message);
    }
}
?>


