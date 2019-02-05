<?php

namespace Cleanse\Feedback\Classes\Request;

use Cleanse\Feedback\Models\Request as FeedbackRequest;

class General
{
    public function submit()
    {
        dd(['subject' => 'General', 'content' => post()]);
    }
}
