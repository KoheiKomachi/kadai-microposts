<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_microposts = $user->microposts()->count();
        $count_followings = $user->followings()->count();
        $count_followers = $user->followers()->count();
        //lesson12 課題「お気に入り」追加
        $count_favorites = $user->favorites()->count();  
//        $count_favoriters =$user->favoriters()->count();
        
        return [
            'count_microposts' => $count_microposts,
            'count_followings' => $count_followings,
            'count_followers' => $count_followers,
            //lesson12 課題「お気に入り」追加
            'count_favorites' => $count_favorites,
 //           'count_favoriters' => $count_favoriters,
        ];
    }
    
    //lesson12 課題「お気に入り」追加
    //public function counts($micropost) {
    //    $count_favoriters = $micropost->users()->count();
    //    
    //    return [
    //        'count_favoriters' => $count_favoriters,
    //    ];
    //}
        
        
}