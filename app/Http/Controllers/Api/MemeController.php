<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Meme;

class MemeController extends Controller
{
    public function showAllMemes(){
        $memes = DB::table('memes')
                ->join('users', 'users.id', '=', 'memes.user_id')
                ->select('memes.id', 'memes.name', 'memes.link', 'memes.year', 'memes.upload_date', 'users.id as user_id', 'users.name as user_name', 'users.avatar', 'users.username')    
                ->orderBy('memes.id', 'desc')
                ->get();

        return response()->json($memes);
    }

    public function createMeme(Request $request){
        if(strlen($request->link) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->link, $match))
            {
                $key = $match[1];
            }
        }

        $meme = new Meme;
        $meme->name = $request->name;
        $meme->link = "https://www.youtube.com/embed/$key";
        $meme->year = $request->year;
        $meme->upload_date = now();
        $meme->user_id = $request->user_id;
        $meme->save();

        return redirect('/');

        // return response()->json('Meme adicionado com sucesso!');
    }

    public function showMemeById(Request $request, $id){
        $meme = Meme::find($id);

        return response()->json($meme);
    }

    public function editMemeById(Request $request, $id){
        $meme = Meme::find($id);
        $meme->name = $request->name;
        $meme->link = $request->link;
        $meme->year = $request->year;
        $meme->upload_date = now();
        $meme->save();

        return response()->json('Meme editado com sucesso!');
    }
}
