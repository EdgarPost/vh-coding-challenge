<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
    ];

    /**
     * Get the question that belongs to the answer.
     */
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
