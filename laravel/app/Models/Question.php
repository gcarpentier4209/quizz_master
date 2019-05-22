<?php

namespace App\Models;

use App\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 *
 * @package App
 * @property string $topic
 * @property text $question_text
 * @property text $answer_explanation
 * @property string $difficulty
 */

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['question_text', 'good_response', 'bad_response1', 'bad_response2', 'bad_response3', 'difficulty', 'clue', 'topic_id'];

    public static function boot()
    {
        parent::boot();

        \App\Question::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTopicIdAttribute($input)
    {
        $this->attributes['topic_id'] = $input ? $input : null;
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id')->withTrashed();
    }

}
