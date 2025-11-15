<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class SeasonController extends Controller
{
    //季節を登録する
    public function getRegister()
    {
        $seasons = Season::all();

        return view('register', compact('seasons'));
    }
}
