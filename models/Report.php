<?php

namespace Cleanse\Feedback\Models;

use Model;

/**
 * @property integer $id
 * @property string $subject
 * @property string $name
 * @property string $message
 */
class Report extends Model
{
    public $table = 'cleanse_feedback_reports';
}
