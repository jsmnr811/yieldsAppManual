<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Recommendation;
use App\Models\UserInformation;
use App\Models\OverallImpression;
use App\Services\GoogleSheetServices;
use App\Models\SpecificSectionFeedback;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class FeedbackForm extends Component
{
    public $name;
    public $organization;
    public $other_organization;
    public $position;
    public $overall_impression;
    public $expectation_met;
    public $improvements;
    public $topics_to_expand;
    public $additional_comments;
    public $feedbacks = [
        'login' => [
            'section_title' => '1.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'farms_access' => [
            'section_title' => '2.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'creating_farms' => [
            'section_title' => '2.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'drawing_boundaries' => [
            'section_title' => '2.3',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'assigning_crops' => [
            'section_title' => '2.4',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'navigation' => [
            'section_title' => '3.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'field_overview' => [
            'section_title' => '4.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'weather_growth' => [
            'section_title' => '4.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'calendar_notifications' => [
            'section_title' => '4.3',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'fertilizer_setup' => [
            'section_title' => '5.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'products_logic' => [
            'section_title' => '5.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'plan_review' => [
            'section_title' => '5.3',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'test_input' => [
            'section_title' => '6.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'nutrient_adjustment' => [
            'section_title' => '6.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'logging_observations' => [
            'section_title' => '7.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'review_reports' => [
            'section_title' => '7.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'full_season_protocols' => [
            'section_title' => '8.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'scouting_treatments' => [
            'section_title' => '8.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'manual_treatments' => [
            'section_title' => '8.3',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'input_management_db' => [
            'section_title' => '9.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'add_fertilizer' => [
            'section_title' => '9.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'add_pesticide' => [
            'section_title' => '9.3',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'mobile_getting_started' => [
            'section_title' => '10.1',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'mobile_scouting' => [
            'section_title' => '10.2',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'mobile_fertilizer_plan' => [
            'section_title' => '10.3',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'mobile_ai_photo' => [
            'section_title' => '10.4',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'mobile_sample_logging' => [
            'section_title' => '10.5',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
        'mobile_offline_mode' => [
            'section_title' => '10.6',
            'rating' => null,
            'difficulty' => null,
            'data_compliance' => null,
            'comments' => null,
        ],
    ];

    protected function rules()
    {
        $baseRules = [
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'other_organization' => 'required_if:organization,Other',
            'position' => 'required|string|max:255',
            'overall_impression' => 'required|string|max:255',
            'expectation_met' => 'required|string|max:255',
            'improvements' => 'nullable|string|max:255',
            'topics_to_expand' => 'nullable|string|max:255',
            'additional_comments' => 'nullable|string|max:255',
        ];

        $feedbackRules = [];
        foreach ($this->feedbacks as $key => $feedback) {
            $feedbackRules["feedbacks.$key.rating"] = 'required|integer|min:1|max:5';
            $feedbackRules["feedbacks.$key.difficulty"] = 'required|integer|min:1|max:5';
            $feedbackRules["feedbacks.$key.data_compliance"] = 'required|integer|min:1|max:5';
            $feedbackRules["feedbacks.$key.comments"] = 'nullable|string|max:255';
        }

        return array_merge($baseRules, $feedbackRules);
    }


    public function submitFeedback()
    {
        try {
            $this->validate();
            $userInfo = UserInformation::create([
                'name' => $this->name,
                'organization' => $this->organization === 'Other' ? $this->other_organization : $this->organization,
                'position' => $this->position,
            ]);

            // Save Overall Impression
            OverallImpression::create([
                'user_information_id' => $userInfo->id,
                'overall_impression' => $this->overall_impression,
                'expectation_met' => $this->expectation_met,
            ]);

            // Save Specific Section Feedbacks - loop through all feedbacks
            foreach ($this->feedbacks as $section) {
                SpecificSectionFeedback::create([
                    'user_information_id' => $userInfo->id,
                    'section_title' => $section['section_title'],
                    'rating' => $section['rating'] ?? '',
                    'difficulty' => $section['difficulty'] ?? '',
                    'data_compliance' => $section['data_compliance'] ?? '',
                    'comments' => $section['comments'] ?? '',
                ]);
            }
            // Save Recommendations
            Recommendation::create([
                'user_information_id' => $userInfo->id,
                'improvements' => $this->improvements,
                'topics_to_expand' => $this->topics_to_expand,
                'additional_comments' => $this->additional_comments,
            ]);
            $this->appendToSheet();
            LivewireAlert::title('Thanks!')
                ->text('Your feedback has been submitted successfully!')
                ->success()
                ->show();
            $this->reset();
        } catch (ValidationException $e) {
            LivewireAlert::title('Error')
                ->text('Please fill in all the required fields correctly.')
                ->error()
                ->show();

        }
    }

    public function appendToSheet()
    {
        $dataForExcel = [
            $this->name,
            $this->organization === 'Other' ? $this->other_organization : $this->organization,
            $this->position,
            $this->overall_impression,
            $this->expectation_met,
        ];
        foreach ($this->feedbacks  as $section) {
            $dataForExcel[] = $section['rating'] ?? '';
            $dataForExcel[] =   $section['difficulty'] ?? '';
            $dataForExcel[] =  $section['data_compliance'] ?? '';
            $dataForExcel[] =  $section['comments'] ?? '';
        }
        $dataForExcel[] = $this->improvements ?? '';
        $dataForExcel[] = $this->topics_to_expand ?? '';
        $dataForExcel[] = $this->additional_comments ?? '';

        $service = new GoogleSheetServices();
        $service->handle($dataForExcel);
    }


    public function render()
    {
        return view('livewire.feedback-form');
    }
}
