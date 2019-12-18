<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Testimonialone extends Model
{

    use SoftDeletes;
    protected $fillable = ['testimonialone_comments', 'testimonialone_name', 'testimonialone_details', 'testimonialone_image'];
}
