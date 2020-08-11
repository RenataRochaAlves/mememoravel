<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meme;
use App\Favorites;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller
{
    public function addToFavorites(Request $request, $id)
    {
        $favorite = new Favorites();
        $favorite->user_id = Auth::user()->id;
        $favorite->meme_id = $id;
        $favorite->save();

        return('ok');
    }

    public function showFavoriteMemes(Request $request, $id){
        $memes = DB::table('favorites')
                ->join('memes', 'memes.id', '=', 'favorites.meme_id')
                ->join('users', 'users.id', '=', 'memes.user_id')
                ->select('memes.id', 'memes.name', 'memes.link', 'memes.year', 'memes.upload_date', 'users.id as user_id', 'users.name as user_name', 'users.avatar', 'users.username')
                ->where('favorites.user_id', '=', $id)   
                ->orderBy('memes.id', 'desc')
                ->get();

        return response()->json($memes);
    }

    public function showMemesFromUser(Request $request, $id){
        $memes = DB::table('memes')
                ->join('users', 'users.id', '=', 'memes.user_id')
                ->select('memes.id', 'memes.name', 'memes.link', 'memes.year', 'memes.upload_date', 'users.id as user_id', 'users.name as user_name', 'users.avatar', 'users.username')
                ->where('users.id', '=', $id)   
                ->orderBy('memes.id', 'desc')
                ->get();

        return response()->json($memes);
    }

    public function removeFromFavorites(Request $request, $meme_id, $user_id)
    {
        $query = DB::table('favorites')
                    ->where([
                        ['meme_id', '=', $meme_id],
                        ['user_id', '=', $user_id]
                        ])
                    ->delete();
    }

    public function checkFavorite(Request $request, $meme_id, $user_id)
    {
        $response = DB::table('favorites')
                    ->select('id')
                    ->where([
                        ['meme_id', '=', $meme_id],
                        ['user_id', '=', $user_id]
                        ])
                    ->get();
        
        if($response != '[]'){
           return response()->json(true); 
        } else {
            return response()->json(false);  
        }
        
    }
}
