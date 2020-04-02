<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    // created_at and updated_at
    // $timestamps=false;
    // $connection = 'mysql2'
    // $primaryKey = 'passportNumber'

    public function getTitleAttribute($value){
    	return strtoupper($value);
    }

    public function likes() {
    	return $this->hasMany('App\Like');
    }

    public function tags() {
    	return $this->belongsToMany('App\Tag');
    }
}
