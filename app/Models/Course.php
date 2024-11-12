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

    public $translatable = ['title', 'description'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function videos()
    {
        return $this->hasMany(video::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class); 
     

    }
    public function isPurchasedByUser($user) {
        return $this->subscriptions()->where('user_id', $user->id)->exists(); 
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
