// Home Values Chart
document.addEventListener('DOMContentLoaded', function() {
    // Chart.js configuration for home values
    const ctx = document.getElementById('homeValuesChart');
    if (ctx) {
        // Sample data - replace with actual data
        const years = ['2019', '2020', '2021', '2022', '2023', '2024'];
        const values = [100, 108, 115, 125, 138, 152]; // Percentage values (base 100)
        const annualReturns = [null, 8.0, 6.5, 8.7, 10.4, 10.1]; // Annual return percentages
        
        // Create gradient
        const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(139, 105, 20, 0.3)');
        gradient.addColorStop(1, 'rgba(139, 105, 20, 0.05)');
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: years,
                datasets: [{
                    label: 'Home Value Index',
                    data: values,
                    borderColor: '#8B6914',
                    backgroundColor: gradient,
                    borderWidth: 4,
                    fill: true,
                    tension: 0.5,
                    pointBackgroundColor: '#B8860B',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 3,
                    pointRadius: 8,
                    pointHoverRadius: 10,
                    pointHoverBackgroundColor: '#8B6914',
                    pointHoverBorderColor: '#ffffff',
                    pointHoverBorderWidth: 3,
                    shadowOffsetX: 0,
                    shadowOffsetY: 4,
                    shadowBlur: 10,
                    shadowColor: 'rgba(139, 105, 20, 0.3)'
                }, {
                    label: 'Annual Return %',
                    data: annualReturns,
                    borderColor: '#B8860B',
                    backgroundColor: 'rgba(184, 134, 11, 0.1)',
                    borderWidth: 3,
                    borderDash: [5, 5],
                    fill: false,
                    tension: 0.4,
                    pointBackgroundColor: '#B8860B',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 6,
                    pointHoverRadius: 8,
                    yAxisID: 'y1'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                family: 'Inter',
                                size: 12,
                                weight: '500'
                            },
                            color: '#1f2937'
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.85)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#8B6914',
                        borderWidth: 2,
                        padding: 12,
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        },
                        displayColors: true,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    if (context.datasetIndex === 0) {
                                        label += context.parsed.y + ' (Index)';
                                    } else {
                                        label += context.parsed.y + '%';
                                    }
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        position: 'left',
                        ticks: {
                            callback: function(value) {
                                return value;
                            },
                            font: {
                                size: 11
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)',
                            drawBorder: false
                        },
                        title: {
                            display: true,
                            text: 'Value Index (Base: 100)',
                            font: {
                                size: 12,
                                weight: '600'
                            },
                            color: '#374151'
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        beginAtZero: false,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            },
                            font: {
                                size: 11
                            },
                            color: '#6b7280'
                        },
                        grid: {
                            drawOnChartArea: false,
                            drawBorder: false
                        },
                        title: {
                            display: true,
                            text: 'Annual Return %',
                            font: {
                                size: 12,
                                weight: '600'
                            },
                            color: '#374151'
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            font: {
                                size: 12,
                                weight: '500'
                            },
                            color: '#374151'
                        }
                    }
                },
                animation: {
                    duration: 2000,
                    easing: 'easeInOutQuart'
                }
            }
        });
    }

    // Recent Listings Carousel - Real sold properties from HAR.com
    const listings = [
        {
            address: '3410 Meadow Loop E, Pasadena, TX 77505',
            price: '$215K - $250K',
            beds: '3',
            baths: '2',
            sqft: '1,705',
            soldDate: '10/31/2025',
            image: 'assets/media/properties/3410-meadow-loop.jpg'
        },
        {
            address: '23843 Wimble Dr, Hockley, TX 77447',
            price: '$250K - $285K',
            beds: '4',
            baths: '2',
            sqft: '1,690',
            soldDate: '10/31/2025',
            image: 'assets/media/properties/23843-wimble-dr.jpg'
        },
        {
            address: '11922 Kewalo Basin Ln, Houston, TX 77034',
            price: '$215K - $250K',
            beds: '3',
            baths: '2',
            sqft: '1,168',
            soldDate: '10/28/2025',
            image: 'assets/media/properties/11922-kewalo-basin.jpg'
        },
        {
            address: '3410 Meadow Loop E, Pasadena, TX 77505',
            price: '$215K - $250K',
            beds: '3',
            baths: '2',
            sqft: '1,705',
            soldDate: '10/31/2025',
            image: 'assets/media/properties/3410-meadow-loop.jpg'
        },
        {
            address: '23843 Wimble Dr, Hockley, TX 77447',
            price: '$250K - $285K',
            beds: '4',
            baths: '2',
            sqft: '1,690',
            soldDate: '10/31/2025',
            image: 'assets/media/properties/23843-wimble-dr.jpg'
        },
        {
            address: '11922 Kewalo Basin Ln, Houston, TX 77034',
            price: '$215K - $250K',
            beds: '3',
            baths: '2',
            sqft: '1,168',
            soldDate: '10/28/2025',
            image: 'assets/media/properties/11922-kewalo-basin.jpg'
        }
    ];

    let currentIndex = 0;
    const listingsPerView = 3;

    function renderListings() {
        const carousel = document.getElementById('listingsCarousel');
        if (!carousel) return;

        carousel.innerHTML = '';
        
        for (let i = 0; i < listingsPerView; i++) {
            const index = (currentIndex + i) % listings.length;
            const listing = listings[index];
            
            const listingCard = document.createElement('div');
            listingCard.className = 'bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 property-card';
            listingCard.innerHTML = `
                <div class="relative h-72 bg-cover bg-center" style="background-image: url('${listing.image}');" onerror="this.style.backgroundImage='url(https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80)'">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-white text-dark-gold px-4 py-2 text-xs font-medium tracking-wide uppercase">
                        SOLD
                    </div>
                    <div class="absolute bottom-4 left-4 text-white text-xs">
                        Sold: ${listing.soldDate}
                    </div>
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
                </div>
            `;
            
            carousel.appendChild(listingCard);
        }
    }

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + listings.length) % listings.length;
            renderListings();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % listings.length;
            renderListings();
        });
    }

    // Initialize listings
    renderListings();

    // Auto-rotate listings every 5 seconds
    setInterval(() => {
        currentIndex = (currentIndex + 1) % listings.length;
        renderListings();
    }, 5000);

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Scroll to contact section if there's a message
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1' || urlParams.get('error') === '1') {
        setTimeout(() => {
            const contactSection = document.getElementById('contact');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }, 100);
    }

    // Add scroll animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe sections for animation
    document.querySelectorAll('section').forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
});

