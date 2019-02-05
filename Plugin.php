<?php

namespace Cleanse\Feedback;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'PvPaissa Feedback',
            'description' => 'Adds a feedback form for reporting/requesting content.',
            'author' => 'Paul Eli Lovato',
            'icon' => 'icon-exclamation-circle'
        ];
    }

    public function registerComponents()
    {
        return [
            'Cleanse\Feedback\Components\Request' => 'cleanseFeedbackRequest',
            'Cleanse\Feedback\Components\Report' => 'cleanseFeedbackReport',
            'Cleanse\Feedback\Components\Submitted' => 'cleanseFeedbackSubmitted'
        ];
    }
}
