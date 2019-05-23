<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\Topics;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Question
 * @package App\Models
 */

class Question extends Model
{

    protected $table = 'questions';


    protected $fillable = [
        'question',
        'difficulty',
        'clue'
    ];


    public function topic()
    {
        return $this->belongsTo(Topics::class);
    }

    public function answers() {
        return $this->hasMany(Answer::class);
    }

}
