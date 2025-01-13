<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\DaftarBantuan;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(): View
    {
        try {
            // Get total counts using DB queries with correct table names
            $totalKK = DB::table('wargas')->count();
            $totalBantuan = DB::table('bantuans')->count();
        } catch (\Exception $e) {
            // If there's an error, set counts to 0
            $totalKK = 0;
            $totalBantuan = 0;
        }

        return view('dashboard', [
            'totalKK' => $totalKK,
            'totalBantuan' => $totalBantuan
        ]);
    }
}
