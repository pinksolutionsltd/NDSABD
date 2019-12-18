<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    protected $fillable = ['secretary_name', 'secretary_title', 'secretary_Details', 'secretary_Speech', 'secretary_image'];
}
