<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presidentinfo extends Model
{
  protected $fillable = ['presidentinfo_name', 'presidentinfo_title', 'presidentinfo_Details', 'presidentinfo_Speech', 'presidentinfo_image'];

}
