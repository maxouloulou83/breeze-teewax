<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dealerController extends Controller
{
    public function index()
    {
        return view( 'pages.dealer');
    }
}
