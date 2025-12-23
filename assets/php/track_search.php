<?php
// Search tracking endpoint for HAR.com searches
// This file tracks search criteria for analytics

// Include database configuration
require_once __DIR__ . '/config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receive search data
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($data && !empty($data['email'])) {
        $db = getDBConnection();
        
        // Save to database
        if ($db) {
            try {
                $stmt = $db->prepare("INSERT INTO property_searches (email, city, zip_code, min_price, max_price, bedrooms, bathrooms, property_type, ip_address, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([
                    filter_var($data['email'], FILTER_SANITIZE_EMAIL),
                    $data['city'] ?? null,
                    $data['zipCode'] ?? null,
                    !empty($data['minPrice']) ? $data['minPrice'] : null,
                    !empty($data['maxPrice']) ? $data['maxPrice'] : null,
                    !empty($data['bedrooms']) ? (int)$data['bedrooms'] : null,
                    !empty($data['bathrooms']) ? (float)$data['bathrooms'] : null,
                    $data['propertyType'] ?? null,
                    $_SERVER['REMOTE_ADDR'] ?? null,
                    $_SERVER['HTTP_USER_AGENT'] ?? null
                ]);
            } catch (PDOException $e) {
                logError("Database error in track_search.php: " . $e->getMessage());
            }
        }
        
        // Return success
        echo json_encode(['status' => 'success', 'message' => 'Search tracked']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid data or email required']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Return search analytics from database
    $db = getDBConnection();
    $analytics = [
        'total_searches' => 0,
        'recent_searches' => [],
        'cities' => [],
        'price_ranges' => [],
        'bedrooms' => [],
        'property_types' => []
    ];
    
    if ($db) {
        try {
            // Get total count
            $stmt = $db->query("SELECT COUNT(*) as total FROM property_searches");
            $result = $stmt->fetch();
            $analytics['total_searches'] = $result['total'] ?? 0;
            
            // Get recent searches
            $stmt = $db->query("SELECT * FROM property_searches ORDER BY searched_at DESC LIMIT 10");
            $analytics['recent_searches'] = $stmt->fetchAll();
            
            // Get city counts
            $stmt = $db->query("SELECT city, COUNT(*) as count FROM property_searches WHERE city IS NOT NULL GROUP BY city ORDER BY count DESC");
            while ($row = $stmt->fetch()) {
                $analytics['cities'][$row['city']] = (int)$row['count'];
            }
            
            // Get bedroom counts
            $stmt = $db->query("SELECT bedrooms, COUNT(*) as count FROM property_searches WHERE bedrooms IS NOT NULL GROUP BY bedrooms ORDER BY count DESC");
            while ($row = $stmt->fetch()) {
                $analytics['bedrooms'][$row['bedrooms']] = (int)$row['count'];
            }
            
            // Get property type counts
            $stmt = $db->query("SELECT property_type, COUNT(*) as count FROM property_searches WHERE property_type IS NOT NULL GROUP BY property_type ORDER BY count DESC");
            while ($row = $stmt->fetch()) {
                $analytics['property_types'][$row['property_type']] = (int)$row['count'];
            }
            
        } catch (PDOException $e) {
            logError("Database error in track_search.php GET: " . $e->getMessage());
        }
    }
    
    echo json_encode($analytics, JSON_PRETTY_PRINT);
}

