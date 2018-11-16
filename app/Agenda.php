<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    //tafelnaam
    protected $table = 'agendas';
    protected $fillable = ['name'];
}
