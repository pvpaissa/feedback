<?php

namespace Cleanse\Feedback\Components;

use Cms\Classes\ComponentBase;
use Cleanse\Feedback\Models\Report as FeedbackReport;

class Report extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Feedback Report Form',
            'description' => 'Form that reports broken or offensive content.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Reported content type.',
                'description' => 'The type of content being reported.',
                'default' => '{{ :slug }}',
                'type' => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->page['reports'] = $this->getReports();
    }

    public function getReports()
    {
        return FeedbackReport::all();
    }
}
