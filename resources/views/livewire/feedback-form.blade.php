<div>
    <div class="mt-12 bg-white p-6 sm:p-8 rounded-xl shadow-lg">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <form wire:submit.prevent="confirmSave">
            <!-- User Information -->
            <div x-data="{ organization: '', otherRequired: false }">
                <h3 class="text-lg leading-6 font-medium text-gray-900">1. User Information</h3>
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                    <!-- Name -->
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" wire:model="name"
                            class="custom-input border" required>
                    </div>


                    <!-- Role / Position -->
                    <div class="sm:col-span-3">
                        <label for="position" class="block text-sm font-medium text-gray-700">Role/Position <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="position" name="position" wire:model="position" class="custom-input"
                            required>
                    </div>

                    <!-- Organization -->
                    <div class="mb-2 sm:col-span-4">

                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Organization <span class="text-red-500">*</span>
                        </label>
                        <fieldset class="mt-1" role="radiogroup">
                            <div class="space-y-2 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">

                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="organization" value="TAFARMCO" wire:model="organization"
                                        class="custom-radio" required>
                                    <span>TAFARMCO</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="organization" value="Department of Agriculture"
                                        wire:model="organization" class="custom-radio">
                                    <span>Department of Agriculture</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="organization" value="PRDP" wire:model="organization"
                                        class="custom-radio">
                                    <span>PRDP</span>
                                </label>

                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="organization" value="Other" wire:model="organization"
                                        class="custom-radio">
                                    <span>Other</span>
                                    <!-- Always visible text input beside "Other" -->
                                    <input type="text" name="other_organization" placeholder="Please specify"
                                        class="ml-2 custom-input" wire:model="other_organization">
                                </label>

                            </div>
                        </fieldset>
                    </div>
                </div>

                <!-- Overall Impression of the Manual -->
                <div class="border-t border-gray-200 pt-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">2. Overall Impression of the Yields App
                        Platform</h3>
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Overall clarity and helpfulness?<span
                                    class="text-red-500">*</span></label>
                            <select wire:model="overall_impression" class="custom-select" required>
                                <option value="">Please select</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                                <option value="Very Poor">Very Poor</option>
                            </select>
                        </div>
                        <div class="sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Did the Yields App Platform meet your
                                expectations?<span class="text-red-500">*</span></label>
                            <select wire:model="expectation_met" class="custom-select" required>
                                <option value="">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Partially">Partially</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Specific Sections Feedback -->
                <div class="border-t border-gray-200 pt-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">3. Specific Section Feedback</h3>
                    <p class="mt-1 text-sm text-gray-500">Please rate each section based on its clarity, completeness,
                        and usefulness on a scale from 1 (Poor) to 5 (Excellent), and indicate the level of difficulty
                        in understanding the section as well as the ease of complying with its data or information
                        requirements, both using a scale from 1 (Very Easy) to 5 (Very Difficult).</p>
                    <div class="mt-6 overflow-x-auto">
                        <div class="overflow-y-auto max-h-[600px] relative">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Section Title</th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Rating
                                            (1-5)<br>
                                            <sub>clarity, completeness, and usefulness</sub>
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Difficulty (1-5)
                                            <br><sub>in understanding the section</sub>
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">Data
                                            Compliance <br> <sub>ease of complying with the data/information on
                                                requirements</sub></th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Comments/Suggestions for Improvement</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">

                                    @php
                                        $sections = [
                                            [
                                                'title' => '1. Login & Account Access',
                                                'items' => [['label' => 'Logging In (Pages 1-3)', 'key' => 'login']],
                                            ],
                                            [
                                                'title' => '2. Farms & Fields Setup',
                                                'items' => [
                                                    [
                                                        'label' => 'Accessing and Creating Farms & Fields (Pages 4-7)',
                                                        'key' => 'farms_access',
                                                    ],
                                                    [
                                                        'label' => 'Creating New Farms (Pages 8-10)',
                                                        'key' => 'creating_farms',
                                                    ],
                                                    [
                                                        'label' => 'Drawing Boundaries (Pages 10-14)',
                                                        'key' => 'drawing_boundaries',
                                                    ],
                                                    [
                                                        'label' => 'Assigning Crops and Planting Dates (Pages 15-19)',
                                                        'key' => 'assigning_crops',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '3. Navigating yieldsApp',
                                                'items' => [
                                                    [
                                                        'label' =>
                                                            'Interface Navigation & Agronomic Tools (Pages 17-22)',
                                                        'key' => 'navigation',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '4. Field Overview & Monitoring',
                                                'items' => [
                                                    [
                                                        'label' => 'Overview Page & Crop Info (Pages 23-29)',
                                                        'key' => 'field_overview',
                                                    ],
                                                    [
                                                        'label' =>
                                                            'Weather, Growth Stages, Satellite Data (Pages 30-39)',
                                                        'key' => 'weather_growth',
                                                    ],
                                                    [
                                                        'label' => 'Calendar & Notifications (Pages 40-42)',
                                                        'key' => 'calendar_notifications',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '5. Creating Fertilizer Plans',
                                                'items' => [
                                                    [
                                                        'label' => 'Setup, Field Tests, Targets (Pages 43-53)',
                                                        'key' => 'fertilizer_setup',
                                                    ],
                                                    [
                                                        'label' => 'Products & Application Logic (Pages 54-72)',
                                                        'key' => 'products_logic',
                                                    ],
                                                    [
                                                        'label' => 'Review & Adjustment of Plans (Pages 73-77)',
                                                        'key' => 'plan_review',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '6. Entering & Using Field Data',
                                                'items' => [
                                                    [
                                                        'label' => 'Soil, Water, Tissue Test Input (Pages 78-101)',
                                                        'key' => 'test_input',
                                                    ],
                                                    [
                                                        'label' =>
                                                            'Nutrient Adjustment from Field Data (Pages 102-108)',
                                                        'key' => 'nutrient_adjustment',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '7. Scouting Tool',
                                                'items' => [
                                                    [
                                                        'label' => 'Logging Observations & Reports (Pages 109-116)',
                                                        'key' => 'logging_observations',
                                                    ],
                                                    [
                                                        'label' => 'Review of Reported Observations (Page 117)',
                                                        'key' => 'review_reports',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '8. Treatments',
                                                'items' => [
                                                    [
                                                        'label' => 'Full-Season Protocols (Pages 118-120)',
                                                        'key' => 'full_season_protocols',
                                                    ],
                                                    [
                                                        'label' => 'Scouting-Based Treatments (Pages 120-121)',
                                                        'key' => 'scouting_treatments',
                                                    ],
                                                    [
                                                        'label' => 'Manual Treatments (Pages 121-122)',
                                                        'key' => 'manual_treatments',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '9. Input Management (Fertilizers & Pesticides)',
                                                'items' => [
                                                    [
                                                        'label' =>
                                                            'Accessing Input Management Database (Pages 123-125)',
                                                        'key' => 'input_management_db',
                                                    ],
                                                    [
                                                        'label' => 'Adding New Fertilizer Product (Pages 126-134)',
                                                        'key' => 'add_fertilizer',
                                                    ],
                                                    [
                                                        'label' => 'Adding New Pesticide Product (Pages 135-146)',
                                                        'key' => 'add_pesticide',
                                                    ],
                                                ],
                                            ],
                                            [
                                                'title' => '10. Mobile App Features',
                                                'items' => [
                                                    [
                                                        'label' => 'Getting Started (Page 147)',
                                                        'key' => 'mobile_getting_started',
                                                    ],
                                                    ['label' => 'Scouting (Page 148)', 'key' => 'mobile_scouting'],
                                                    [
                                                        'label' => 'Fertilizer Plan (Page 149)',
                                                        'key' => 'mobile_fertilizer_plan',
                                                    ],
                                                    [
                                                        'label' => 'AI Photo Identifier (Page 149)',
                                                        'key' => 'mobile_ai_photo',
                                                    ],
                                                    [
                                                        'label' => 'Sample Logging (Page 149)',
                                                        'key' => 'mobile_sample_logging',
                                                    ],
                                                    [
                                                        'label' => 'Offline Mode (Page 150)',
                                                        'key' => 'mobile_offline_mode',
                                                    ],
                                                ],
                                            ],
                                        ];
                                    @endphp


                                    @foreach ($sections as $section)
                                        <tr>
                                            <td class="px-4 py-3 sm:pl-6 font-semibold text-gray-900 bg-gray-100"
                                                colspan="5">
                                                {{ $section['title'] }}
                                            </td>
                                        </tr>

                                        @foreach ($section['items'] as $item)
                                            <tr class="text-center">
                                                <td
                                                    class="text-left whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    {{ $item['label'] }}
                                                    <input type="hidden"
                                                        wire:model.lazy="feedbacks.{{ $item['key'] }}.section_title"
                                                        required />
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    <input type="number" min="1" max="5"
                                                        wire:model.lazy="feedbacks.{{ $item['key'] }}.rating"
                                                        class="custom-number-input" required />
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    <input type="number" min="1" max="5"
                                                        wire:model.lazy="feedbacks.{{ $item['key'] }}.difficulty"
                                                        class="custom-number-input" required />
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    <input type="number" min="1" max="5"
                                                        wire:model.lazy="feedbacks.{{ $item['key'] }}.data_compliance"
                                                        class="custom-number-input" required />
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    <input type="text"
                                                        wire:model.lazy="feedbacks.{{ $item['key'] }}.comments"
                                                        class="custom-input" />
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- Recommendations -->
                <div class="border-t border-gray-200 pt-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">4. Recommendations</h3>
                    <div class="mt-6 space-y-6">
                        <div>
                            <label for="improvements" class="block text-sm font-medium text-gray-700">What
                                improvements would you like to see in future versions of the Yields App
                                Platform?</label>
                            <textarea id="improvements" wire:model.defer="improvements" rows="3" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label for="topics" class="block text-sm font-medium text-gray-700">Are there any
                                specific topics you feel were not covered adequately or could be expanded upon?</label>
                            <textarea id="topics" wire:model.defer="topics_to_expand" rows="3" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                        </div>
                        <div>
                            <label for="other-comments" class="block text-sm font-medium text-gray-700">Any other
                                comments or suggestions?</label>
                            <textarea id="other-comments" wire:model.defer="additional_comments" rows="3" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Submit Feedback -->
                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="submit"
                            class="w-full md:w-auto inline-flex justify-center py-3 px-8 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Submit Feedback
                        </button>
                    </div>
                </div>
        </form>
    </div>
 <div wire:target="submit,confirmSave" wire:loading
    class="fixed inset-0" style="background-color: rgba(128, 128, 128, 0.4);z-index: 9999; flex justify-center items-center z-50">
</div>
</div>
