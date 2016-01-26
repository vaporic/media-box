<?php

namespace MediaBox\Http\Controllers;

use Illuminate\Http\Request;

use MediaBox\Http\Requests;
use MediaBox\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
