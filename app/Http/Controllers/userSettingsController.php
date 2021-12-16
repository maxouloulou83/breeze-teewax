<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userSettingsController extends Controller
{
    public function index()
    {
        return view ('pages.users.settings');
    }
}
