<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDRS Realty Co. - Trevor Hondros | Your Trusted Real Estate Professional</title>
    <meta name="description" content="Professional real estate services with Trevor Hondros at HDRS Realty Co. Buy, sell, or invest in real estate with confidence.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Chart.js for the home values graph -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
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
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-black">
    
    <!-- Header -->
    <header class="fixed top-0 w-full bg-white shadow-md z-50">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold">
                    <span class="text-dark-gold">HDRS</span> <span class="text-black">Realty Co.</span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#home" class="hover:text-dark-gold transition">Home</a>
                    <a href="#listings" class="hover:text-dark-gold transition">Listings</a>
                    <a href="#about" class="hover:text-dark-gold transition">About</a>
                    <a href="#contact" class="hover:text-dark-gold transition">Contact</a>
                </div>
                <a href="#contact" class="bg-dark-gold text-white px-6 py-2 rounded-lg hover:bg-gold transition">
                    Get Started
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center text-center">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=2075&q=80');">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        <div class="relative z-10 text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-4">HDRS Realty Co.</h1>
            <p class="text-xl md:text-2xl mb-8">Your Trusted Real Estate Partner</p>
            <a href="#contact" class="bg-dark-gold text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gold transition inline-block">
                Start Your Journey Today
            </a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-dark-gold text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">$5M</div>
                    <div class="text-lg">Sales Volume This Year</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">18+</div>
                    <div class="text-lg">Clients This Year</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">3</div>
                    <div class="text-lg">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Why Choose HDRS Realty Co.?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 border-2 border-gray-200 rounded-lg hover:border-dark-gold transition">
                    <div class="text-5xl mb-4">🏠</div>
                    <h3 class="text-2xl font-bold mb-4">Expert Buying</h3>
                    <p class="text-gray-600">Find your dream home with our expert guidance and local market knowledge.</p>
                </div>
                <div class="text-center p-6 border-2 border-gray-200 rounded-lg hover:border-dark-gold transition">
                    <div class="text-5xl mb-4">💰</div>
                    <h3 class="text-2xl font-bold mb-4">Smart Selling</h3>
                    <p class="text-gray-600">Maximize your property value with our proven marketing strategies.</p>
                </div>
                <div class="text-center p-6 border-2 border-gray-200 rounded-lg hover:border-dark-gold transition">
                    <div class="text-5xl mb-4">📈</div>
                    <h3 class="text-2xl font-bold mb-4">Investment Opportunities</h3>
                    <p class="text-gray-600">Build wealth through strategic real estate investments.</p>
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
                <div class="stat-card bg-gray-50 border-2 border-dark-gold p-6 rounded-lg">
                    <p class="text-sm font-medium text-gray-600 mb-2">Average Days on Market</p>
                    <p class="text-4xl font-serif font-bold text-dark-gold mb-1">32</p>
                    <p class="text-xs text-gray-500">Days</p>
                </div>
                <div class="stat-card bg-gray-50 border-2 border-dark-gold p-6 rounded-lg">
                    <p class="text-sm font-medium text-gray-600 mb-2">Total Transactions</p>
                    <p class="text-4xl font-serif font-bold text-dark-gold mb-1">500+</p>
                    <p class="text-xs text-gray-500">Properties Sold</p>
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
    <section id="listings" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Recent Sales</h2>
            <div class="relative">
                <div id="listingsCarousel" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Listings will be populated by JavaScript -->
                </div>
                <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-dark-gold text-white p-3 rounded-full hover:bg-gold transition">
                    ‹
                </button>
                <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-dark-gold text-white p-3 rounded-full hover:bg-gold transition">
                    ›
                </button>
            </div>
        </div>
    </section>

    <!-- About Trevor Hondros Section -->
    <section id="about" class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold mb-4">About Trevor Hondros</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dedicated real estate professional committed to your success</p>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="grid md:grid-cols-2 gap-0">
                        <!-- Image/Profile Section -->
                        <div class="relative h-96 md:h-auto bg-gradient-to-br from-dark-gold to-gold">
                            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/media/profile/trevor-hondros.jpg');">
                                <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/60"></div>
                            </div>
                            <div class="relative text-center text-white p-8 h-full flex flex-col items-center justify-center">
                                <div class="w-48 h-48 mx-auto mb-6 rounded-full bg-white/20 backdrop-blur-sm border-4 border-white/30 overflow-hidden flex items-center justify-center">
                                    <img src="assets/media/profile/trevor-hondros.jpg" alt="Trevor Hondros" class="w-full h-full object-cover" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'text-6xl font-serif font-bold\'>TH</div>';">
                                </div>
                                <h3 class="text-3xl font-serif font-bold mb-2">Trevor Hondros</h3>
                                <p class="text-sm opacity-90 mb-4">Real Estate Professional</p>
                                <p class="text-sm opacity-75">Priority One Real Estate</p>
                            </div>
                        </div>
                        
                        <!-- Content Section -->
                        <div class="p-8 md:p-12">
                            <div class="mb-8">
                                <h4 class="text-2xl font-serif font-bold mb-4 text-dark-gold">My Story</h4>
                                <p class="text-lg leading-relaxed text-gray-700 mb-4">
                                    Welcome to my profile page! Thank you for visiting, I'm thrilled you're here. Real estate wasn't my initial career path, but once I got my license and began helping families realize their dream of home ownership, I found my true calling.
                                </p>
                                <p class="text-lg leading-relaxed text-gray-700">
                                    My dedication and motivation are boundless, and I bring a strong work ethic and extensive experience to every client interaction. I'm confident that I can help you achieve your real estate goals, whether you're buying or selling. Let's work together to make your dreams a reality.
                                </p>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-8">
                                <h4 class="text-xl font-serif font-bold mb-6 text-dark-gold">What Sets Me Apart</h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="flex items-start">
                                        <span class="text-dark-gold mr-3 text-xl">✓</span>
                                        <div>
                                            <p class="font-semibold text-gray-900">Market Expertise</p>
                                            <p class="text-sm text-gray-600">Deep knowledge of local Texas markets</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="text-dark-gold mr-3 text-xl">✓</span>
                                        <div>
                                            <p class="font-semibold text-gray-900">Negotiation Skills</p>
                                            <p class="text-sm text-gray-600">Proven track record of successful deals</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="text-dark-gold mr-3 text-xl">✓</span>
                                        <div>
                                            <p class="font-semibold text-gray-900">Client Focus</p>
                                            <p class="text-sm text-gray-600">Dedicated to your success</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <span class="text-dark-gold mr-3 text-xl">✓</span>
                                        <div>
                                            <p class="font-semibold text-gray-900">Investment Insight</p>
                                            <p class="text-sm text-gray-600">Specialized in investment properties</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Achievements Section -->
                <div class="mt-12 grid md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md text-center border-t-4 border-dark-gold">
                        <div class="text-3xl font-serif font-bold text-dark-gold mb-2">3</div>
                        <p class="text-sm font-medium text-gray-600">Years Experience</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center border-t-4 border-dark-gold">
                        <div class="text-3xl font-serif font-bold text-dark-gold mb-2">18+</div>
                        <p class="text-sm font-medium text-gray-600">Clients This Year</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center border-t-4 border-dark-gold">
                        <div class="text-3xl font-serif font-bold text-dark-gold mb-2">$5M</div>
                        <p class="text-sm font-medium text-gray-600">Sales Volume This Year</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md text-center border-t-4 border-dark-gold">
                        <div class="text-3xl font-serif font-bold text-dark-gold mb-2">100%</div>
                        <p class="text-sm font-medium text-gray-600">Client Satisfaction</p>
                    </div>
                </div>
                
                <!-- Recognition Section -->
                <div class="mt-12 bg-white rounded-lg shadow-lg p-8 md:p-12">
                    <h4 class="text-2xl font-serif font-bold mb-8 text-center text-dark-gold">Recognition & Achievements</h4>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-dark-gold rounded-full flex items-center justify-center">
                                <span class="text-white font-bold">🏆</span>
                            </div>
                            <div>
                                <h5 class="font-semibold text-gray-900 mb-1">Top Real Estate Professional</h5>
                                <p class="text-sm text-gray-600">Ranked among top real estate professionals in Texas</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-dark-gold rounded-full flex items-center justify-center">
                                <span class="text-white font-bold">📊</span>
                            </div>
                            <div>
                                <h5 class="font-semibold text-gray-900 mb-1">Sales Volume Leader</h5>
                                <p class="text-sm text-gray-600">Recognized among top agents based on sales volume</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-dark-gold rounded-full flex items-center justify-center">
                                <span class="text-white font-bold">💼</span>
                            </div>
                            <div>
                                <h5 class="font-semibold text-gray-900 mb-1">Luxury Specialist</h5>
                                <p class="text-sm text-gray-600">Specialized in luxury and investment properties</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-dark-gold rounded-full flex items-center justify-center">
                                <span class="text-white font-bold">⭐</span>
                            </div>
                            <div>
                                <h5 class="font-semibold text-gray-900 mb-1">Client Satisfaction</h5>
                                <p class="text-sm text-gray-600">Consistently high client satisfaction ratings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-yellow-400 mb-4">★★★★★</div>
                    <p class="text-gray-700 mb-4">"Trevor made the entire process seamless. His expertise and dedication are unmatched!"</p>
                    <p class="font-semibold">- Sarah Johnson</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-yellow-400 mb-4">★★★★★</div>
                    <p class="text-gray-700 mb-4">"Best real estate experience we've ever had. Highly recommend HDRS Realty Co."</p>
                    <p class="font-semibold">- Michael Chen</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="text-yellow-400 mb-4">★★★★★</div>
                    <p class="text-gray-700 mb-4">"Professional, knowledgeable, and always available. Trevor exceeded our expectations."</p>
                    <p class="font-semibold">- Emily Rodriguez</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-20 bg-dark-gold text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12">Get In Touch</h2>
            <div class="max-w-2xl mx-auto">
                <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
                    <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
                        Thank you! Your message has been sent successfully. We will get back to you soon.
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['error']) && $_GET['error'] == '1'): ?>
                    <div class="bg-red-500 text-white p-4 rounded-lg mb-6 text-center">
                        There was an error sending your message. Please try again or contact us directly.
                    </div>
                <?php endif; ?>
                <form action="assets/php/contact.php" method="POST" class="bg-white text-black p-8 rounded-lg shadow-lg">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 font-semibold">Name *</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 font-semibold">Email *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold">
                    </div>
                    <div class="mb-6">
                        <label for="phone" class="block mb-2 font-semibold">Phone</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 font-semibold">Message *</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-dark-gold"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-dark-gold text-white px-6 py-3 rounded-lg font-semibold hover:bg-gold transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        <span class="text-gold">HDRS</span> Realty Co.
                    </h3>
                    <p class="text-gray-400">Your trusted real estate partner for buying, selling, and investing.</p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-gold transition">Home</a></li>
                        <li><a href="#listings" class="text-gray-400 hover:text-gold transition">Listings</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-gold transition">About</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-gold transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-semibold mb-4">Contact Info</h4>
                    <p class="text-gray-400">Trevor Hondros</p>
                    <p class="text-gray-400">Priority One Real Estate</p>
                    <p class="text-gray-400 mt-2">Phone: <a href="tel:7134080604" class="hover:text-gold transition">(713) 408-0604</a></p>
                    <p class="text-gray-400">1355 E. League City Pkwy #800</p>
                    <p class="text-gray-400">League City, TX 77573</p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> HDRS Realty Co. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/search.js"></script>
</body>
</html>

