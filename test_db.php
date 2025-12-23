<?php
/**
 * Database Connection Test File
 * 
 * IMPORTANT: Delete this file after testing for security!
 * 
 * Upload this file to your website root and visit: yourdomain.com/test_db.php
 * This will test if your database connection is working correctly.
 */

// Include database configuration
require_once __DIR__ . '/assets/php/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .success { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .error { background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px 0; }
        .info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin: 10px 0; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h1>HDRS Realty Co. - Database Connection Test</h1>
    
    <?php
    // Test database connection
    $db = getDBConnection();
    
    if ($db) {
        echo '<div class="success"><strong>✓ SUCCESS:</strong> Database connection established!</div>';
        
        // Test if tables exist
        echo '<h2>Checking Database Tables:</h2>';
        
        $tables = ['contact_submissions', 'property_requests', 'property_searches', 'email_log'];
        $allTablesExist = true;
        
        echo '<table>';
        echo '<tr><th>Table Name</th><th>Status</th><th>Record Count</th></tr>';
        
        foreach ($tables as $table) {
            try {
                $stmt = $db->query("SELECT COUNT(*) as count FROM `$table`");
                $result = $stmt->fetch();
                $count = $result['count'] ?? 0;
                
                echo '<tr>';
                echo '<td>' . htmlspecialchars($table) . '</td>';
                echo '<td><span style="color: green;">✓ Exists</span></td>';
                echo '<td>' . $count . ' records</td>';
                echo '</tr>';
            } catch (PDOException $e) {
                $allTablesExist = false;
                echo '<tr>';
                echo '<td>' . htmlspecialchars($table) . '</td>';
                echo '<td><span style="color: red;">✗ Missing</span></td>';
                echo '<td>N/A</td>';
                echo '</tr>';
            }
        }
        
        echo '</table>';
        
        if ($allTablesExist) {
            echo '<div class="success"><strong>✓ All tables exist!</strong> Your database is set up correctly.</div>';
        } else {
            echo '<div class="error"><strong>✗ Some tables are missing.</strong> Please run the database_schema.sql file in phpMyAdmin.</div>';
        }
        
        // Test insert (optional - can be removed)
        echo '<h2>Connection Details:</h2>';
        echo '<div class="info">';
        echo '<strong>Database Host:</strong> ' . htmlspecialchars(DB_HOST) . '<br>';
        echo '<strong>Database Name:</strong> ' . htmlspecialchars(DB_NAME) . '<br>';
        echo '<strong>Database User:</strong> ' . htmlspecialchars(DB_USER) . '<br>';
        echo '<strong>PHP Version:</strong> ' . phpversion() . '<br>';
        echo '<strong>PDO Available:</strong> ' . (extension_loaded('pdo') ? 'Yes' : 'No') . '<br>';
        echo '<strong>PDO MySQL Available:</strong> ' . (extension_loaded('pdo_mysql') ? 'Yes' : 'No') . '<br>';
        echo '</div>';
        
    } else {
        echo '<div class="error"><strong>✗ ERROR:</strong> Could not connect to database!</div>';
        echo '<div class="info">';
        echo '<h3>Please check:</h3>';
        echo '<ul>';
        echo '<li>Database credentials in assets/php/config.php are correct</li>';
        echo '<li>Database name includes full prefix (yourusername_dbname)</li>';
        echo '<li>Username includes full prefix (yourusername_dbuser)</li>';
        echo '<li>Database exists in cPanel</li>';
        echo '<li>User has permissions on the database</li>';
        echo '<li>MySQL is enabled in your hosting plan</li>';
        echo '</ul>';
        echo '</div>';
    }
    ?>
    
    <div class="info" style="margin-top: 30px;">
        <strong>⚠️ SECURITY WARNING:</strong> Delete this file (test_db.php) after testing!
    </div>
</body>
</html>


