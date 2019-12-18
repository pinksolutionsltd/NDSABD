<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Technicalmember extends Model
{

  use SoftDeletes;
  protected $fillable = ['technicalmember_name', 'technicalmember_Details', 'technicalmember_image'];
}
