<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
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
     * Get the answers for the question.
     */
    public function answers()
    {
        return $this->hasMany('App\Answer')
            ->orderBy('created_at', 'asc');
    }

    /**
     * Dynamically generate slug for nicer urls
     */
    public function getSlugAttribute()
    {
        return Str::of($this->body)->slug('-');
    }
}
