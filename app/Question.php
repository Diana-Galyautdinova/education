<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public const ANSWER_VALID = 'OK';
    public const ANSWER_INVALID = 'Invalid answer';

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
