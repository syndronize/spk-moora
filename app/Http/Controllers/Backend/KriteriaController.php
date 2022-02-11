<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenggunaModel;
use Illuminate\Support\Facades\Validator;
use App\Models\KriteriaModel;
use App\Models\SKModel;
use DB;

class KriteriaController extends Controller
{
    public function index()
    {
        // data kirteria
        $kriteria = DB::table('tb_kriteria')
        ->orderBy('id_kriteria')
        ->get();


        foreach ($kriteria as $no => $row) {
            $nilai_kriteria=$row->nilai_sk_kriteria;
            
            $bobot_sk=$row->bobot_sk_kriteria;
            $nilai_final_bobot = $bobot_sk/$nilai_kriteria;
            // dd($nilai_final_bobot,$bobot_sk,$nilai_kriteria);
            $save = DB::table('tb_kriteria')->where('id_kriteria',$row->id_kriteria)->update([
                'bobot_final_kriteria' => $nilai_final_bobot
            ]);
        }
        
        return view('backend/pages/kriteria/index',compact('kriteria'));
    }

    public function create(){
        return view (
            'backend/pages/kriteria/form',
            [
                'url'=>'kriteria.store'
            ]
            );
    }

    public function store(Request $request, KriteriaModel $kriteria){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_kriteria'=>'required',
            'tipe_kriteria'=>'required',
            'nama_sk_kriteria'=>'required',
            'jenis_sk_kriteria'=>'required',
            'bobot_sk_kriteria'=>'required',
            'nilai_sk_kriteria'=>'required',
        ]);

        if($validator->fails()){
            return redirect()
            ->route('kriteria.create')
            ->withErrors($validator)
            ->withInput();
        }else {
            $kriteria->nama_kriteria = $request->input('nama_kriteria');
            $kriteria->tipe_kriteria = $request->input('tipe_kriteria');
            $kriteria->nama_sk_kriteria = $request->input('nama_sk_kriteria');
            $kriteria->jenis_sk_kriteria = $request->input('jenis_sk_kriteria');
            $kriteria->bobot_sk_kriteria = $request->input('bobot_sk_kriteria');
            $kriteria->nilai_sk_kriteria = $request->input('nilai_sk_kriteria');
            // $bobot = $kriteria->bobot_sk;
            // $nilai = $kriteria->nilai_sk_kriteria;
            // $final = $bobot / $final;
            // $kriteria->nilai_kriteria = $final;
            $kriteria->save();

            

            return redirect()
            ->route('kriteria')
            ->with('pesan','Data Berhasil Ditambahkan');
        }
    }

    public function edit(KriteriaModel $kriteria){
        // dd($kriteria);
        // $kriteria = DB::table('tb_kriteria')
        // ->leftJoin('tb_pengguna','tb_pengguna.id_pengguna','=','tb_kriteria.id_pengguna')
        // ->leftJoin('tb_sk','tb_sk.id_sk','=','tb_kriteria.id_sk')
        // ->first();
        return view(
            'backend/pages/kriteria/form',[
                'kriteria'=>$kriteria
            ]
        );
    }

    public function update(Request $request, KriteriaModel $kriteria){
        $request->validate([
            "nama_kriteria" => ["required"],
            "tipe_kriteria" => ["required"],
            "nama_sk_kriteria" => ["required"],
            "jenis_sk_kriteria" => ["required"],
            // "bobot_final_kriteria" => ["required"],
            "bobot_sk_kriteria" => ["required"],
            "nilai_sk_kriteria" => ["required"],
        ]);


            $kriteria->nama_kriteria = $request->input('nama_kriteria');
            $kriteria->tipe_kriteria = $request->input('tipe_kriteria');
            $kriteria->nama_sk_kriteria = $request->input('nama_sk_kriteria');
            $kriteria->jenis_sk_kriteria = $request->input('jenis_sk_kriteria');
            $kriteria->bobot_sk_kriteria = $request->input('bobot_sk_kriteria');
            $kriteria->nilai_sk_kriteria = $request->input('nilai_sk_kriteria');
            $kriteria->save();

        return redirect()
        ->route('kriteria')
        ->with('pesan','Data Berhasil Diedit');
    }

    public function destroy(KrtiteriaModel $kriteria){

        $kriteria->forceDelete();
        return redirect()
        ->route('kriteria')
        ->with('pesan','Data Berhasil Dihapus');
    }
}
