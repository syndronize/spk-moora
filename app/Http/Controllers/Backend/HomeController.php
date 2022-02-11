<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $home = DB::table('tb_sub_kriteria')
        ->leftJoin('tb_pengguna','tb_pengguna.id_pengguna','=','tb_sub_kriteria.id_pengguna')
        ->orderBy('id_sub_kriteria')
        ->get();
        return view('backend/home',compact('home'));
    }

    // public function cariNilai(Request $request){

    //     $tanggal_awal = $request->tanggal_awal;
    //     $tanggal_akhir = $request->tanggal_akhir;

    //     $home = DB::table('tb_kriteria')
    //             ->leftjoin('tb_pengguna','tb_pengguna.id_pengguna','=','tb_kriteria.id_pengguna')
    //             ->leftjoin('tb_kategori','tb_kategori.id_kategori','=','tb_kriteria.id_kategori')
    //             ->whereBetween('tb_kriteria.created_at',array($tanggal_awal,$tanggal_akhir))
    //             ->select('tb_kriteria.*','tb_pengguna.*','tb_kategori.*')
    //             ->orderBy('id_kriteria')
    //             ->get();
    //     return view(
    //         'backend/home',
    //         [
    //             'home' => $home
    //         ]
    //     );

    // }
}
