<?php

namespace App\Http\Controllers;

use App\Meme;
use App\Denounce;
use App\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemeController extends Controller
{
    public function getMemesByAsc(){
        $memes = DB::table('memes')
                ->join('users', 'users.id', '=', 'memes.user_id')
                ->select('memes.id', 'memes.name', 'memes.link', 'memes.year', 'memes.upload_date', 'users.id as user_id', 'users.name as user_name', 'users.avatar', 'users.username')    
                ->orderBy('memes.id', 'asc')
                ->get();

        return response()->json($memes);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string', 'max:255', 'unique:memes'],
            'year' => ['number', 'max:4'],
        ]);
    }

    public function create(Request $request)
    {
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
    }

    public function newDenounce(Request $request, $id)
    {
        $meme = Meme::find($id);

        return view('denouncememe', compact('meme'));
    }

    public function createDenounce(Request $request, $id)
    {
        $denounce = new Denounce();
        $denounce->id_post = $id;
        $denounce->spam = $request->spam;
        $denounce->nudity = $request->nudity;
        $denounce->violence = $request->violence;
        $denounce->hate = $request->hate;
        $denounce->suicide = $request->suicide;
        $denounce->other = $request->other;
        $denounce->text_other = $request->text_other;
        $denounce->save();

        return redirect('/');
    }

    public function deleteMemeById(Request $request, $id){
        $meme = Meme::find($id);
        $meme->delete();
    }

    public function getYears()
    {
        $query = DB::table('memes')
                ->select('year')
                ->groupBy('year')
                ->orderBy('year', 'desc')
                ->get();

        return response()->json($query);
    }

}
