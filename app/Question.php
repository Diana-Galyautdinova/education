<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'text', 'theory_id'
    ];

    public function theory()
    {
        return $this->belongsTo(\App\Theory::class);
    }

    public function answers()
    {
        return $this->hasMany(\App\Answer::class);
    }
}
