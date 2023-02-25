<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AntriansController;

class DashboardController extends Controller
{

    public function tampil(Request $request){
        
        $skrg = Carbon::now()->addHours(7);
        $HariIni = Carbon::now()->addHours(7)->startOfDay();
        $waktuAntri=Carbon::parse($skrg)->subMinutes(10);

        $antrianK = DB::table('antrians')
            ->where('jenis_layanan', 'karantina')
            ->where('tanggal_antrian', '<', $skrg)
            ->where('tanggal_antrian', '>', $waktuAntri)
            ->where('tanggal_antrian', '>', $HariIni)
            ->orderBy('id', 'desc')
            ->pluck('no_antrian')
            ->first();

        $antrianM = DB::table('antrians')
            ->where('jenis_layanan', 'mutu')
            ->where('tanggal_antrian', '<', $skrg)
            ->where('tanggal_antrian', '>', $waktuAntri)
            ->where('tanggal_antrian', '>', $HariIni)
            ->orderBy('id', 'desc')
            ->pluck('no_antrian')
            ->first();

        $antrianCS = DB::table('antrians')
            ->where('jenis_layanan', 'cs')
            ->where('tanggal_antrian', '<', $skrg)
            ->where('tanggal_antrian', '>', $waktuAntri)
            ->where('tanggal_antrian', '>', $HariIni)
            ->orderBy('id', 'desc')
            ->pluck('no_antrian')
            ->first();

        $panggilK = DB::table('antrians')
            ->where('jenis_layanan', 'karantina')
            ->where('tanggal_antrian', '<', $skrg)
            ->where('tanggal_antrian', '>', $waktuAntri)
            ->where('tanggal_antrian', '>', $HariIni)
            ->orderBy('id', 'desc')
            ->select('no_antrian', 'no_ppk', 'tanggal_antrian')
            ->first();

        $panggilM = DB::table('antrians')
            ->where('jenis_layanan', 'mutu')
            ->where('tanggal_antrian', '<', $skrg)
            ->where('tanggal_antrian', '>', $waktuAntri)
            ->where('tanggal_antrian', '>', $HariIni)
            ->orderBy('id', 'desc')
            ->select('no_antrian', 'no_ppk', 'tanggal_antrian')
            ->first();

        $panggilCS = DB::table('antrians')
            ->where('jenis_layanan', 'cs')
            ->where('tanggal_antrian', '<', $skrg)
            ->where('tanggal_antrian', '>', $waktuAntri)
            ->where('tanggal_antrian', '>', $HariIni)
            ->orderBy('id', 'desc')
            ->select('no_antrian', 'no_ppk', 'tanggal_antrian')
            ->first();

        $listK = DB::table('antrians')
            ->where('jenis_layanan', 'karantina')
            ->where('tanggal_antrian', '>', $skrg)
            ->orderBy('id', 'asc')
            ->select('no_antrian', 'no_ppk', 'tanggal_antrian')
            ->get();

        $listM = DB::table('antrians')
            ->where('jenis_layanan', 'mutu')
            ->where('tanggal_antrian', '>', $skrg)
            ->orderBy('id', 'asc')
            ->select('no_antrian', 'no_ppk', 'tanggal_antrian')
            ->get();

        $listCS = DB::table('antrians')
            ->where('jenis_layanan', 'cs')
            ->where('tanggal_antrian', '>', $skrg)
            ->orderBy('id', 'asc')
            ->select('no_antrian', 'no_ppk', 'tanggal_antrian')
            ->get();
            
        $countK = $listK->count();
        $countM = $listM->count();
        $countCS = $listCS->count();

        if(isset($panggilK)){
            $countK++;
        }
        if(isset($panggilM)){
            $countM++;
        }
        if(isset($panggilCS)){
            $countCS++;
        }

        return view('dashboard.pengunjung', [
            "title" => "Dashboard",
            'active' => 'pengunjung',
            'antrianK'=> $antrianK,
            'antrianM'=> $antrianM,
            'antrianCS'=> $antrianCS,
            'listK'=> $listK,
            'listM'=> $listM,
            'listCS'=> $listCS,
            'panggilK'=> $panggilK,
            'panggilM'=> $panggilM,
            'panggilCS'=> $panggilCS,
            'countK'=> $countK,
            'countM'=> $countM,
            'countCS'=> $countCS,
        ]);
    }

    public function dash_opk()
    {
        return view('dashboard.operator.karantina', [
            'title' => 'Dashboard',
            'active' => 'operator',
        ]);
    }
    public function dash_opm()
    {
        return view('dashboard.operator.mutu', [
            'title' => 'Dashboard',
            'active' => 'operator'
        ]);
    }
    public function dash_ocs()
    {
        return view('dashboard.operator.cs', [
            'title' => 'Dashboard',
            'active' => 'operator'
        ]);
    }

    public function dash_admin()
    {
        return view('dashboard.admin', [
            'title' => 'Dashboard',
            'active' => 'admin'
        ]);
    }
}
