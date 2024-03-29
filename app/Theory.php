<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'visible', 'text'
    ];

    public function questions()
    {
        return $this->hasMany(\App\Question::class);
    }
}
