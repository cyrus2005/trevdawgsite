<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDRS Realty Co. - Trevor Hondros | Housing Decisions made Ridiculously Simple</title>
    <meta name="description" content="Housing Decisions made Ridiculously Simple. Professional real estate services with Trevor Hondros at HDRS Realty Co. Buy, sell, or invest in real estate with confidence.">
    
    <!-- Tailwind CSS (Local) -->
    <script src="assets/lib/tailwind.min.js"></script>
    
    <!-- Chart.js for the home values graph (Local) -->
    <script src="assets/lib/chart.min.js"></script>
    
    <!-- Local Fonts -->
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- Tailwind Custom Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gold': '#B8860B',
                        'dark-gold': '#8B6914',
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-black font-sans">
    
    <!-- Header -->
    <header class="fixed top-0 w-full bg-white/95 backdrop-blur-sm shadow-sm z-50 border-b border-gray-100">
        <nav class="container mx-auto px-4 md:px-6 py-3 md:py-3">
            <div class="flex flex-nowrap items-center justify-between gap-3">
                <div class="text-base md:text-lg font-serif font-bold tracking-tight shrink-0">
                    <span class="text-dark-gold">HDRS</span> <span class="text-black">REALTY CO.</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex flex-nowrap items-center gap-x-2 lg:gap-x-3 xl:gap-x-4 min-w-0">
                    <a href="#hero" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide whitespace-nowrap">HOME</a>
                    <a href="search.html" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide whitespace-nowrap">SEARCH HOMES</a>
                    <a href="blog.html" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide whitespace-nowrap">BLOG</a>
                    <a href="#whereWeWork" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide whitespace-nowrap">WHERE WE WORK</a>
                    <div class="relative group shrink-0">
                        <a href="#" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide flex items-center whitespace-nowrap">
                            WHO WE SERVE
                            <svg class="w-3 h-3 ml-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="cities/pearland.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Pearland Real Estate</a>
                                <a href="cities/league-city.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">League City Real Estate</a>
                                <a href="cities/friendswood.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Friendswood Real Estate</a>
                                <a href="cities/clear-lake.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Clear Lake Real Estate</a>
                                <a href="cities/pasadena.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Pasadena Real Estate</a>
                                <a href="cities/sugar-land.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Sugar Land Real Estate</a>
                                <a href="cities/missouri-city.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Missouri City Real Estate</a>
                                <a href="cities/alvin.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Alvin Real Estate</a>
                                <a href="cities/manvel.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Manvel Real Estate</a>
                                <a href="cities/webster.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Webster Real Estate</a>
                                <a href="cities/seabrook.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Seabrook Real Estate</a>
                                <a href="cities/la-porte.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">La Porte Real Estate</a>
                                <a href="cities/deer-park.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">Deer Park Real Estate</a>
                                <a href="cities/south-houston.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-dark-gold hover:text-white transition">South Houston Real Estate</a>
                            </div>
                        </div>
                    </div>
                    <a href="#about" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide whitespace-nowrap">WHO WE ARE</a>
                    <a href="#contact" class="text-xs font-medium text-gray-700 hover:text-dark-gold transition tracking-wide whitespace-nowrap">CONNECT</a>
                </div>
                
                <!-- Desktop Contact -->
                <div class="hidden md:flex flex-nowrap items-center gap-2 lg:gap-3 shrink-0">
                    <a href="tel:7134080604" class="text-xs font-medium text-dark-gold hover:text-gold transition whitespace-nowrap">
                        (713) 408-0604
                    </a>
                    <a href="#contact" class="text-xs font-medium text-dark-gold border border-dark-gold px-3 py-1.5 hover:bg-dark-gold hover:text-white transition tracking-wide whitespace-nowrap">
                        CONTACT
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" type="button" class="md:hidden text-dark-gold hover:text-gold transition z-50" aria-label="Toggle mobile menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-200">
                <div class="flex flex-col space-y-3 pt-4">
                    <a href="#hero" onclick="toggleMobileMenu()" class="text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">HOME</a>
                    <a href="search.html" onclick="toggleMobileMenu()" class="text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">SEARCH HOMES</a>
                    <a href="blog.html" onclick="toggleMobileMenu()" class="text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">BLOG</a>
                    <a href="#whereWeWork" onclick="toggleMobileMenu()" class="text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">WHERE WE WORK</a>
                    
                    <!-- Mobile Dropdown for WHO WE SERVE -->
                    <div class="pt-2 border-t border-gray-200">
                        <button type="button" onclick="toggleMobileDropdown(event)" class="w-full flex items-center justify-between text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">
                            <span>WHO WE SERVE</span>
                            <svg id="mobileDropdownIcon" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobileDropdown" class="hidden pl-4 pt-2 mt-2">
                            <div class="grid grid-cols-2 gap-2">
                                <a href="cities/pearland.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Pearland</a>
                                <a href="cities/league-city.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">League City</a>
                                <a href="cities/friendswood.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Friendswood</a>
                                <a href="cities/clear-lake.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Clear Lake</a>
                                <a href="cities/pasadena.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Pasadena</a>
                                <a href="cities/sugar-land.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Sugar Land</a>
                                <a href="cities/missouri-city.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Missouri City</a>
                                <a href="cities/webster.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Webster</a>
                                <a href="cities/alvin.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Alvin</a>
                                <a href="cities/manvel.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Manvel</a>
                                <a href="cities/seabrook.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Seabrook</a>
                                <a href="cities/la-porte.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">La Porte</a>
                                <a href="cities/deer-park.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">Deer Park</a>
                                <a href="cities/south-houston.html" onclick="toggleMobileMenu()" class="text-xs text-gray-600 hover:text-dark-gold transition py-1">South Houston</a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#about" onclick="toggleMobileMenu()" class="text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">WHO WE ARE</a>
                    <a href="#contact" onclick="toggleMobileMenu()" class="text-sm font-medium text-gray-700 hover:text-dark-gold transition py-2">CONNECT</a>
                    <a href="tel:7134080604" onclick="toggleMobileMenu()" class="text-sm font-medium text-dark-gold hover:text-gold transition py-2">
                        📞 (713) 408-0604
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section with Search and Action Options -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center py-24 pt-32">
        <!-- Background: static image (fast first paint + reduced-motion fallback) + looping video -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/media/properties/hero-background.jpg');" aria-hidden="true"></div>
            <video
                id="heroVideo"
                class="absolute inset-0 z-[1] h-full w-full object-cover object-center pointer-events-none motion-reduce:hidden"
                autoplay
                muted
                loop
                playsinline
                poster="assets/media/properties/hero-background.jpg"
                preload="metadata"
                fetchpriority="high"
                disablepictureinpicture
                disableremoteplayback
                aria-hidden="true"
            >
                <source src="assets/media/properties/mainbckg.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 z-[2] bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        </div>
        <div class="relative z-10 w-full max-w-6xl mx-auto px-6">
            <!-- Success/Error Messages -->
            <?php if (isset($_GET['formSubmitted']) && $_GET['formSubmitted'] == '1'): ?>
                <div class="mb-8 bg-green-100 border-2 border-green-500 text-green-800 px-6 py-4 rounded-lg text-center">
                    <p class="text-lg font-semibold mb-2">Thank you for your submission!</p>
                    <p class="text-base">We will be back to you shortly.</p>
                </div>
            <?php elseif (isset($_GET['error']) && $_GET['error'] == '1' && isset($_GET['type'])): ?>
                <div class="mb-8 bg-red-100 border-2 border-red-500 text-red-800 px-6 py-4 rounded-lg text-center">
                    <p class="text-lg font-semibold">There was an error submitting your form. Please try again or contact us directly.</p>
                </div>
            <?php else: ?>
                <div id="formSuccessMessage" class="hidden mb-8 bg-green-100 border-2 border-green-500 text-green-800 px-6 py-4 rounded-lg text-center">
                    <p class="text-lg font-semibold mb-2">Thank you for your submission!</p>
                    <p class="text-base">We will be back to you shortly.</p>
                </div>
                <div id="formErrorMessage" class="hidden mb-8 bg-red-100 border-2 border-red-500 text-red-800 px-6 py-4 rounded-lg text-center">
                    <p class="text-lg font-semibold">There was an error submitting your form. Please try again or contact us directly.</p>
                </div>
            <?php endif; ?>

            <!-- Main Search Bar (anchor for #search links) -->
            <div id="search" class="text-center mb-12 px-4 scroll-mt-28">
                <div class="mb-8 sm:mb-10">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif font-bold mb-3 text-white drop-shadow-lg">
                        <span class="text-dark-gold">HDRS</span> <span class="text-white">REALTY CO.</span>
                    </h1>
                    <div class="w-24 h-1 bg-dark-gold mx-auto mb-4"></div>
                    <p class="text-sm sm:text-base md:text-lg text-white/95 drop-shadow-md font-light tracking-wide uppercase">
                        Housing Decisions made Ridiculously Simple
                    </p>
                </div>
                
                <!-- Search Bar with Buy Pre-selected -->
                <div class="bg-white/80 backdrop-blur-sm rounded-lg shadow-2xl p-4 sm:p-6 md:p-8 md:p-10 max-w-4xl mx-auto">
                    <form id="heroSearchForm" onsubmit="handleHeroSearch(event)" class="flex flex-row gap-2 sm:gap-3 md:gap-4">
                        <!-- Buy Button (Pre-selected) - Hidden on mobile -->
                        <button type="button" id="buyBtn" class="flex bg-dark-gold text-white px-3 py-3 sm:px-6 sm:py-4 rounded-lg font-medium hover:bg-gold transition items-center justify-center gap-1 sm:gap-2 whitespace-nowrap flex-shrink-0" aria-haspopup="dialog" aria-controls="harBuyModal" title="Open MLS home search">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="text-sm sm:text-base">Buy</span>
                        </button>
                        
                        <!-- Search Input -->
                        <div class="flex-1 relative min-w-0">
                            <input 
                                type="text" 
                                id="heroSearchInput" 
                                placeholder="Enter city or zip code..." 
                                class="w-full px-4 py-3 sm:px-6 sm:py-4 pr-10 sm:pr-12 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition text-sm sm:text-base md:text-lg"
                                required
                            >
                            <svg class="absolute right-3 sm:right-4 top-1/2 transform -translate-y-1/2 w-4 h-4 sm:w-5 sm:h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        
                        <!-- Search Button -->
                        <button type="submit" class="bg-dark-gold text-white px-4 py-3 sm:px-6 sm:py-4 md:px-8 md:py-4 rounded-lg font-medium hover:bg-gold transition flex items-center justify-center gap-1 sm:gap-2 whitespace-nowrap flex-shrink-0">
                            <span class="text-sm sm:text-base">Search</span>
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sell Form (Hidden by default) -->
            <div id="sellForm" class="hidden bg-white rounded-lg shadow-2xl p-4 sm:p-6 md:p-8 mb-8">
                <div class="flex justify-between items-center mb-4 sm:mb-6">
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-serif font-bold text-gray-800">Sell Your Property</h2>
                    <button onclick="hideSellForm()" class="text-gray-500 hover:text-dark-gold text-2xl sm:text-3xl">&times;</button>
                </div>
                <form id="sellFormElement" action="assets/php/sell_evaluate.php" method="POST" class="space-y-4">
                    <input type="hidden" name="formType" value="sell">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="sellFirstName" class="block mb-2 text-sm font-medium text-gray-700">First Name *</label>
                            <input type="text" id="sellFirstName" name="firstName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                        </div>
                        <div>
                            <label for="sellLastName" class="block mb-2 text-sm font-medium text-gray-700">Last Name *</label>
                            <input type="text" id="sellLastName" name="lastName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                        </div>
                    </div>
                    <div>
                        <label for="sellEmail" class="block mb-2 text-sm font-medium text-gray-700">Email Address *</label>
                        <input type="email" id="sellEmail" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <div>
                        <label for="sellPhone" class="block mb-2 text-sm font-medium text-gray-700">Phone Number *</label>
                        <input type="tel" id="sellPhone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <div>
                        <label for="sellAddress" class="block mb-2 text-sm font-medium text-gray-700">Property Address *</label>
                        <input type="text" id="sellAddress" name="address" required placeholder="Street address, City, State, ZIP" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <button type="submit" class="w-full bg-dark-gold text-white px-8 py-4 text-lg font-medium tracking-wide hover:bg-gold transition rounded-lg">
                        SUBMIT
                    </button>
                </form>
            </div>

            <!-- Evaluate Form (Hidden by default) -->
            <div id="evaluateForm" class="hidden bg-white rounded-lg shadow-2xl p-4 sm:p-6 md:p-8 mb-8">
                <div class="flex justify-between items-center mb-4 sm:mb-6">
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-serif font-bold text-gray-800">Evaluate Your Property</h2>
                    <button onclick="hideEvaluateForm()" class="text-gray-500 hover:text-dark-gold text-2xl sm:text-3xl">&times;</button>
                </div>
                <form id="evaluateFormElement" action="assets/php/sell_evaluate.php" method="POST" class="space-y-4">
                    <input type="hidden" name="formType" value="evaluate">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="evalFirstName" class="block mb-2 text-sm font-medium text-gray-700">First Name *</label>
                            <input type="text" id="evalFirstName" name="firstName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                        </div>
                        <div>
                            <label for="evalLastName" class="block mb-2 text-sm font-medium text-gray-700">Last Name *</label>
                            <input type="text" id="evalLastName" name="lastName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                        </div>
                    </div>
                    <div>
                        <label for="evalEmail" class="block mb-2 text-sm font-medium text-gray-700">Email Address *</label>
                        <input type="email" id="evalEmail" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <div>
                        <label for="evalPhone" class="block mb-2 text-sm font-medium text-gray-700">Phone Number *</label>
                        <input type="tel" id="evalPhone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <div>
                        <label for="evalAddress" class="block mb-2 text-sm font-medium text-gray-700">Property Address *</label>
                        <input type="text" id="evalAddress" name="address" required placeholder="Street address, City, State, ZIP" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <button type="submit" class="w-full bg-dark-gold text-white px-8 py-4 text-lg font-medium tracking-wide hover:bg-gold transition rounded-lg">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Reviews -->
    <section id="google-reviews" aria-label="HDRS Realty Co. Google reviews" class="border-t border-b border-gray-200 bg-gradient-to-r from-gray-50 via-white to-gray-50 py-10 md:py-12">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6 md:gap-10">
                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
                    <div class="flex-shrink-0" aria-hidden="true">
                        <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Google reviews</p>
                        <p class="text-lg font-serif font-bold text-gray-900">See what clients say about HDRS Realty Co.</p>
                        <div class="flex justify-center sm:justify-start gap-0.5 mt-2" aria-hidden="true">
                            <svg class="w-5 h-5 text-dark-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-dark-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-dark-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-dark-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-dark-gold" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                    </div>
                </div>
                <a href="https://www.google.com/search?sca_esv=14041948d1d25a20&sxsrf=ANbL-n6bcOX5yZD_KuZtrTnUkRtSk3QcdA:1774212621146&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOUd1MCQqZHhdZE_bWPntU5o_srsRvehD5WFo_67-lvVVmXDKkjg5jSgFhkSJNXDD3qYkLLNFD2u13ydDOVnqgyXiL4M6mkH-Ytdxin43Dla2v9pPRIzQ3tnbJTt_Y0D9_cUNF89GXwsh0F4RJ9DSSV0zhMaZ&q=Trevor+Hondros+Realtor,+REAL+BROKER+LLC-+Houston,+TX+Reviews&sa=X&ved=2ahUKEwjP-6eIsbSTAxXQlmoFHd6ABCEQ0bkNegQINhAF&biw=1368&bih=785&dpr=2" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-dark-gold text-white px-6 py-3 rounded-lg font-medium hover:bg-gold transition whitespace-nowrap shadow-sm">
                    Read reviews from Google
                    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 mt-10 pt-10 border-t border-gray-200">
                <article class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm flex flex-col h-full">
                    <div class="flex gap-0.5 mb-3" aria-hidden="true">
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-2">Google review</p>
                    <blockquote class="text-gray-700 leading-relaxed flex-grow" cite="https://www.google.com/search?sca_esv=14041948d1d25a20&sxsrf=ANbL-n6bcOX5yZD_KuZtrTnUkRtSk3QcdA:1774212621146&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOUd1MCQqZHhdZE_bWPntU5o_srsRvehD5WFo_67-lvVVmXDKkjg5jSgFhkSJNXDD3qYkLLNFD2u13ydDOVnqgyXiL4M6mkH-Ytdxin43Dla2v9pPRIzQ3tnbJTt_Y0D9_cUNF89GXwsh0F4RJ9DSSV0zhMaZ&q=Trevor+Hondros+Realtor,+REAL+BROKER+LLC-+Houston,+TX+Reviews&sa=X&ved=2ahUKEwjP-6eIsbSTAxXQlmoFHd6ABCEQ0bkNegQINhAF&biw=1368&bih=785&dpr=2">
                        <p class="italic">“Trevor made the entire process seamless. His expertise and dedication are unmatched!”</p>
                    </blockquote>
                    <p class="mt-4 font-semibold text-gray-900">Sarah Johnson</p>
                    <p class="text-xs text-gray-500 mt-0.5">Posted on Google</p>
                </article>
                <article class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm flex flex-col h-full">
                    <div class="flex gap-0.5 mb-3" aria-hidden="true">
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-4 h-4 text-dark-gold flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-2">Google review</p>
                    <blockquote class="text-gray-700 leading-relaxed flex-grow" cite="https://www.google.com/search?sca_esv=14041948d1d25a20&sxsrf=ANbL-n6bcOX5yZD_KuZtrTnUkRtSk3QcdA:1774212621146&si=AL3DRZEsmMGCryMMFSHJ3StBhOdZ2-6yYkXd_doETEE1OR-qOUd1MCQqZHhdZE_bWPntU5o_srsRvehD5WFo_67-lvVVmXDKkjg5jSgFhkSJNXDD3qYkLLNFD2u13ydDOVnqgyXiL4M6mkH-Ytdxin43Dla2v9pPRIzQ3tnbJTt_Y0D9_cUNF89GXwsh0F4RJ9DSSV0zhMaZ&q=Trevor+Hondros+Realtor,+REAL+BROKER+LLC-+Houston,+TX+Reviews&sa=X&ved=2ahUKEwjP-6eIsbSTAxXQlmoFHd6ABCEQ0bkNegQINhAF&biw=1368&bih=785&dpr=2">
                        <p class="italic">“Best real estate experience we've ever had. Highly recommend HDRS Realty Co.”</p>
                    </blockquote>
                    <p class="mt-4 font-semibold text-gray-900">Michael Chen</p>
                    <p class="text-xs text-gray-500 mt-0.5">Posted on Google</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Buy, Sell, Evaluate Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div id="actionUnderConstructionMsg" class="hidden mb-6 rounded-lg border-2 border-amber-200 bg-amber-50 px-4 py-4 text-amber-900 shadow-sm" role="alert">
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-4 text-center">
                        <p class="font-serif font-semibold text-lg">Sorry — Under Construction</p>
                        <button type="button" onclick="document.getElementById('actionUnderConstructionMsg').classList.add('hidden')" class="text-sm text-amber-800/90 hover:text-amber-950 underline underline-offset-2">Dismiss</button>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-stretch">
                    <!-- Buy, Sell, Evaluate — stacked vertically -->
                    <div class="flex flex-col gap-4">
                        <a href="connect.html?topic=buy" class="bg-white border-2 border-gray-200 rounded-lg p-5 sm:p-6 hover:border-dark-gold hover:shadow-xl transition-all group text-left relative overflow-hidden flex flex-row items-center gap-5 sm:gap-6 w-full">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-dark-gold/5 rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative z-10 flex-shrink-0 w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-dark-gold/10 flex items-center justify-center group-hover:bg-dark-gold transition-colors">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-dark-gold group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <div class="relative z-10 flex-1 min-w-0">
                                <h3 class="text-xl sm:text-2xl font-serif font-bold mb-1 text-gray-800 group-hover:text-dark-gold transition">Buy</h3>
                                <p class="text-sm text-gray-600 leading-relaxed">Find your perfect property with our comprehensive search tools and expert guidance</p>
                                <div class="mt-2 flex items-center text-dark-gold opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-sm font-medium mr-2">Get Started</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="connect.html?topic=sell" class="bg-white border-2 border-gray-200 rounded-lg p-5 sm:p-6 hover:border-dark-gold hover:shadow-xl transition-all group text-left relative overflow-hidden flex flex-row items-center gap-5 sm:gap-6 w-full">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-dark-gold/5 rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative z-10 flex-shrink-0 w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-dark-gold/10 flex items-center justify-center group-hover:bg-dark-gold transition-colors">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-dark-gold group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="relative z-10 flex-1 min-w-0">
                                <h3 class="text-xl sm:text-2xl font-serif font-bold mb-1 text-gray-800 group-hover:text-dark-gold transition">Sell</h3>
                                <p class="text-sm text-gray-600 leading-relaxed">Maximize your property value with professional marketing and negotiation expertise</p>
                                <div class="mt-2 flex items-center text-dark-gold opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-sm font-medium mr-2">Get Started</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="connect.html?topic=evaluate" class="bg-white border-2 border-gray-200 rounded-lg p-5 sm:p-6 hover:border-dark-gold hover:shadow-xl transition-all group text-left relative overflow-hidden flex flex-row items-center gap-5 sm:gap-6 w-full">
                            <div class="absolute top-0 right-0 w-20 h-20 bg-dark-gold/5 rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="relative z-10 flex-shrink-0 w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-dark-gold/10 flex items-center justify-center group-hover:bg-dark-gold transition-colors">
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-dark-gold group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div class="relative z-10 flex-1 min-w-0">
                                <h3 class="text-xl sm:text-2xl font-serif font-bold mb-1 text-gray-800 group-hover:text-dark-gold transition">Evaluate</h3>
                                <p class="text-sm text-gray-600 leading-relaxed">Get a professional property evaluation to understand your home's market value</p>
                                <div class="mt-2 flex items-center text-dark-gold opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-sm font-medium mr-2">Get Started</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Listings: sale vs rent -->
                    <div class="flex flex-col justify-center bg-gray-50 border-2 border-gray-200 rounded-xl p-6 sm:p-8 lg:min-h-full">
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1">Browse listings</p>
                        <h3 class="text-2xl font-serif font-bold text-gray-900 mb-2">Homes on the market</h3>
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed">Search current homes for sale or rental properties on HAR.com.</p>
                        <div class="flex flex-col gap-3">
                            <button type="button" onclick="showUnderConstruction()" class="flex items-center justify-between gap-4 bg-white border-2 border-gray-200 rounded-lg px-4 py-4 hover:border-dark-gold hover:shadow-md transition-all group w-full text-left cursor-pointer">
                                <div class="text-left">
                                    <span class="font-serif font-bold text-gray-900 group-hover:text-dark-gold transition block">Current listings</span>
                                    <span class="text-xs text-gray-500">Homes for sale</span>
                                </div>
                                <svg class="w-5 h-5 text-dark-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                            <button type="button" onclick="showUnderConstruction()" class="flex items-center justify-between gap-4 bg-white border-2 border-gray-200 rounded-lg px-4 py-4 hover:border-dark-gold hover:shadow-md transition-all group w-full text-left cursor-pointer">
                                <div class="text-left">
                                    <span class="font-serif font-bold text-gray-900 group-hover:text-dark-gold transition block">Rental properties</span>
                                    <span class="text-xs text-gray-500">Homes for rent</span>
                                </div>
                                <svg class="w-5 h-5 text-dark-gold flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Trevor Hondros - Gee Team Style -->
    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6 max-w-5xl">
            
            <!-- Hero Title -->
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-4">Working With an Experienced Realtor Matters</h2>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                    Local expertise • Proven results • Full accountability
                </p>
            </div>

            <!-- Main Blurb -->
            <div class="text-center mb-12 md:mb-16">
                <p class="text-base md:text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    With <strong class="text-dark-gold">3+ years of experience</strong>, <strong class="text-dark-gold">$5 million in sales volume</strong>, and <strong class="text-dark-gold">18+ satisfied clients</strong>, Trevor brings proven strategies, deep Houston market knowledge, and complete transparency to every transaction. Whether you're buying, selling, or investing, expect service rooted in trust and track record.
                </p>
            </div>

            <!-- Stats Row -->
            <div class="flex flex-wrap justify-center gap-8 md:gap-12 mb-12 md:mb-16">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-dark-gold mb-2" id="aboutYearsExp" data-target="3" data-suffix="+">0+</div>
                    <div class="text-sm md:text-base font-medium text-gray-600 uppercase tracking-wide">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-dark-gold mb-2" id="aboutSalesVolume" data-target="5" data-suffix="M" data-prefix="$">$0M</div>
                    <div class="text-sm md:text-base font-medium text-gray-600 uppercase tracking-wide">Sales Volume</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold text-dark-gold mb-2" id="aboutClients" data-target="18" data-suffix="+">0+</div>
                    <div class="text-sm md:text-base font-medium text-gray-600 uppercase tracking-wide">Satisfied Clients</div>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mb-12 md:mb-16">
                <div class="bg-gray-50 rounded-lg p-6 md:p-8 text-center">
                    <div class="w-16 h-16 bg-dark-gold rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Competitive Rates</h3>
                    <p class="text-gray-600 text-sm md:text-base">Expert negotiation skills ensure you get the best deal possible.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 md:p-8 text-center">
                    <div class="w-16 h-16 bg-dark-gold rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Full Support</h3>
                    <p class="text-gray-600 text-sm md:text-base">Guidance you can rely on from initial search through closing.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 md:p-8 text-center">
                    <div class="w-16 h-16 bg-dark-gold rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Local Expertise</h3>
                    <p class="text-gray-600 text-sm md:text-base">Deep knowledge of the Houston market and surrounding areas.</p>
                </div>
            </div>

            <!-- Profile Section -->
            <div class="bg-gray-50 rounded-lg p-8 md:p-10 mb-12 md:mb-16">
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
                    <div class="flex-shrink-0 w-32 h-32 md:w-40 md:h-40 rounded-lg overflow-hidden bg-white shadow-md">
                        <img src="assets/media/profile/trevor-hondros.jpg" alt="Trevor Hondros" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'text-4xl font-serif font-bold text-dark-gold flex items-center justify-center h-full\'>TH</div>';">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Trevor Hondros</h3>
                        <p class="text-lg text-gray-600 mb-4">Real Estate Professional • Real Broker</p>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Real estate wasn't my initial career path, but once I began helping families achieve homeownership, <strong>I found my true calling</strong>. I bring dedication, strong work ethic, and proven results to every transaction.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                            <a href="tel:7134080604" class="bg-dark-gold text-white px-6 py-3 rounded-lg font-semibold hover:bg-gold transition inline-flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Call (713) 408-0604
                            </a>
                            <a href="#contact" class="border-2 border-dark-gold text-dark-gold px-6 py-3 rounded-lg font-semibold hover:bg-dark-gold hover:text-white transition inline-flex items-center justify-center gap-2">
                                Get Started
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center">
                <a href="#contact" class="inline-block bg-dark-gold text-white px-8 md:px-12 py-4 md:py-5 rounded-lg font-bold text-lg md:text-xl hover:bg-gold transition shadow-lg">
                    Let's Work Together
                </a>
            </div>

        </div>
    </section>

    <!-- Where We Work Section -->
    <section id="whereWeWork" class="py-24 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold mb-4">Where We Work</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Serving communities across the Greater Houston area</p>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <!-- Main Cities Grid -->
                <div id="citiesGrid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6 mb-8">
                    <a href="cities/pearland.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Pearland</h3>
                    </a>
                    <a href="cities/league-city.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">League City</h3>
                    </a>
                    <a href="cities/friendswood.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Friendswood</h3>
                    </a>
                    <a href="cities/clear-lake.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Clear Lake</h3>
                    </a>
                    <a href="cities/pasadena.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Pasadena</h3>
                    </a>
                    <a href="cities/sugar-land.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Sugar Land</h3>
                    </a>
                    <a href="cities/missouri-city.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Missouri City</h3>
                    </a>
                    <a href="cities/webster.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Webster</h3>
                    </a>
                </div>

                <!-- More Cities (Hidden by default) -->
                <div id="moreCities" class="hidden grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6 mb-8">
                    <a href="cities/alvin.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Alvin</h3>
                    </a>
                    <a href="cities/manvel.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Manvel</h3>
                    </a>
                    <a href="cities/seabrook.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Seabrook</h3>
                    </a>
                    <a href="cities/la-porte.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">La Porte</h3>
                    </a>
                    <a href="cities/deer-park.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">Deer Park</h3>
                    </a>
                    <a href="cities/south-houston.html" class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl hover:border-2 hover:border-dark-gold transition group">
                        <h3 class="text-lg font-serif font-bold text-gray-800 group-hover:text-dark-gold transition">South Houston</h3>
                    </a>
                </div>

                <!-- And More Button -->
                <div class="text-center">
                    <button id="moreCitiesBtn" onclick="toggleMoreCities()" class="bg-dark-gold text-white px-8 py-3 rounded-lg hover:bg-gold transition font-medium">
                        And More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-dark-gold text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div>
                    <div class="text-5xl font-serif font-bold mb-3">$5M</div>
                    <div class="text-sm font-medium tracking-wide uppercase">Sales Volume This Year</div>
                </div>
                <div>
                    <div class="text-5xl font-serif font-bold mb-3">18+</div>
                    <div class="text-sm font-medium tracking-wide uppercase">Clients This Year</div>
                </div>
                <div>
                    <div class="text-5xl font-serif font-bold mb-3">3</div>
                    <div class="text-sm font-medium tracking-wide uppercase">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home Values Graph Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold mb-4">Market Performance Insights</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Track the growth of real estate investments and market trends over time</p>
            </div>
            
            <!-- Key Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12 max-w-5xl mx-auto">
                <div class="stat-card bg-gradient-to-br from-dark-gold to-gold text-white p-6 rounded-lg shadow-lg">
                    <p class="text-sm font-medium mb-2 opacity-90">Average Annual Return</p>
                    <p class="text-4xl font-serif font-bold mb-1">8.5%</p>
                    <p class="text-xs opacity-75">5-Year Average</p>
                </div>
                <div class="stat-card bg-gray-100 border-2 border-dark-gold p-6 rounded-lg">
                    <p class="text-sm font-medium text-gray-600 mb-2">Average Home Value Increase</p>
                    <p class="text-4xl font-serif font-bold text-dark-gold mb-1">12%</p>
                    <p class="text-xs text-gray-500">This Year</p>
                </div>
                <div class="stat-card bg-gray-100 border-2 border-dark-gold p-6 rounded-lg">
                    <p class="text-sm font-medium text-gray-600 mb-2">Average Equity Gain</p>
                    <p class="text-4xl font-serif font-bold text-dark-gold mb-1">$45K</p>
                    <p class="text-xs text-gray-500">Per Property</p>
                </div>
            </div>

            <!-- Graph Container -->
            <div class="max-w-6xl mx-auto">
                <div class="bg-white border-2 border-gray-100 rounded-lg shadow-lg p-8 md:p-12">
                    <div class="mb-6">
                        <h3 class="text-2xl font-serif font-bold mb-2">Annual Return on Home Values</h3>
                        <p class="text-sm text-gray-600">Percentage growth year-over-year</p>
                    </div>
                    <div class="relative" style="height: 400px;">
                        <canvas id="homeValuesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Listings Section -->
    <section class="py-24 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-center mb-16">Recent Sales</h2>
            <div class="relative max-w-7xl mx-auto">
                <div id="listingsCarousel" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Listings will be populated by JavaScript -->
                </div>
                <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 bg-white border border-gray-300 text-dark-gold p-3 rounded-full hover:bg-dark-gold hover:text-white hover:border-dark-gold transition shadow-lg">
                    ‹
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 bg-white border border-gray-300 text-dark-gold p-3 rounded-full hover:bg-dark-gold hover:text-white hover:border-dark-gold transition shadow-lg">
                    ›
                </button>
            </div>
        </div>
    </section>

    <!-- Quick Contact Section -->
    <section class="py-16 bg-dark-gold text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Ready to Get Started?</h2>
                <p class="text-lg mb-8 opacity-90">Multiple ways to reach me - choose what's most convenient for you</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <a href="tel:7134080604" class="bg-white text-dark-gold px-6 py-4 rounded-lg font-semibold hover:bg-gold hover:text-white transition flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(713) 408-0604</span>
                    </a>
                    <a href="mailto:connect@hdrsrealtyco.com" class="bg-white text-dark-gold px-6 py-4 rounded-lg font-semibold hover:bg-gold hover:text-white transition flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>Send Email</span>
                    </a>
                    <a href="#contact" class="bg-white text-dark-gold px-6 py-4 rounded-lg font-semibold hover:bg-gold hover:text-white transition flex items-center justify-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        <span>Contact Form</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-center mb-4">Let's Connect</h2>
            <p class="text-center text-gray-600 mb-12">Get in touch to begin your real estate journey</p>
            <div class="max-w-2xl mx-auto">
                <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
                        Thank you! Your message has been received. We will get back to you soon.
                    </div>
                <?php elseif (isset($_GET['error']) && $_GET['error'] == '1'): ?>
                    <div class="bg-red-500 text-white p-4 rounded-lg mb-6 text-center">
                        There was an error sending your message. Please try again or contact us directly.
                    </div>
                <?php else: ?>
                    <div id="formMessage" class="hidden mb-6 text-center p-4 rounded-lg"></div>
                <?php endif; ?>
                <form id="contactForm" action="assets/php/contact.php" method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block mb-2 text-sm font-medium text-gray-700">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                        </div>
                        <div>
                            <label for="lastName" class="block mb-2 text-sm font-medium text-gray-700">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition">
                    </div>
                    <div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-700">Message *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold transition"></textarea>
                    </div>
                    <div class="text-xs text-gray-500 mb-4">
                        <p>By providing your contact information, you acknowledge and agree to our Privacy Policy and consent to receiving marketing communications.</p>
                    </div>
                    <button type="submit" class="w-full bg-dark-gold text-white px-8 py-4 text-sm font-medium tracking-wide hover:bg-gold transition">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-16">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <h3 class="text-2xl font-serif font-bold mb-4">
                        <span class="text-gold">HDRS</span> REALTY CO.
                    </h3>
                    <p class="text-gray-400 text-sm leading-relaxed"><strong class="text-gold">Housing Decisions made Ridiculously Simple.</strong> HDRS Realty Co. is a full-service, luxury real estate company that has redefined the client-broker relationship. We go beyond ordinary and traditional, proving that passion, creative thinking, and the relentless pursuit of our clients' success makes us the real estate experience that will last.</p>
                </div>
                <div>
                    <h4 class="text-sm font-medium mb-4 tracking-wide uppercase">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#hero" class="text-gray-400 hover:text-gold transition">Home</a></li>
                        <li><a href="search.html" class="text-gray-400 hover:text-gold transition">Search Homes</a></li>
                        <li><a href="blog.html" class="text-gray-400 hover:text-gold transition">Blog</a></li>
                        <li><a href="#whereWeWork" class="text-gray-400 hover:text-gold transition">Where We Work</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-gold transition">Who We Are</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-gold transition">Connect</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-sm font-medium mb-4 tracking-wide uppercase">Contact</h4>
                    <div class="space-y-3 text-sm text-gray-400">
                        <p class="text-white font-semibold">Trevor Hondros</p>
                        <p>Real Broker</p>
                        <div class="mt-4 space-y-2">
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <a href="tel:7134080604" class="hover:text-gold transition">(713) 408-0604</a>
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <a href="mailto:connect@hdrsrealtyco.com" class="hover:text-gold transition">connect@hdrsrealtyco.com</a>
                            </p>
                            <p class="flex items-start gap-2">
                                <svg class="w-4 h-4 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.3.8 10.586a2 2 0 01-2.827 0l-4.244-4.243a2 2 0 010-2.827L7.414 1.586a2 2 0 012.827 0l4.243 4.243a2 2 0 010 2.827z"></path>
                                </svg>
                                <span>1355 E. League City Pkwy #800<br>League City, TX 77573</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; <?php echo date('Y'); ?> HDRS Realty Co. All rights reserved. | Privacy Policy</p>
            </div>
        </div>
    </footer>

    <!-- HAR MLS IDX (Buy): full listing search in a modal -->
    <div id="harBuyModal" class="hidden fixed inset-0 flex items-center justify-center p-3 sm:p-6" role="dialog" aria-modal="true" aria-labelledby="harBuyModalTitle">
        <div id="harBuyModalBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm" tabindex="-1"></div>
        <div class="har-buy-modal-panel flex w-full max-w-6xl flex-col overflow-hidden rounded-xl bg-white shadow-2xl" style="height: min(90vh, 900px);">
            <div class="har-buy-modal-toolbar flex shrink-0 items-center justify-between gap-4 border-b border-gray-200 bg-white px-4 py-3">
                <h2 id="harBuyModalTitle" class="font-serif text-lg font-bold text-gray-900 sm:text-xl">Search homes for sale (MLS)</h2>
                <button type="button" id="harBuyModalClose" class="har-buy-modal-close p-2 text-3xl leading-none text-gray-500 hover:text-dark-gold" aria-label="Close" onclick="window.closeHarBuyModal && window.closeHarBuyModal()">&times;</button>
            </div>
            <div class="min-h-0 flex-1 bg-gray-100">
                <iframe id="harBuyModalIframe" class="h-full w-full min-h-[60vh] border-0 sm:min-h-0" title="HAR MLS property listings"></iframe>
            </div>
        </div>
    </div>

    <!-- Floating Contact Button -->
    <div id="floatingContact" class="fixed bottom-6 right-6 z-50">
        <a href="tel:7134080604" class="bg-dark-gold text-white p-4 rounded-full shadow-2xl hover:bg-gold transition-all duration-300 flex items-center gap-3 group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <span class="hidden md:block font-semibold">Call Now</span>
        </a>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/search.js"></script>
    <script>
        // Set current year
        document.getElementById('currentYear').textContent = new Date().getFullYear();
        
        // Handle contact form submission
        var contactFormEl = document.getElementById('contactForm');
        if (contactFormEl) {
            contactFormEl.addEventListener('submit', function(e) {
                // Let the form submit normally to PHP handler
            });
        }
        
        // Check for success/error messages from PHP redirect (for JavaScript fallback)
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === '1' && !document.querySelector('#contact .bg-green-500')) {
            const formMessage = document.getElementById('formMessage');
            if (formMessage) {
                formMessage.className = 'bg-green-500 text-white p-4 rounded-lg mb-6 text-center';
                formMessage.textContent = 'Thank you! Your message has been received. We will get back to you soon.';
                formMessage.classList.remove('hidden');
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        } else if (urlParams.get('error') === '1' && !document.querySelector('#contact .bg-red-500')) {
            const formMessage = document.getElementById('formMessage');
            if (formMessage) {
                formMessage.className = 'bg-red-500 text-white p-4 rounded-lg mb-6 text-center';
                formMessage.textContent = 'There was an error sending your message. Please try again or contact us directly.';
                formMessage.classList.remove('hidden');
                formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }

        // Handle sell/evaluate form submissions (JavaScript fallback)
        if (urlParams.get('formSubmitted') === '1' && !document.querySelector('#hero .bg-green-100')) {
            const successMessage = document.getElementById('formSuccessMessage');
            if (successMessage) {
                successMessage.classList.remove('hidden');
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        } else if (urlParams.get('error') === '1' && urlParams.get('type') && !document.querySelector('#hero .bg-red-100')) {
            const errorMessage = document.getElementById('formErrorMessage');
            if (errorMessage) {
                errorMessage.classList.remove('hidden');
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }

        // HAR IDX MLS listing search (Buy tab) — same embed as har.com agent IDX
        var HAR_IDX_BUY_URL = 'https://www.har.com/idx/mls/listing?sitetype=aws&cid=770582&mlsorgid=1&allmls=n';

        function openHarBuyModal() {
            var modal = document.getElementById('harBuyModal');
            var iframe = document.getElementById('harBuyModalIframe');
            if (!modal || !iframe) return;
            iframe.src = HAR_IDX_BUY_URL;
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeHarBuyModal() {
            var modal = document.getElementById('harBuyModal');
            var iframe = document.getElementById('harBuyModalIframe');
            if (!modal) return;
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            if (iframe) iframe.src = 'about:blank';
        }

        window.openHarBuyModal = openHarBuyModal;
        window.closeHarBuyModal = closeHarBuyModal;

        // Hero search: Buy tab opens HAR MLS IDX in a popup
        function handleHeroSearch(event) {
            event.preventDefault();
            var searchInput = document.getElementById('heroSearchInput');
            var location = searchInput ? searchInput.value.trim() : '';
            if (location) {
                openHarBuyModal();
            }
        }

        (function initHarBuyModalControls() {
            var closeBtn = document.getElementById('harBuyModalClose');
            var backdrop = document.getElementById('harBuyModalBackdrop');
            var buyBtn = document.getElementById('buyBtn');
            if (closeBtn) {
                closeBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeHarBuyModal();
                });
            }
            if (backdrop) backdrop.addEventListener('click', closeHarBuyModal);
            if (buyBtn) buyBtn.addEventListener('click', openHarBuyModal);
            document.addEventListener('keydown', function (e) {
                if (e.key !== 'Escape') return;
                var modal = document.getElementById('harBuyModal');
                if (modal && !modal.classList.contains('hidden')) closeHarBuyModal();
            });
        })();

        function showUnderConstruction() {
            const el = document.getElementById('actionUnderConstructionMsg');
            if (el) {
                el.classList.remove('hidden');
                el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }

        // Form display functions
        function showSellForm() {
            document.getElementById('sellForm').classList.remove('hidden');
            document.getElementById('evaluateForm').classList.add('hidden');
            document.getElementById('sellForm').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function hideSellForm() {
            document.getElementById('sellForm').classList.add('hidden');
        }

        function showEvaluateForm() {
            document.getElementById('evaluateForm').classList.remove('hidden');
            document.getElementById('sellForm').classList.add('hidden');
            document.getElementById('evaluateForm').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function hideEvaluateForm() {
            document.getElementById('evaluateForm').classList.add('hidden');
        }

        // Toggle more cities
        function toggleMoreCities() {
            const moreCities = document.getElementById('moreCities');
            const moreBtn = document.getElementById('moreCitiesBtn');
            if (moreCities.classList.contains('hidden')) {
                moreCities.classList.remove('hidden');
                moreBtn.textContent = 'Show Less';
            } else {
                moreCities.classList.add('hidden');
                moreBtn.textContent = 'And More';
            }
        }

        // Toggle mobile menu
        function toggleMobileMenu(event) {
            if (event) {
                event.preventDefault();
                event.stopPropagation();
                event.stopImmediatePropagation();
            }
            
            const mobileMenu = document.getElementById('mobileMenu');
            const menuBtn = document.getElementById('mobileMenuBtn');
            
            if (!mobileMenu) {
                console.error('Mobile menu element not found');
                return false;
            }
            
            if (!menuBtn) {
                console.error('Mobile menu button not found');
                return false;
            }
            
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                // Show menu
                mobileMenu.classList.remove('hidden');
                menuBtn.setAttribute('aria-expanded', 'true');
                menuBtn.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                console.log('Mobile menu opened');
            } else {
                // Hide menu
                mobileMenu.classList.add('hidden');
                menuBtn.setAttribute('aria-expanded', 'false');
                // Close dropdown when closing menu
                const mobileDropdown = document.getElementById('mobileDropdown');
                if (mobileDropdown && !mobileDropdown.classList.contains('hidden')) {
                    mobileDropdown.classList.add('hidden');
                    const icon = document.getElementById('mobileDropdownIcon');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                }
                menuBtn.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
                console.log('Mobile menu closed');
            }
            
            return false;
        }

        // Add event listener as fallback for mobile menu button
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            if (mobileMenuBtn) {
                // Remove inline onclick and use event listener only
                mobileMenuBtn.removeAttribute('onclick');
                mobileMenuBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                    console.log('Mobile menu button clicked via event listener');
                    toggleMobileMenu(e);
                }, true); // Use capture phase to fire before other handlers
            } else {
                console.error('Mobile menu button not found on DOMContentLoaded');
            }
        });

        // Toggle mobile dropdown
        function toggleMobileDropdown(event) {
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }
            const mobileDropdown = document.getElementById('mobileDropdown');
            const icon = document.getElementById('mobileDropdownIcon');
            if (!mobileDropdown) {
                console.error('Mobile dropdown element not found');
                return;
            }
            
            const isHidden = mobileDropdown.classList.contains('hidden');
            if (isHidden) {
                mobileDropdown.classList.remove('hidden');
                if (icon) {
                    icon.style.transform = 'rotate(180deg)';
                }
            } else {
                mobileDropdown.classList.add('hidden');
                if (icon) {
                    icon.style.transform = 'rotate(0deg)';
                }
            }
        }

        // Add event listener as fallback for mobile dropdown
        document.addEventListener('DOMContentLoaded', function() {
            const mobileDropdownBtn = document.querySelector('button[onclick*="toggleMobileDropdown"]');
            if (mobileDropdownBtn) {
                mobileDropdownBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    toggleMobileDropdown(e);
                });
            }
        });

        // Close mobile menu when clicking outside (with delay to prevent immediate closure)
        let clickOutsideTimeout;
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuBtn = document.getElementById('mobileMenuBtn');
            const mobileDropdown = document.getElementById('mobileDropdown');
            const mobileDropdownBtn = document.querySelector('button[onclick*="toggleMobileDropdown"]');
            
            // Clear any pending timeout
            clearTimeout(clickOutsideTimeout);
            
            // Don't close if clicking inside the mobile menu, dropdown, or button
            const isClickInside = 
                (mobileMenu && mobileMenu.contains(event.target)) ||
                (menuBtn && menuBtn.contains(event.target)) ||
                (mobileDropdownBtn && mobileDropdownBtn.contains(event.target)) ||
                (mobileDropdown && mobileDropdown.contains(event.target));
            
            if (!isClickInside && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                // Small delay to prevent immediate closure when opening
                clickOutsideTimeout = setTimeout(function() {
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        // Close dropdown when closing menu
                        if (mobileDropdown && !mobileDropdown.classList.contains('hidden')) {
                            mobileDropdown.classList.add('hidden');
                            const icon = document.getElementById('mobileDropdownIcon');
                            if (icon) icon.style.transform = 'rotate(0deg)';
                        }
                        if (menuBtn) {
                            menuBtn.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
                        }
                    }
                }, 100);
            }
        });
    </script>
</body>
</html>



