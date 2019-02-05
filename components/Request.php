<?php

namespace Cleanse\Feedback\Components;

use Flash;
use Redirect;
use Cms\Classes\ComponentBase;
use Cleanse\Feedback\Classes\FeedbackType;

class Request extends ComponentBase
{
    public $type;

    public function componentDetails()
    {
        return [
            'name'        => 'Feedback Request Form',
            'description' => 'List of Discord servers for PvPaissa.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Requested content type.',
                'description' => 'The type of content being requested.',
                'default' => '{{ :slug }}',
                'type' => 'string'
            ]
        ];
    }

    /**
     * @return mixed
     */
    public function onRun()
    {
        $this->type = $this->page['request_type'] = $this->property('slug');

        if (!$this->requestTypes()) {
            return Redirect::to('/');
        }

        $this->addCss('/plugins/cleanse/feedback/assets/css/cleanse-feedback.css');
    }

    //Handle Form
    public function onRequestSubmit()
    {
        //Bot Detection(?), still work in 2019??!
        $honeypot = post('agree');

        if ($honeypot) {
            return Redirect::to('/'); //Return bot back home.
        }

        if (empty(post('name')) || empty(post('message'))) {
            Flash::error('Please fill in the form in its entirety.');

            return Redirect::back()->withInput();
        }

        $request = ['subject' => post('subject'), 'name' => post('name'), 'message' => post('message')];

        try {
            return $this->addNewRequest($request);
        }
        catch (Exception $ex) {
            Flash::error($ex->getMessage());
        }
    }

    private function addNewRequest()
    {
        $request = new FeedbackType();

        return $request->getType();
    }

    private function requestTypes()
    {
        $acceptedTyped = ['general', 'twitch', 'discord'];

        if (in_array($this->type, $acceptedTyped)) {
            return true;
        }

        return false;
    }
}
