<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Testimonialtwo extends Model
{
    use SoftDeletes;
    protected $fillable = ['testimonialtwo_comments', 'testimonialtwo_name', 'testimonialtwo_details', 'testimonialtwo_image'];
}
