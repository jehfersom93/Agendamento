<?php

namespace Agendamento;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';

    protected $fillable = ['title','start_date','end_date'];

    public $timestamps = false;
}
