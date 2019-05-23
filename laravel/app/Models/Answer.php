<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';


    protected $fillable = [
        'body',
        'is_correct',
    ];

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
