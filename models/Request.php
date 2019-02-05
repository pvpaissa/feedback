<?php

namespace Cleanse\Feedback\Models;

use Model;

/**
 * @property integer $id
 * @property string $subject
 * @property string $name
 * @property string $message
 */
class Request extends Model
{
    public $table = 'cleanse_feedback_requests';
}
