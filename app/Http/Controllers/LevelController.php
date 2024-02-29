<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from m_level');
        foreach ($data as $d){
            echo $d->level_id . ' | ' . $d->level_kode . ' | ' . $d->level_nama . '<br>';
        }
    }
}
