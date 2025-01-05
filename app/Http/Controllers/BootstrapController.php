<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    function index()
    {
        $pageTitle = 'Index';
        return view('bootstrap', ['pageTitle' => $pageTitle]);
    }
}
