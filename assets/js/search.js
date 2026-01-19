// Home Search Functionality with HAR Integration and Tracking

let searchTracking = {
    searches: [],
    currentSearch: null
};

// Initialize search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('homeSearchForm');
    
    if (searchForm) {
        searchForm.addEventListener('submit', handleSearch);
    }
    
    // Load saved searches from localStorage
    loadSearchHistory();
});

async function handleSearch(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    
    // Parse price range if provided
    let minPrice = '';
    let maxPrice = '';
    const priceRange = formData.get('priceRange') || '';
    if (priceRange) {
        if (priceRange.includes('+')) {
            // Handle "2000000+" format
            minPrice = priceRange.replace('+', '');
        } else if (priceRange.includes('-')) {
            // Handle "200000-300000" format
            const [min, max] = priceRange.split('-');
            minPrice = min;
            maxPrice = max;
        } else if (priceRange.startsWith('0-')) {
            // Handle "0-200000" format (Under $200,000)
            const max = priceRange.split('-')[1];
            maxPrice = max;
        }
    }
    
    const searchCriteria = {
        city: formData.get('city') || '',
        zipCode: formData.get('zipCode') || '',
        minPrice: minPrice,
        maxPrice: maxPrice,
        priceRange: priceRange,
        bedrooms: formData.get('bedrooms') || '',
        bathrooms: formData.get('bathrooms') || '',
        propertyType: formData.get('propertyType') || 'all',
        email: formData.get('email') || '',
        timestamp: new Date().toISOString()
    };
    
    // Track search (even without email)
    trackSearch(searchCriteria);
    
    // Send email notification if email is provided
    if (searchCriteria.email) {
        sendSearchEmail(searchCriteria);
    } else {
        // Show email prompt after search (non-blocking)
        const emailPrompt = document.getElementById('emailPrompt');
        if (emailPrompt) {
            emailPrompt.classList.remove('hidden');
            setTimeout(() => {
                emailPrompt.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 100);
        }
    }
    
    // Build HAR.com search URL
    const harUrl = buildHARSearchUrl(searchCriteria);
    
    // Show success message
    showSearchSuccess('Opening HAR.com search in a new window...');
    
    // Redirect to HAR.com with search parameters
    // Open in new tab
    const harWindow = window.open(harUrl, '_blank');
    
    // If the window was blocked or failed, try alternative approach
    if (!harWindow || harWindow.closed || typeof harWindow.closed == 'undefined') {
        // Fallback: redirect to main HAR.com search page
        setTimeout(() => {
            window.location.href = 'https://www.har.com/search';
        }, 500);
    }
}

function showLoading() {
    document.getElementById('searchLoading').classList.remove('hidden');
    document.getElementById('listingsContainer').classList.add('hidden');
    document.getElementById('searchError').classList.add('hidden');
}

function hideLoading() {
    document.getElementById('searchLoading').classList.add('hidden');
}

function displayListings(listings, criteria) {
    const container = document.getElementById('listingsContainer');
    const grid = document.getElementById('listingsGrid');
    const noResults = document.getElementById('noResults');
    
    container.classList.remove('hidden');
    
    // Display search criteria summary
    const criteriaSummary = document.getElementById('searchCriteriaSummary');
    if (criteriaSummary) {
        let summary = 'Search Results: ';
        const parts = [];
        
        if (criteria.city) parts.push(`City: ${criteria.city}`);
        if (criteria.zipCode) parts.push(`Zip: ${criteria.zipCode}`);
        if (criteria.priceRange) {
            parts.push(`Price: ${criteria.priceRange}`);
        } else if (criteria.minPrice || criteria.maxPrice) {
            const min = criteria.minPrice ? '$' + parseInt(criteria.minPrice).toLocaleString() : '$0';
            const max = criteria.maxPrice ? '$' + parseInt(criteria.maxPrice).toLocaleString() : 'Any';
            parts.push(`Price: ${min} - ${max}`);
        }
        if (criteria.bedrooms) parts.push(`${criteria.bedrooms}+ Beds`);
        if (criteria.bathrooms) parts.push(`${criteria.bathrooms}+ Baths`);
        if (criteria.propertyType !== 'all') parts.push(criteria.propertyType);
        
        criteriaSummary.textContent = summary + (parts.length > 0 ? parts.join(', ') : 'All Properties');
    }
    
    if (!listings || listings.length === 0) {
        grid.innerHTML = '';
        noResults.classList.remove('hidden');
        return;
    }
    
    noResults.classList.add('hidden');
    grid.innerHTML = '';
    
    listings.forEach(listing => {
        const card = document.createElement('div');
        card.className = 'bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 property-card';
        card.innerHTML = `
            <div class="relative h-64 bg-cover bg-center" style="background-image: url('${listing.image}');">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            <div class="p-6">
                <p class="text-xs text-gray-500 mb-2 uppercase tracking-wide">${listing.address}</p>
                <h3 class="text-2xl font-serif font-bold mb-4">${listing.price}</h3>
                <div class="flex gap-4 text-sm text-gray-600 border-t border-gray-100 pt-4">
                    <span>${listing.beds} Beds</span>
                    <span>•</span>
                    <span>${listing.baths} Baths</span>
                    <span>•</span>
                    <span>${listing.sqft} sqft</span>
                </div>
                <a href="${listing.url}" target="_blank" class="mt-4 inline-block w-full text-center bg-dark-gold text-white px-4 py-2 rounded-lg hover:bg-gold transition text-sm font-medium">
                    View Details
                </a>
            </div>
        `;
        grid.appendChild(card);
    });
}

function sendSearchEmail(criteria) {
    // Send email notification about the search
    fetch('assets/php/send_search_email.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(criteria)
    }).catch(err => {
        console.log('Email notification not sent:', err);
    });
}

function buildHARSearchUrl(criteria) {
    // HAR.com search base URL - using the main search page
    let baseUrl = 'https://www.har.com/search';
    const params = [];
    
    // City parameter
    if (criteria.city) {
        params.push(`city=${encodeURIComponent(criteria.city)}`);
    }
    
    // Zip Code parameter
    if (criteria.zipCode) {
        params.push(`zipcode=${encodeURIComponent(criteria.zipCode)}`);
    }
    
    // Price range - using price_min and price_max
    if (criteria.minPrice) {
        params.push(`price_min=${criteria.minPrice}`);
    }
    if (criteria.maxPrice) {
        params.push(`price_max=${criteria.maxPrice}`);
    }
    
    // Bedrooms - using bedrooms_min
    if (criteria.bedrooms) {
        params.push(`bedrooms_min=${criteria.bedrooms}`);
    }
    
    // Bathrooms - using bathrooms_min
    if (criteria.bathrooms) {
        params.push(`bathrooms_min=${criteria.bathrooms}`);
    }
    
    // Property Type mapping
    if (criteria.propertyType && criteria.propertyType !== 'all') {
        const propertyTypeMap = {
            'single-family': 'single-family',
            'townhouse': 'townhouse',
            'condo': 'condo',
            'multi-family': 'multi-family',
            'land': 'land'
        };
        const harPropertyType = propertyTypeMap[criteria.propertyType] || criteria.propertyType;
        params.push(`property_type=${encodeURIComponent(harPropertyType)}`);
    }
    
    // Build final URL
    if (params.length > 0) {
        baseUrl += '?' + params.join('&');
    }
    
    return baseUrl;
}

function showSearchError(message) {
    const errorDiv = document.getElementById('searchError');
    if (errorDiv) {
        errorDiv.textContent = message;
        errorDiv.className = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4';
        errorDiv.classList.remove('hidden');
    }
    // Hide other messages
    const successDiv = document.getElementById('searchSuccess');
    if (successDiv) {
        successDiv.classList.add('hidden');
    }
}

function showSearchSuccess(message) {
    // Create or get success message div
    let successDiv = document.getElementById('searchSuccess');
    if (!successDiv) {
        successDiv = document.createElement('div');
        successDiv.id = 'searchSuccess';
        const form = document.getElementById('homeSearchForm');
        if (form && form.parentElement) {
            form.parentElement.insertBefore(successDiv, form);
        }
    }
    successDiv.textContent = message;
    successDiv.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4';
    successDiv.classList.remove('hidden');
    
    // Hide error message
    const errorDiv = document.getElementById('searchError');
    if (errorDiv) {
        errorDiv.classList.add('hidden');
    }
}

function trackSearch(criteria) {
    // Add to tracking array
    searchTracking.searches.push(criteria);
    searchTracking.currentSearch = criteria;
    
    // Save to localStorage
    try {
        const savedSearches = JSON.parse(localStorage.getItem('hdrsSearches') || '[]');
        savedSearches.push(criteria);
        if (savedSearches.length > 50) {
            savedSearches.shift();
        }
        localStorage.setItem('hdrsSearches', JSON.stringify(savedSearches));
    } catch (e) {
        console.error('Error saving search:', e);
    }
    
    // Send to server for tracking
    if (typeof fetch !== 'undefined') {
        fetch('assets/php/track_search.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(criteria)
        }).catch(err => {
            console.log('Server tracking not available:', err);
        });
    }
    
    console.log('Search tracked:', criteria);
}

function loadSearchHistory() {
    try {
        const savedSearches = JSON.parse(localStorage.getItem('hdrsSearches') || '[]');
        searchTracking.searches = savedSearches;
    } catch (e) {
        console.error('Error loading search history:', e);
    }
}

function getSearchAnalytics() {
    return {
        totalSearches: searchTracking.searches.length,
        searches: searchTracking.searches,
        mostSearchedCity: getMostSearched('city'),
        averagePriceRange: getAveragePriceRange(),
        popularBedrooms: getMostSearched('bedrooms')
    };
}

function getMostSearched(field) {
    const counts = {};
    searchTracking.searches.forEach(search => {
        if (search[field]) {
            counts[search[field]] = (counts[search[field]] || 0) + 1;
        }
    });
    return Object.keys(counts).reduce((a, b) => counts[a] > counts[b] ? a : b, null);
}

function getAveragePriceRange() {
    const prices = searchTracking.searches
        .filter(s => s.minPrice || s.maxPrice)
        .map(s => ({
            min: parseInt(s.minPrice) || 0,
            max: parseInt(s.maxPrice) || 1000000
        }));
    
    if (prices.length === 0) return null;
    
    const avgMin = prices.reduce((sum, p) => sum + p.min, 0) / prices.length;
    const avgMax = prices.reduce((sum, p) => sum + p.max, 0) / prices.length;
    
    return {
        min: Math.round(avgMin),
        max: Math.round(avgMax)
    };
}

// Export for use in other scripts
window.hdrsSearchTracking = {
    trackSearch,
    getSearchAnalytics,
    getSearchHistory: () => searchTracking.searches
};
