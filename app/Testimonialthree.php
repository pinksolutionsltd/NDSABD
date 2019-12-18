<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Testimonialthree extends Model
{

    use SoftDeletes;
    protected $fillable = ['testimonialthree_comments', 'testimonialthree_name', 'testimonialthree_details', 'testimonialthree_image'];
}
