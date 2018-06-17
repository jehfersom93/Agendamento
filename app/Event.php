<?php

namespace Agendamento;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
    *[$table description]
    *@var string
    */
    protected $table = 'events';

    /**
     *[$fillable description]
     *@var string
     */
    protected  $fillable = [
        'title', 'start', 'end', 'color'
    ];
    public $timestamps = false;
}
