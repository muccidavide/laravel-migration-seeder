<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $travels = Travel::limit(3)->get();
        return view('welcome', compact('travels'));
    }

}
