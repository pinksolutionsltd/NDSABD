<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Awesomeserviceright extends Model
{
      use SoftDeletes;
      protected $fillable = ['awesomeserviceright_name','awesomeserviceright_details'];
}
