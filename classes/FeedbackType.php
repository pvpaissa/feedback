<?php

namespace Cleanse\Feedback\Classes;

class FeedbackType
{
    public function getType()
    {
        //Needs class validity check...
        $className = 'Cleanse\\Feedback\\Classes\\Request\\' . (string)ucfirst(post('subject'));
        $object = new $className;

        return $object->submit();
    }
}
