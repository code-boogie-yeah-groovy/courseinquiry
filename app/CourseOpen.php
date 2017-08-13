<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOpen extends Model
{
    //
    public function school()
    {
      return $this->belongsTo('App\School');
    }

    public function courses()
    {
      return $this->belongsTo('App\Course');
    }
}
