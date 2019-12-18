<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Workingcommittee extends Model
{
    use SoftDeletes;
    protected $fillable = ['committee_name', 'committee_Details', 'committee_image'];
}
