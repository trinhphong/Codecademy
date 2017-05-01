<?php

namespace Codecademy;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';
    protected $fillable = ['name','course_id',];
    public $timestamps = false;

    public function course() {
        return $this->belongsTo('Codecademy\Course');
    }

    public function lesson() {
        return $this->hasMany('Codecademy\Lesson');
    }
}
