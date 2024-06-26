<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title' => 'Admin',
            'list' => ['Home', 'Admin']
        ];

        $page = (object)[
            'title' => 'Admin Page'
        ];

        $activeMenu = 'Admin'; //set menu yang sedang aktif


        return view('admin', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}