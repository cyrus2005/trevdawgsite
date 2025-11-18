<?php
// Simple admin page to view search analytics
// Password protect this page in production!

$searchLogFile = __DIR__ . '/../../search_tracking.json';
$searches = [];

if (file_exists($searchLogFile)) {
    $searches = json_decode(file_get_contents($searchLogFile), true) ?: [];
}

// Calculate statistics
$stats = [
    'total' => count($searches),
    'today' => 0,
    'this_week' => 0,
    'cities' => [],
    'price_ranges' => [],
    'bedrooms' => [],
    'property_types' => []
];

$today = date('Y-m-d');
$weekAgo = date('Y-m-d', strtotime('-7 days'));

foreach ($searches as $search) {
    $date = substr($search['timestamp'], 0, 10);
    if ($date === $today) $stats['today']++;
    if ($date >= $weekAgo) $stats['this_week']++;
    
    $criteria = $search['criteria'] ?? [];
    
    if (!empty($criteria['city'])) {
        $stats['cities'][$criteria['city']] = ($stats['cities'][$criteria['city']] ?? 0) + 1;
    }
    
    if (!empty($criteria['bedrooms'])) {
        $stats['bedrooms'][$criteria['bedrooms']] = ($stats['bedrooms'][$criteria['bedrooms']] ?? 0) + 1;
    }
    
    if (!empty($criteria['propertyType'])) {
        $stats['property_types'][$criteria['propertyType']] = ($stats['property_types'][$criteria['propertyType']] ?? 0) + 1;
    }
    
    if (!empty($criteria['minPrice']) || !empty($criteria['maxPrice'])) {
        $min = $criteria['minPrice'] ?? 0;
        $max = $criteria['maxPrice'] ?? 999999999;
        $range = '$' . number_format($min) . ' - $' . number_format($max);
        $stats['price_ranges'][$range] = ($stats['price_ranges'][$range] ?? 0) + 1;
    }
}

// Sort by count
arsort($stats['cities']);
arsort($stats['bedrooms']);
arsort($stats['property_types']);
arsort($stats['price_ranges']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Analytics - HDRS Realty Co.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">Search Analytics Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Total Searches</h3>
                <p class="text-3xl font-bold text-blue-600"><?php echo $stats['total']; ?></p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Today</h3>
                <p class="text-3xl font-bold text-green-600"><?php echo $stats['today']; ?></p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">This Week</h3>
                <p class="text-3xl font-bold text-purple-600"><?php echo $stats['this_week']; ?></p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Most Searched Cities</h3>
                <ul class="space-y-2">
                    <?php foreach (array_slice($stats['cities'], 0, 10, true) as $city => $count): ?>
                        <li class="flex justify-between">
                            <span><?php echo htmlspecialchars($city); ?></span>
                            <span class="font-semibold"><?php echo $count; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Bedroom Preferences</h3>
                <ul class="space-y-2">
                    <?php foreach (array_slice($stats['bedrooms'], 0, 10, true) as $beds => $count): ?>
                        <li class="flex justify-between">
                            <span><?php echo htmlspecialchars($beds); ?>+ Beds</span>
                            <span class="font-semibold"><?php echo $count; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Property Types</h3>
                <ul class="space-y-2">
                    <?php foreach (array_slice($stats['property_types'], 0, 10, true) as $type => $count): ?>
                        <li class="flex justify-between">
                            <span><?php echo htmlspecialchars($type); ?></span>
                            <span class="font-semibold"><?php echo $count; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4">Price Ranges</h3>
                <ul class="space-y-2">
                    <?php foreach (array_slice($stats['price_ranges'], 0, 10, true) as $range => $count): ?>
                        <li class="flex justify-between">
                            <span><?php echo htmlspecialchars($range); ?></span>
                            <span class="font-semibold"><?php echo $count; ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <div class="mt-8 bg-white p-6 rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Recent Searches</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-2">Date/Time</th>
                            <th class="text-left p-2">City</th>
                            <th class="text-left p-2">Zip</th>
                            <th class="text-left p-2">Price Range</th>
                            <th class="text-left p-2">Beds/Baths</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_slice($searches, -20) as $search): ?>
                            <tr class="border-b">
                                <td class="p-2"><?php echo htmlspecialchars($search['timestamp']); ?></td>
                                <td class="p-2"><?php echo htmlspecialchars($search['criteria']['city'] ?? '-'); ?></td>
                                <td class="p-2"><?php echo htmlspecialchars($search['criteria']['zipCode'] ?? '-'); ?></td>
                                <td class="p-2">
                                    <?php 
                                    $min = $search['criteria']['minPrice'] ?? '';
                                    $max = $search['criteria']['maxPrice'] ?? '';
                                    echo $min || $max ? '$' . number_format($min) . ' - $' . number_format($max) : '-';
                                    ?>
                                </td>
                                <td class="p-2">
                                    <?php 
                                    $beds = $search['criteria']['bedrooms'] ?? '';
                                    $baths = $search['criteria']['bathrooms'] ?? '';
                                    echo ($beds ? $beds . ' bed' : '') . ($beds && $baths ? ' / ' : '') . ($baths ? $baths . ' bath' : '');
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

