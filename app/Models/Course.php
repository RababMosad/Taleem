<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   
    protected $fillable = [
        'title',
         'description',  
        'image_path',  
        'video_title', 
        'is_active',
         'price'];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function videos()
    {
        return $this->hasMany(videos::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class); 
     

    }
}
