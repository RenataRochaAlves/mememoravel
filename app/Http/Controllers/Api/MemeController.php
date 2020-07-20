<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meme;

class MemeController extends Controller
{
    public function showAllMemes(){
        $memes = Meme::all();

        return response()->json($memes);
    }

    public function createMeme(Request $request){
        $meme = new Meme;
        $meme->name = $request->name;
        $meme->link = $request->link;
        $meme->year = $request->year;
        $meme->upload_date = now();
        $meme->save();
    }
}
