<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Topic
 *
 * @package App
 * @property string $title
 */

class Topics extends Model
{
    use SoftDeletes;
    protected $fillable = ['title'];
}
