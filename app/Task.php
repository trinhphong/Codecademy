<?php

namespace Codecademy;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['name','content','source_code_html','source_code_css','lesson_id','stt'];
    public $timestamps = false;

    public function lesson()
    {
        return $this->belongsTo('Codecademy\Lesson');
    }

    public function instruction ()
    {
        return $this->hasMany('Codecademy\instruction');
    }
}
