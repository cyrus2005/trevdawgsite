<?php
// Search tracking endpoint for HAR.com searches
// This file tracks search criteria for analytics

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// File to store search data
$searchLogFile = __DIR__ . '/../../search_tracking.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receive search data
    $data = json_decode(file_get_contents('php://input'), true);
    
    if ($data) {
        // Add timestamp and IP
        $searchEntry = [
            'timestamp' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
            'criteria' => $data
        ];
        
        // Load existing searches
        $searches = [];
        if (file_exists($searchLogFile)) {
            $existing = file_get_contents($searchLogFile);
            $searches = json_decode($existing, true) ?: [];
        }
        
        // Add new search (keep last 1000)
        $searches[] = $searchEntry;
        if (count($searches) > 1000) {
            $searches = array_slice($searches, -1000);
        }
        
        // Save to file
        file_put_contents($searchLogFile, json_encode($searches, JSON_PRETTY_PRINT));
        
        // Return success
        echo json_encode(['status' => 'success', 'message' => 'Search tracked']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Return search analytics
    $searches = [];
    if (file_exists($searchLogFile)) {
        $searches = json_decode(file_get_contents($searchLogFile), true) ?: [];
    }
    
    // Calculate analytics
    $analytics = [
        'total_searches' => count($searches),
        'recent_searches' => array_slice($searches, -10),
        'cities' => [],
        'price_ranges' => [],
        'bedrooms' => [],
        'property_types' => []
    ];
    
    foreach ($searches as $search) {
        $criteria = $search['criteria'] ?? [];
        
        if (!empty($criteria['city'])) {
            $analytics['cities'][$criteria['city']] = ($analytics['cities'][$criteria['city']] ?? 0) + 1;
        }
        
        if (!empty($criteria['bedrooms'])) {
            $analytics['bedrooms'][$criteria['bedrooms']] = ($analytics['bedrooms'][$criteria['bedrooms']] ?? 0) + 1;
        }
        
        if (!empty($criteria['propertyType'])) {
            $analytics['property_types'][$criteria['propertyType']] = ($analytics['property_types'][$criteria['propertyType']] ?? 0) + 1;
        }
        
        if (!empty($criteria['minPrice']) || !empty($criteria['maxPrice'])) {
            $range = '$' . number_format($criteria['minPrice'] ?? 0) . ' - $' . number_format($criteria['maxPrice'] ?? 999999999);
            $analytics['price_ranges'][$range] = ($analytics['price_ranges'][$range] ?? 0) + 1;
        }
    }
    
    echo json_encode($analytics, JSON_PRETTY_PRINT);
}

