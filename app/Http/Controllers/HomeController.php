<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Alert::success('Success Title', 'halo');

        return view('pages.home');
    }
}
