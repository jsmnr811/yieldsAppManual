<x-app-layout>

    <section id="home" class="relative bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-5 md:py-5">
            <div class="text-center">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-5 md:py-5">
                    <div class="flex justify-center">
                        <img src="{{ asset('public/prdp-logo.png') }}" alt="PRDP Logo" class="h-[250px]">
                    </div>
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">yieldsApp Manual <span class="text-green-600">Feedback
                                Dashboard</span></span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Insights from TAFARMCO, Department of Agriculture, and PRDP.
                    </p>
                </div>
            </div>
    </section>
    <div class="mx-[10%]">

        @livewire('exec-summary')

        @livewire('detailed-section')



        <!-- Recommendations and Insights -->
        <section id="recommendations"
            class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16 bg-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Recommendations & Key Insights</h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Suggested Improvements:</h3>
                    <ul class="list-disc list-inside text-gray-700 ml-4">
                        <li>More visual aids and infographics for complex topics.</li>
                        <li>Expand on troubleshooting common issues.</li>
                        <li>Include a quick-start guide summary at the beginning.</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Topics for Expansion:</h3>
                    <ul class="list-disc list-inside text-gray-700 ml-4">
                        <li>In-depth case studies on successful yieldsApp implementations.</li>
                        <li>Advanced customization options for fertilizer plans.</li>
                        <li>Detailed guide on integrating external data sources.</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Other General Comments:</h3>
                    <ul class="list-disc list-inside text-gray-700 ml-4">
                        <li>"The mobile app's offline mode is revolutionary for field work!" - TAFARMCO User</li>
                        <li>"Great manual, but could benefit from video tutorials for new users." - DA User</li>
                        <li>"Appreciate the clarity on data compliance, very helpful for PRDP reporting." - PRDP User
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    @push('styles')
        <style>
            .chart-container {
                position: relative;
                width: 100%;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
                height: 250px;
                max-height: 40vh;
            }

            @media (max-width: 768px) {
                .chart-container {
                    height: 200px;
                }
            }
        </style>
    @endpush
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endpush
</x-app-layout>
