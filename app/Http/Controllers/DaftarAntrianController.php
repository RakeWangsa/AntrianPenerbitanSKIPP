<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DaftarAntrianController extends Controller
{
    public function tampil(Request $request){
        
        $skrg = Carbon::now()->addHours(7);
        $HariIni = Carbon::now()->addHours(7)->startOfDay();
        $waktuAntri=Carbon::parse($skrg)->subMinutes(10);

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

        return view('antrian.daftarAntrian.pengunjung', [
            "title" => "Daftar Antrian",
            'active' => 'daftar antrian',
            'listK'=> $listK,
            'listM'=> $listM,
            'listCS'=> $listCS,
            'panggilK'=> $panggilK,
            'panggilM'=> $panggilM,
            'panggilCS'=> $panggilCS,
        ]);
    }

    public function da_opk()
    {
        return view('antrian.daftarAntrian.operatorKarantina', [
            'title' => 'Daftar Antrian',
            'active' => 'daftar antrian'
        ]);
    }
    public function da_opm()
    {
        return view('antrian.daftarAntrian.operatorMutu', [
            'title' => 'Daftar Antrian',
            'active' => 'daftar antrian'
        ]);
    }
    public function da_ocs()
    {
        return view('antrian.daftarAntrian.operatorCS', [
            'title' => 'Daftar Antrian',
            'active' => 'daftar antrian'
        ]);
    }
    public function da_admin()
    {
        return view('antrian.daftarAntrian.admin', [
            'title' => 'Daftar Antrian',
            'active' => 'daftar antrian'
        ]);
    }
}
