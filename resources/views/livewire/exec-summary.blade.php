<?php

use Livewire\Volt\Component;
use App\Models\UserInformation;
use App\Models\OverallImpression;

new class extends Component {
    public $total_entries = 0;
    public $total_clarity = 0;
    public $total_expectations = 0;
    public $clarity_counts = [
        'Excellent' => 0,
        'Good' => 0,
        'Fair' => 0,
        'Poor' => 0,
        'Very Poor' => 0,
    ];
    public $expectations_counts = [
        'Yes' => 0,
        'No' => 0,
        'Partially' => 0,
    ];

    public $expectation_percentages = [
        'Yes' => 0,
        'No' => 0,
        'Partially' => 0,
    ];

    public function mount(): void
    {
        $this->total_entries = UserInformation::count();

        $impressions = OverallImpression::select('overall_impression', 'expectation_met')->get();
        $total = $impressions->count();

        $this->clarity_counts = [
            'Excellent' => 0,
            'Good' => 0,
            'Fair' => 0,
            'Poor' => 0,
            'Very Poor' => 0,
        ];

        $clarityGrouped = $impressions->groupBy('overall_impression');
        foreach ($this->clarity_counts as $label => $_) {
            $this->clarity_counts[$label] = $clarityGrouped[$label]->count() ?? 0;
        }

        $this->total_clarity =
            $impressions
                ->pluck('overall_impression')
                ->map(
                    fn($value) => match ($value) {
                        'Excellent' => 5,
                        'Good' => 4,
                        'Fair' => 3,
                        'Poor' => 2,
                        'Very Poor' => 1,
                        default => null,
                    },
                )
                ->filter()
                ->avg() ?? 0;

        $this->expectation_percentages = [
            'Yes' => 0,
            'No' => 0,
            'Partially' => 0,
        ];
        $this->expectations_counts = [
            'Yes' => $impressions->where('expectation_met', 'Yes')->count(),
            'No' => $impressions->where('expectation_met', 'No')->count(),
            'Partially' => $impressions->where('expectation_met', 'Partially')->count(),
        ];

        foreach ($this->expectation_percentages as $label => $_) {
            $this->expectation_percentages[$label] = round(($this->expectations_counts[$label] / max($total, 1)) * 100, 2);
        }

        $this->total_expectations = $this->expectation_percentages['Yes'];
    }
};

?>

<div>
    <section class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Executive Summary</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-lg text-gray-500">Average Clarity Rating</p>
                <p class="text-5xl font-extrabold text-green-600 mt-2">{{ number_format($total_clarity, 2) }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-lg text-gray-500">Expectations Met</p>
                <p class="text-5xl font-extrabold text-green-600 mt-2">{{ number_format($total_expectations, 2) }}%</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-lg text-gray-500">Total Feedback Entries</p>
                <p class="text-5xl font-extrabold text-green-600 mt-2">{{ $total_entries }}</p>
            </div>
        </div>
    </section>

    <section id="impressions" class="container mx-auto px-4 sm:px-6 lg:px-8 mb-16 bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Overall Impressions Breakdown</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Overall Clarity & Helpfulness</h3>
                <div class="chart-container" x-init="window.renderClarityChart()">
                    <canvas id="clarityChart"></canvas>
                </div>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Manual Met Expectations</h3>
                <div class="chart-container" x-init="window.renderExpectationsChart()">
                    <canvas id="expectationsChart"></canvas>
                </div>
            </div>
        </div>
    </section>
</div>

@script
    <script>
        const clarityCounts = @json($clarity_counts);
        window.renderClarityChart = function() {
            const clarityCtx = document.getElementById('clarityChart')?.getContext('2d');
            if (!clarityCtx) return;

            new Chart(clarityCtx, {
                type: 'bar',
                data: {
                    labels: ['Excellent (5)', 'Good (4)', 'Fair (3)', 'Poor (2)', 'Very Poor (1)'],
                    datasets: [{
                        label: 'Number of Responses',
                        data: [
                            clarityCounts['Excellent'],
                            clarityCounts['Good'],
                            clarityCounts['Fair'],
                            clarityCounts['Poor'],
                            clarityCounts['Very Poor']
                        ],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(153, 102, 255, 0.6)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        };

        const expectationsCounts = @json($expectations_counts);
        window.renderExpectationsChart = function() {
            const expectationsCtx = document.getElementById('expectationsChart')?.getContext('2d');
            if (!expectationsCtx) return;

            new Chart(expectationsCtx, {
                type: 'bar',
                data: {
                    labels: ['Yes', 'No', 'Partially'],
                    datasets: [{
                        label: 'Number of Responses',
                        data: [
                            expectationsCounts['Yes'],
                            expectationsCounts['No'],
                            expectationsCounts['Partially']
                        ],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.6)', // Yes
                            'rgba(255, 99, 132, 0.6)', // No
                            'rgba(255, 206, 86, 0.6)' // Partially
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)', // Yes
                            'rgba(255, 99, 132, 1)', // No
                            'rgba(255, 206, 86, 1)' // Partially
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        };
    </script>
@endscript
