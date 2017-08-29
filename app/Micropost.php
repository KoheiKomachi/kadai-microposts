<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //lesson12 課題「お気に入り」追加
    public function favoriters()
    {
        return $this->belongsToMany(User::class, 'favorite', 'micropost_id', 'user_id')->withTimestamps();
    } 
}