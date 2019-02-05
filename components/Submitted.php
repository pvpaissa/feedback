<?php

namespace Cleanse\Feedback\Components;

use Cms\Classes\ComponentBase;

class Submitted extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'          => 'Submitted Feedback Component',
            'description'   => 'Acknowledges feedback request.'
        ];
    }
}
