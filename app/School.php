<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    public function courseOpen()
    {
      return $this->hasMany('App\CourseOpen');
    }
}