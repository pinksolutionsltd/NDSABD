<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Awesomeserviceleft extends Model
{
      use SoftDeletes;
      protected $fillable = ['awesomeserviceleft_name','awesomeserviceleft_details'];
}
