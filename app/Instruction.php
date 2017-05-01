<?php

namespace Codecademy;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $table = 'instructions';
    protected $fillable = ['content','solution','tasks_id',];
    public $timestamps = false;

    public function task()
    {
        return $this->belongsTo('Codecademy\Task');
    }
}
