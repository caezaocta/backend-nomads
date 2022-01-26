<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\TravelPackage;
use App\Models\Gallery;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Alert::success('Success Title', 'halo');
        $items = TravelPackage::with(['galleries'])->get();

        return view('pages.home', [
            'items' => $items
        ]);

        return view('pages.home');
    }
}
