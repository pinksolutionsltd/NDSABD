<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Indexnextevent extends Model
{

    use SoftDeletes;
    protected $fillable = ['indexnextevent_teamone', 'indexnextevent_teamtwo', 'indexnextevent_time', 'indexnextevent_place'];
}
