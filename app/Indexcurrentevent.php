<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Indexcurrentevent extends Model
{

    use SoftDeletes;
    protected $fillable = ['indexcurrentevent_heading', 'indexcurrentevent_details'];
}
