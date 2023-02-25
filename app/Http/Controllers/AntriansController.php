<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Antrian;

class AntriansController extends Controller
{
    public function __construct()
    {

    }

    private $table = "antrians";
    public function all()
    {
        $antrian = DB::select("SELECT 'tanggal_antrian' FROM $this->table");
        return $antrian;
    }
}
