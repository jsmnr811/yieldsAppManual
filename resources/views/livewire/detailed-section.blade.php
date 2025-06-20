<?php

use Livewire\Volt\Component;
use App\Models\UserInformation;
use App\Models\OverallImpression;
use App\Models\SpecificSectionFeedback;

new class extends Component {
    public $averages = [];
    public function mount()
    {
        $this->averages = $this->calculateAverages();
    }

    public function calculateAverages()
    {
        $feedbacks = SpecificSectionFeedback::all();

        $groupedFeedback = $feedbacks->groupBy('section_title');

        $averages = [];

        // Loop through each section group
        foreach ($groupedFeedback as $section => $feedbacks) {
            $rating1 = $feedbacks->pluck('rating'); // Rating 1 for all entries in this section
            $difficulty = $feedbacks->pluck('difficulty'); // Rating 2 (difficulty)
            $data_compliance = $feedbacks->pluck('data_compliance'); // Rating 3 (data compliance)

            // Calculate averages for each rating
            $averageRating1 = $rating1->avg();
            $averagedifficulty = $difficulty->avg();
            $averagedata_compliance = $data_compliance->avg();

            $randomComment = $feedbacks->random()->comments; // Random comment from the section

            // Store results for the section
            $averages[$section] = [
                'average_rating1' => round($averageRating1, 2),
                'average_difficulty' => round($averagedifficulty, 2),
                'average_data_compliance' => round($averagedata_compliance, 2),
                'random_comment' => $randomComment,
            ];
        }

        return $averages;
    }
};

?>

<div>
    <section id="sections" class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Detailed Section Analysis</h2>
        <p class="text-center text-gray-600 mb-8">Average scores (1-5, higher is better for rating, lower for
            difficulty/compliance) for each manual section.</p>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                            Section
                            Title
                        </th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Avg.
                            Rating</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Avg.
                            Difficulty</th>
                        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Avg.
                            Compliance</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Random
                            Comments</th>
                    </tr>
                </thead>

                @php
                    $sections = [
                        '1' => [
                            'title' => '1. Login & Account Access',
                            'items' => [
                                '1.1' => 'Logging In (Pages 1–3)',
                            ],
                        ],
                        '2' => [
                            'title' => '2. Farms & Fields Setup',
                            'items' => [
                                '2.1' => 'Accessing and Creating Farms & Fields (Pages 4–7)',
                                '2.2' => 'Creating New Farms (Pages 8–10)',
                                '2.3' => 'Drawing Boundaries (Pages 10–14)',
                                '2.4' => 'Assigning Crops and Planting Dates (Pages 15–19)',
                            ],
                        ],
                        '3' => [
                            'title' => '3. Navigating yieldsApp',
                            'items' => [
                                '3.1' => 'Interface Navigation & Agronomic Tools (Pages 17–22)',
                            ],
                        ],
                        '4' => [
                            'title' => '4. Field Overview & Monitoring',
                            'items' => [
                                '4.1' => 'Overview Page & Crop Info (Pages 23–29)',
                                '4.2' => 'Weather, Growth Stages, Satellite Data (Pages 30–39)',
                                '4.3' => 'Calendar & Notifications (Pages 40–42)',
                            ],
                        ],
                        '5' => [
                            'title' => '5. Creating Fertilizer Plans',
                            'items' => [
                                '5.1' => 'Setup, Field Tests, Targets (Pages 43–53)',
                                '5.2' => 'Products & Application Logic (Pages 54–72)',
                                '5.3' => 'Review & Adjustment of Plans (Pages 73–77)',
                            ],
                        ],
                        '6' => [
                            'title' => '6. Entering & Using Field Data',
                            'items' => [
                                '6.1' => 'Soil, Water, Tissue Test Input (Pages 78–101)',
                                '6.2' => 'Nutrient Adjustment from Field Data (Pages 102–108)',
                            ],
                        ],
                        '7' => [
                            'title' => '7. Scouting Tool',
                            'items' => [
                                '7.1' => 'Logging Observations & Reports (Pages 109–116)',
                                '7.2' => 'Review of Reported Observations (Page 117)',
                            ],
                        ],
                        '8' => [
                            'title' => '8. Treatments',
                            'items' => [
                                '8.1' => 'Full-Season Protocols (Pages 118–120)',
                                '8.2' => 'Scouting-Based Treatments (Pages 120–121)',
                                '8.3' => 'Manual Treatments (Pages 121–122)',
                            ],
                        ],
                        '9' => [
                            'title' => '9. Input Management (Fertilizers & Pesticides)',
                            'items' => [
                                '9.1' => 'Accessing Input Management Database (Pages 123–125)',
                                '9.2' => 'Adding New Fertilizer Product (Pages 126–134)',
                                '9.3' => 'Adding New Pesticide Product (Pages 135–146)',
                            ],
                        ],
                        '10' => [
                            'title' => '10. Mobile App Features',
                            'items' => [
                                '10.1' => 'Getting Started (Page 147)',
                                '10.2' => 'Scouting (Page 148)',
                                '10.3' => 'Fertilizer Plan (Page 149)',
                                '10.4' => 'AI Photo Identifier (Page 149)',
                                '10.5' => 'Sample Logging (Page 149)',
                                '10.6' => 'Offline Mode (Page 150)',
                            ],
                        ],
                    ];
                @endphp

                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($sections as $section)
                        <tr class="bg-gray-100">
                            <td colspan="5" class="px-6 py-3 text-left text-md font-bold text-gray-900">
                                {{ $section['title'] }}
                            </td>
                        </tr>

                        @foreach ($section['items'] as $id => $label)
                            <tr>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900 font-medium">
                                    {{ $label }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-700">
                                    {{ isset($averages[$id]) ? number_format($averages[$id]['average_rating1'], 2) : '-' }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-700">
                                    {{ isset($averages[$id]) ? number_format($averages[$id]['average_difficulty'], 2) : '-' }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-700">
                                    {{ isset($averages[$id]) ? number_format($averages[$id]['average_data_compliance'], 2) : '-' }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-700">
                                    {{ $averages[$id]['random_comment'] ?? '-' }}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>


            </table>
        </div>
    </section>
</div>
