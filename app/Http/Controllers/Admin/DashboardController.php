<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Admin\TravelPackage;
use App\Models\TravelPackage;
use App\Models\Transaction;
use File;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // $travel_package = TravelPackage::count();
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
            // 'travel_package' => TravelPackage::count()
            // 'travel_package' => TravelPackage::count()
        ]);
    }
}
