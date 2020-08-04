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
        $meme = new Meme;
        $meme->name = $request->name;
        $meme->link = $request->link;
        $meme->year = $request->year;
        $meme->upload_date = now();
        $meme->user_id = Auth::user()->id;
        $meme->save();

        return redirect('/profile');
    }
}
