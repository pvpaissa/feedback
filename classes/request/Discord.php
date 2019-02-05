<?php

namespace Cleanse\Feedback\Classes\Request;

use Cleanse\Feedback\Models\Request as FeedbackRequest;

class Discord
{
    //Check if duplicate submission of permalink.
    public function submit()
    {
        dd(['subject' => 'Discord', 'content' => post()]);
    }
}
