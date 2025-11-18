<?php
// Fetch and display HAR.com listings based on search criteria
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$criteria = json_decode(file_get_contents('php://input'), true);

if (!$criteria) {
    $criteria = $_GET;
}

// Build HAR.com search URL
$harUrl = 'https://www.har.com/search/real_estate';
$params = [];

if (!empty($criteria['city'])) {
    $params['city'] = $criteria['city'];
}
if (!empty($criteria['zipCode'])) {
    $params['zipcode'] = $criteria['zipCode'];
}
if (!empty($criteria['minPrice'])) {
    $params['min_price'] = $criteria['minPrice'];
}
if (!empty($criteria['maxPrice'])) {
    $params['max_price'] = $criteria['maxPrice'];
}
if (!empty($criteria['bedrooms'])) {
    $params['bedrooms'] = $criteria['bedrooms'];
}
if (!empty($criteria['bathrooms'])) {
    $params['bathrooms'] = $criteria['bathrooms'];
}

$queryString = http_build_query($params);
$fullUrl = $harUrl . ($queryString ? '?' . $queryString : '');

// Fetch HAR.com page
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $fullUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$html = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    echo json_encode(['error' => 'Unable to fetch listings', 'url' => $fullUrl]);
    exit;
}

// Parse HTML to extract listings (basic extraction)
// Note: This is a simplified parser - HAR.com structure may vary
$listings = [];

// Use regex to find listing data in the HTML
// HAR.com uses structured data (JSON-LD) which we can extract
if (preg_match('/<script[^>]*type="application\/ld\+json"[^>]*>(.*?)<\/script>/is', $html, $matches)) {
    $jsonData = json_decode($matches[1], true);
    if ($jsonData && isset($jsonData['@graph'])) {
        foreach ($jsonData['@graph'] as $item) {
            if (isset($item['@type']) && (strpos($item['@type'], 'Residence') !== false || strpos($item['@type'], 'Product') !== false)) {
                if (isset($item['name']) && isset($item['url'])) {
                    $listings[] = [
                        'address' => $item['name'] ?? '',
                        'url' => $item['url'] ?? '',
                        'price' => isset($item['offers']['price']) ? '$' . number_format($item['offers']['price']) : 'Price on Request',
                        'beds' => $item['numberOfBedrooms'] ?? 'N/A',
                        'baths' => $item['numberOfBathroomsTotal'] ?? 'N/A',
                        'sqft' => isset($item['floorSize']['value']) ? number_format($item['floorSize']['value']) : 'N/A',
                        'image' => isset($item['image'][0]) ? $item['image'][0] : 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800'
                    ];
                }
            }
        }
    }
}

// If no structured data found, return the search URL for iframe fallback
if (empty($listings)) {
    echo json_encode([
        'listings' => [],
        'searchUrl' => $fullUrl,
        'message' => 'Use search URL for results'
    ]);
} else {
    echo json_encode([
        'listings' => array_slice($listings, 0, 20), // Limit to 20 results
        'searchUrl' => $fullUrl,
        'count' => count($listings)
    ]);
}
?>

