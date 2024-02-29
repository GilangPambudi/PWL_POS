<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {   
        $key = 'ADM';
        $row = DB::select('select * from m_level where level_kode = ?', [$key]);
        return view('level', ['data' => $row]);
    }
}
