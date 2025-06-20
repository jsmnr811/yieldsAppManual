<x-app-layout>
    <!-- Hero Section -->
    <section id="home" class="relative bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-5 md:py-5">
            <div class="text-center">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-5 md:py-5">
                    <div class="flex justify-center">
                        <img src="{{ asset('public/prdp-logo.png') }}" alt="PRDP Logo" class="h-[250px]">
                    </div>
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Help Us Improve the <span class="text-green-600">yieldsApp
                                Manual</span></span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Your expertise is crucial. We've created this interactive portal for TAFARMCO, the
                        Department of
                        Agriculture, and PRDP to explore the manual's features and provide valuable feedback.
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="#feedback"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                                Provide Feedback </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="https://drive.google.com/file/d/1H_HK5N8O5bOzY_9rMEN5kXA7ZAF-73iN/view?usp=drive_web"
                                download target="_blank" rel="noopener noreferrer"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-green-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                Download PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Manual Overview -->
    <section id="manual-overview" class="pt-12  bg-gray-50">
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

    <!-- Feedback Form Section -->
    <section id="feedback" class="pt-12 bg-gray-50 mb-8">
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


    @push('styles')
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background-color: #f7fafc;
            }

            * {
                border: none !important;
            }

            thead th {
                position: sticky;
                top: 0;
                background-color: #f9fafb;
                /* Same as bg-gray-50 */
                z-index: 10;
            }

            .custom-input {
                margin-top: 0.25rem;
                display: block;
                width: 100%;
                font-size: 0.875rem;
                border: 1px solid #D1D5DB !important;
                border-radius: 6px !important;
                padding: 0.5rem 0.75rem;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                outline: none;
                background-color: white;
                box-sizing: border-box;
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                transition: border-color 0.2s, box-shadow 0.2s;

            }

            .custom-input:focus {
                border-color: 1px solid #183b25 !important;
                box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.5) !important;
            }

            .custom-number-input {
                width: 4rem;
                border: 1px solid #D1D5DB !important;
                border-radius: 6px !important;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                padding: 0.25rem 0.5rem;
                font-size: 1rem;
                outline: none;
                transition: border-color 0.2s, box-shadow 0.2s;
            }

            .custom-number-input:focus {
                border-color: 1px solid #183b25 !important;
                box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.5) !important;
            }

            .custom-select {
                margin-top: 0.25rem;
                \  display: block;
                width: 100%;
                padding: 0.5rem 2.5rem 0.5rem 0.75rem;
                font-size: 0.875rem;
                border: 1px solid #D1D5DB !important;
                border-radius: 6px;
                background-color: white;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                outline: none;
                appearance: none;
                transition: border-color 0.2s, box-shadow 0.2s;
                background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='gray'%3E%3Cpath fill-rule='evenodd' d='M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.25 8.27a.75.75 0 01-.02-1.06z' clip-rule='evenodd'/%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: right 0.75rem center;
                background-size: 1rem;
            }

            .custom-select:focus {
                border-color: 1px solid #183b25 !important;
                box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.5) !important;
            }

            .custom-radio {
                height: 1rem;
                width: 1rem;
                border: 1px solid #D1D5DB !important;
                border-radius: 50%;
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                background-color: white;
                position: relative;
                cursor: pointer;
                outline: none;
                transition: box-shadow 0.2s, border-color 0.2s;
            }

            .custom-radio:checked {
                border-color: #183b25 !important;
                background-color: #22c55e !important;
                box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.5) !important;
            }

            .custom-radio:checked::after {
                content: "";
                display: block;
                position: absolute;
                top: 25%;
                left: 25%;
                width: 50%;
                height: 50%;
                border-radius: 50%;
                background: white;
            }

            .custom-radio:focus {
                border-color: #183b25 !important;
                box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.5) !important;
            }

            .custom-textarea {
                width: 100%;
                border: 1px solid #4B5563;
                border-radius: 6px !important;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                padding: 0.5rem;
                font-size: 0.875rem;
                outline: none;
                resize: vertical;
                transition: border-color 0.2s, box-shadow 0.2s;
                margin-top: 0.25rem;
                display: block;
            }

            .custom-textarea:focus {
                border-color: 1px solid #183b25 !important;
                box-shadow: 0 0 0 1px rgba(34, 197, 94, 0.5) !important;
            }
        </style>
    @endpush
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            }
        </script>
    @endpush
</x-app-layout>
