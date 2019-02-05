<?php

namespace Cleanse\Feedback\Classes\Request;

use Cleanse\Feedback\Models\Request as FeedbackRequest;

class Twitch
{
    //Check if duplicate submission of channel.
    public function submit()
    {
        dd(['subject' => 'Twitch', 'content' => post()]);
    }
}
