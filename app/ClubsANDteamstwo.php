<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ClubsANDteamstwo extends Model
{
      use SoftDeletes;
      protected $fillable = ['clubsANDteamstwo_name'];
}
