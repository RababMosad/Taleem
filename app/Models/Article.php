<?php

namespace App\Models;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable  
    = [
           'title', 
           'content',
           
       ];


    public $translatable = ['title', 'content']; 

    // public function getTranslation($field, $locale = null)
    // {
    //     $locale = $locale ?: App::getLocale(); 
        
    //     return $this->{$field . '_' . $locale}; 
    // }
 
}


