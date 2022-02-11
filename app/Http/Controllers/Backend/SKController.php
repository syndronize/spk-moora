<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Models\SKModel;

class SKController extends Controller
{
    public function index()
    {
        $sk = DB::table('tb_sk')
        ->orderBy('id_sk')
        ->get();
        return view('backend/pages/sk/index',compact('sk'));
    }

    public function create(){
        return view(
            'backend/pages/sk/form',
            [
                'url' => 'sk.store',
            ]
            );
    }

    public function store(Request $request, SKModel $sk){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_sk'=>'required',
            'nilai_sk'=>'required',
            'bobot_sk'=>'required',
            'nilai_kriteria_sk'=>'required',
        ]);

        if($validator->fails()){
            return redirect()
            ->route('sk.create')
            ->withErrors($validator)
            ->withInput();
        }else {
            $sk->nama_sk = $request->input('nama_sk');
            $sk->nilai_sk = $request->input('nilai_sk');
            $sk->bobot_sk = $request->input('bobot_sk');
            $sk->nilai_kriteria_sk = $request->input('nilai_kriteria_sk');
            $sk->save();

            // $id=$sk->id_sk;
            // DB::table('tb_sk')->insert([
            //     'id_sk'=>$id
            // ]);

            return redirect()
            ->route('sk')
            ->with('pesan','Data Berhasil Ditambahkan');
        }
    }

    public function edit(SKModel $sk){

        return view(
            'backend/pages/sk/form',compact('sk')
        );
    }

    public function update(Request $request, SKModel $sk){

        $request->validate([
            'nama_sk'=>'required',
            'nilai_sk'=>'required',
            'bobot_sk'=>'required',
            'nilai_kriteria_sk'=>'required',
        ]);

            $sk->nama_sk = $request->input('nama_sk');
            $sk->nilai_sk = $request->input('nilai_sk');
            $sk->bobot_sk = $request->input('bobot_sk');
            $sk->nilai_kriteria_sk = $request->input('nilai_kriteria_sk');
            $sk -> save();

        return redirect()
        ->route('sk')
        ->with('pesan','Data Berhasil Diedit');
    }

    public function destroy(SKModel $sk){
        $id=$sk->id_sk;
        DB::table('tb_kriteria')->where('id_sk',$id)->delete();
        $sk->forceDelete();
        return redirect()
        ->route('sk')
        ->with('pesan','Data Berhasil Dihapus');
    }
}
