<?php

namespace App\Http\Controllers;

use App\Meme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemeController extends Controller
{
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
        $meme->link = $key;
        $meme->year = $request->year;
        $meme->upload_date = now();
        $meme->user_id = Auth::user()->id;
        $meme->save();

        return redirect('/profile');
    }

    public function newdenounce(Request $request, $id)
    {
        $meme = Meme::find($id);

        return view('denouncememe', compact('meme'));
    }
}
