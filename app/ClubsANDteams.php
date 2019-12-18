<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ClubsANDteams extends Model
{
    use SoftDeletes;
    protected $fillable = ['clubsANDteams_name'];
}
