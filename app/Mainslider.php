<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mainslider extends Model
{

    use SoftDeletes;
    protected $fillable = ['slider_heading', 'slider_sub_heading', 'slider_details', 'slider_image'];
}
