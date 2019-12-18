<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Indexcommittee extends Model
{
    use SoftDeletes;
    protected $fillable = ['presidentinfo_name', 'presidentinfo_title', 'presidentinfo_Details', 'presidentinfo_image'];
}
