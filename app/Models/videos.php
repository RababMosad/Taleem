<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    

    protected $fillable = [
        'course_id', 

        'url'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
