<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>yields App Manual</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7fafc;
        }

        .chart-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            height: 350px;
            max-height: 50vh;
        }

        @media (max-width: 768px) {
            .chart-container {
                height: 300px;
            }
        }

        .modal {
            display: none;
        }

        .modal.is-open {
            display: flex;
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-auto" src="https://placehold.co/150x50/000000/FFFFFF?text=DA-PRDP"
                            alt="DA-PRDP Logo">
                    </div>
                </div>
                <nav class="hidden md:flex md:space-x-8">
                    <a href="#home"
                        class="font-medium text-gray-600 hover:text-green-600 transition duration-150 ease-in-out">Home</a>
                    <a href="#manual-overview"
                        class="font-medium text-gray-600 hover:text-green-600 transition duration-150 ease-in-out">Manual
                        Overview</a>
                    <a href="#interactive-demo"
                        class="font-medium text-gray-600 hover:text-green-600 transition duration-150 ease-in-out">Interactive
                        Demo</a>
                    <a href="#feedback"
                        class="font-medium text-gray-600 hover:text-green-600 transition duration-150 ease-in-out">Feedback
                        Form</a>
                </nav>
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Home</a>
                <a href="#manual-overview"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Manual
                    Overview</a>
                <a href="#interactive-demo"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Interactive
                    Demo</a>
                <a href="#feedback"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-700 hover:bg-gray-50">Feedback
                    Form</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="home" class="relative bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Help Us Improve the <span class="text-green-600">yieldsApp
                                Manual</span></span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Your expertise is crucial. We've created this interactive portal for TAFARMCO, the Department of
                        Agriculture, and PRDP to explore the manual's features and provide valuable feedback.
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="#feedback"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                                Provide Feedback </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="yieldsApp_Manual_061525.pdf" download
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-green-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                Download PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Manual Overview -->
        <section id="manual-overview" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Manual at a Glance</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">A Guide to Smarter
                        Farming</p>
                    <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                        The yieldsApp manual is structured to guide you from basic setup to advanced features. Here's a
                        breakdown of the key areas you can review.
                    </p>
                </div>

                <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0"><i class="fas fa-seedling fa-2x text-green-500"></i></div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">1. Setup & Navigation</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-gray-500">Covers initial login, account access, and creating your
                            first farms and fields. Learn to navigate the main interface and locate all agronomic tools.
                        </p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0"><i class="fas fa-chart-line fa-2x text-green-500"></i></div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">2. Data & Monitoring</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-gray-500">Explore the field overview dashboard, understand weather
                            data, track crop growth stages with satellite imagery, and manage your farm calendar and
                            notifications.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0"><i class="fas fa-flask fa-2x text-green-500"></i></div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">3. Planning & Inputs</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-gray-500">Learn how to create data-driven fertilizer plans, link
                            lab test results, manage treatments, and add your own custom fertilizers and pesticides to
                            the database.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0"><i class="fas fa-mobile-alt fa-2x text-green-500"></i></div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">4. Mobile & Field Operations
                                </h3>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-gray-500">Take yieldsApp into the field. This section covers
                            mobile scouting, offline data logging, and using the AI Photo Identifier for instant
                            analysis.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0"><i class="fas fa-lightbulb fa-2x text-green-500"></i></div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">5. Advanced Features</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-gray-500">Understand how to interpret nutrient targets, adjust
                            recommendations, and leverage the full power of the platform's agronomic models and data
                            integration.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0"><i class="fas fa-clipboard-check fa-2x text-green-500"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">6. Data Management</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-base text-gray-500">Guidance on entering soil, water, and tissue test
                            results, and managing the database of fertilizers and pesticides for your farm.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Demo Section -->
        <section id="interactive-demo" class="py-16 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Interactive Demo</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Bringing Data to
                        Life</p>
                    <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                        The manual's "Field Overview & Monitoring" section (pages 23-42) details how you can track crop
                        progress. Below is an interactive example of the Growth Stage chart.
                    </p>
                </div>
                <div class="mt-12">
                    <div class="chart-container">
                        <canvas id="gddChart"></canvas>
                    </div>
                    <p class="mt-4 text-center text-sm text-gray-600">This chart visualizes the accumulation of Growing
                        Degree Days (GDD), comparing the current season (Green) against a historical average (Blue).
                        This helps you track if your crop development is ahead or behind schedule, a key feature
                        explained in the manual.</p>
                </div>
            </div>
        </section>


        <!-- Feedback Form Section -->
        <section id="feedback" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Your Voice Matters</h2>
                    <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">yieldsApp Manual
                        Feedback</p>
                    <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                        Please provide your detailed feedback on the manual. Your input is vital for improving this
                        resource for all users.
                    </p>
                </div>

                <livewire:feedback-form />

            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-white">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">Get In Touch</h2>
                    <p class="mt-4 text-lg text-gray-500">Have questions or need direct support? Our team is ready to
                        assist you.</p>
                </div>
                <dl class="mt-12 grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">Email</dt>
                            <dd class="mt-2 text-base text-gray-500"><a href="mailto:support@yieldsapp.com"
                                    class="hover:text-green-600">support@yieldsapp.com</a></dd>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">Phone</dt>
                            <dd class="mt-2 text-base text-gray-500">+1 (555) 123-4567</dd>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">Address</dt>
                            <dd class="mt-2 text-base text-gray-500">123 Farm Lane, Agriculture City, QC</dd>
                        </div>
                    </div>
                </dl>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <!-- Social media links can be added here if needed -->
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2025 yieldsApp. Empowering Philippine
                    Agriculture.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTopBtn"
        class="fixed bottom-5 right-5 bg-green-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 transition-opacity duration-300 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Success Modal -->
    <div id="successModal" class="modal fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div>
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                        <i class="fas fa-check-circle fa-2x text-green-600"></i>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Submission Successful
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Thank you for your valuable feedback. We appreciate your
                                time and effort in helping us improve the yieldsApp manual.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-6">
                    <button id="modalOkBtn" type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            init();
        })

        function init() {
            // Mobile Menu Toggle
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            menuButton.addEventListener('click', () => {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
            });

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                    // Close mobile menu on click
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        menuButton.setAttribute('aria-expanded', 'false');
                    }
                });
            });

            // Back to Top button
            const backToTopBtn = document.getElementById('backToTopBtn');
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.remove('opacity-0');
                    backToTopBtn.classList.add('opacity-100');
                } else {
                    backToTopBtn.classList.remove('opacity-100');
                    backToTopBtn.classList.add('opacity-0');
                }
            });

            // "Other" organization input logic
            const otherOrgSpecify = document.getElementById('other-org-specify');
            document.querySelectorAll('input[name="organization"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    if (e.target.value === 'Other') {
                        otherOrgSpecify.classList.remove('hidden');
                        otherOrgSpecify.setAttribute('required', 'true');
                    } else {
                        otherOrgSpecify.classList.add('hidden');
                        otherOrgSpecify.removeAttribute('required');
                        otherOrgSpecify.value = '';
                    }
                });
            });

            // Populate Feedback Table
            const sections = [{
                    header: true,
                    title: '1. Login & Account Access'
                },
                {
                    title: 'Logging In (Pages 1-3)',
                    id: 'login'
                },
                {
                    header: true,
                    title: '2. Farms & Fields Setup'
                },
                {
                    title: 'Accessing and Creating Farms & Fields (Pages 4-7)',
                    id: 'farms-access'
                },
                {
                    title: 'Creating New Farms (Pages 8-10)',
                    id: 'farms-create'
                },
                {
                    title: 'Drawing Boundaries (Pages 10-14)',
                    id: 'boundaries'
                },
                {
                    title: 'Assigning Crops and Planting Dates (Pages 15-19)',
                    id: 'crops-dates'
                },
                {
                    header: true,
                    title: '3. Navigating yieldsApp'
                },
                {
                    title: 'Interface Navigation & Agronomic Tools (Pages 17-22)',
                    id: 'navigation'
                },
                {
                    header: true,
                    title: '4. Field Overview & Monitoring'
                },
                {
                    title: 'Overview Page & Crop Info (Pages 23-29)',
                    id: 'overview-info'
                },
                {
                    title: 'Weather, Growth Stages, Satellite Data (Pages 30-39)',
                    id: 'overview-data'
                },
                {
                    title: 'Calendar & Notifications (Pages 40-42)',
                    id: 'overview-calendar'
                },
                {
                    header: true,
                    title: '5. Creating Fertilizer Plans'
                },
                {
                    title: 'Setup, Field Tests, Targets (Pages 43-53)',
                    id: 'fertilizer-setup'
                },
                {
                    title: 'Products & Application Logic (Pages 54-72)',
                    id: 'fertilizer-logic'
                },
                {
                    title: 'Review & Adjustment of Plans (Pages 73-77)',
                    id: 'fertilizer-review'
                },
                {
                    header: true,
                    title: '6. Entering & Using Field Data'
                },
                {
                    title: 'Soil, Water, Tissue Test Input (Pages 78-101)',
                    id: 'data-input'
                },
                {
                    title: 'Nutrient Adjustment from Field Data (Pages 102-108)',
                    id: 'data-adjust'
                },
                {
                    header: true,
                    title: '7. Scouting Tool'
                },
                {
                    title: 'Logging Observations & Reports (Pages 109-116)',
                    id: 'scouting-log'
                },
                {
                    title: 'Review of Reported Observations (Page 117)',
                    id: 'scouting-review'
                },
                {
                    header: true,
                    title: '8. Treatments'
                },
                {
                    title: 'Full-Season Protocols (Pages 118-120)',
                    id: 'treatments-full'
                },
                {
                    title: 'Scouting-Based Treatments (Pages 120-121)',
                    id: 'treatments-scouting'
                },
                {
                    title: 'Manual Treatments (Pages 121-122)',
                    id: 'treatments-manual'
                },
                {
                    header: true,
                    title: '9. Input Management (Fertilizers & Pesticides)'
                },
                {
                    title: 'Accessing Input Management Database (Pages 123-125)',
                    id: 'input-db'
                },
                {
                    title: 'Adding New Fertilizer Product (Pages 126-134)',
                    id: 'input-fertilizer'
                },
                {
                    title: 'Adding New Pesticide Product (Pages 135-146)',
                    id: 'input-pesticide'
                },
                {
                    header: true,
                    title: '10. Mobile App Features'
                },
                {
                    title: 'Getting Started (Page 147)',
                    id: 'mobile-start'
                },
                {
                    title: 'Scouting (Page 148)',
                    id: 'mobile-scouting'
                },
                {
                    title: 'Fertilizer Plan (Page 149)',
                    id: 'mobile-fertilizer'
                },
                {
                    title: 'AI Photo Identifier (Page 149)',
                    id: 'mobile-ai'
                },
                {
                    title: 'Sample Logging (Page 149)',
                    id: 'mobile-logging'
                },
                {
                    title: 'Offline Mode (Page 150)',
                    id: 'mobile-offline'
                }
            ];

            // Chart.js: Growing Degree Days (GDD) Chart
            const ctx = document.getElementById('gddChart').getContext('2d');
            const gddChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                    datasets: [{
                        label: 'Current Season GDD',
                        data: [150, 300, 550, 800, 1100, 1400],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }, {
                        label: 'Historical GDD',
                        data: [120, 280, 500, 750, 1050, 1300],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 2,
                        fill: false,
                        tension: 0.4,
                        borderDash: [5, 5]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Cumulative Growing Degree Days (°C)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Crop Growth Stage Tracking (GDD)',
                            font: {
                                size: 18
                            }
                        }
                    }
                }
            });
        }
    </script>

</body>

</html>
