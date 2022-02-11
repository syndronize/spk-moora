<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenggunaModel;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\SubKriteriaModel;

class SubKriteriaController extends Controller
{
    public function index()
    {
        $sk = DB::table('tb_sub_kriteria')
        ->leftJoin('tb_pengguna','tb_pengguna.id_pengguna','=','tb_sub_kriteria.id_pengguna')
        ->orderBy('id_sub_kriteria')
        ->get();

        $total_pangkat_c1 = DB::table('tb_sub_kriteria')->SUM('pangkat_c1');
        $akar_c1 = SQRT($total_pangkat_c1);

        $total_pangkat_c2 = DB::table('tb_sub_kriteria')->SUM('pangkat_c2');
        $akar_c2 = SQRT($total_pangkat_c2);

        $total_pangkat_c3 = DB::table('tb_sub_kriteria')->SUM('pangkat_c3');
        $akar_c3 = SQRT($total_pangkat_c3);

        $total_pangkat_c4 = DB::table('tb_sub_kriteria')->SUM('pangkat_c4');
        $akar_c4 = SQRT($total_pangkat_c4);

        $total_pangkat_c5 = DB::table('tb_sub_kriteria')->SUM('pangkat_c5');
        $akar_c5 = SQRT($total_pangkat_c5);

        foreach ($sk as $no => $row) {
            $c1 = $row->c1_sub_kriteria;
            $c21 = $row->c21_sub_kriteria;
            $c22 = $row->c22_sub_kriteria;
            $c23 = $row->c23_sub_kriteria;
            $c24 = $row->c24_sub_kriteria;
            $c25 = $row->c25_sub_kriteria;
            $c26 = $row->c26_sub_kriteria;
            $c27 = $row->c27_sub_kriteria;
            $c28 = $row->c28_sub_kriteria;
            $c29 = $row->c29_sub_kriteria;
            $c31 = $row->c31_sub_kriteria;
            $c41 = $row->c41_sub_kriteria;
            $c42 = $row->c42_sub_kriteria;
            $c43 = $row->c43_sub_kriteria;
            $c44 = $row->c44_sub_kriteria;
            $c45 = $row->c45_sub_kriteria;
            $c46 = $row->c46_sub_kriteria;
            $c47 = $row->c47_sub_kriteria;
            $c48 = $row->c48_sub_kriteria;
            $c49 = $row->c49_sub_kriteria;
            $c51 = $row->c51_sub_kriteria;
            $c52 = $row->c52_sub_kriteria;
            $c53 = $row->c53_sub_kriteria;
            $c54 = $row->c54_sub_kriteria;
            $c55 = $row->c55_sub_kriteria;
            $c56 = $row->c56_sub_kriteria;
            $c57 = $row->c57_sub_kriteria;
            $c58 = $row->c58_sub_kriteria;
            $c59 = $row->c59_sub_kriteria;
            
            $nilaitotal1 = $c1+$c21+$c22+$c23+$c24+$c25+$c26+$c27+$c28+$c29+$c31+$c41+$c42+$c43+$c44+$c45+$c46+$c47+$c48+$c49+$c51+$c52+$c53+$c54+$c55+$c56+$c57+$c58+$c59;
            
            $total_c1 = $c1;
            $total_c2 = $c21+$c22+$c23+$c24+$c25+$c26+$c27+$c28+$c29;
            $total_c3 = $c31;
            $total_c4 = $c41+$c42+$c43+$c44+$c45+$c46+$c47+$c48+$c49;
            $total_c5 = $c51+$c52+$c53+$c54+$c55+$c56+$c57+$c58+$c59;
            
            $pangkat_c1 = pow($total_c1,2);
            $pangkat_c2 = pow($total_c2,2);
            $pangkat_c3 = pow($total_c3,2);
            $pangkat_c4 = pow($total_c4,2);
            $pangkat_c5 = pow($total_c5,2);
            // dd($akarc1[0]);
            // dd($total_c5[0]);

            $ternormalisasi_c1 = $total_c1/$akar_c1;
            $ternormalisasi_c2 = $total_c2/$akar_c2;
            $ternormalisasi_c3 = $total_c3/$akar_c3;
            $ternormalisasi_c4 = $total_c4/$akar_c4;
            $ternormalisasi_c5 = $total_c5/$akar_c5;

            $terbobot_c1 = $ternormalisasi_c1;
            $terbobot_c2 = $ternormalisasi_c2*3;
            $terbobot_c3 = $ternormalisasi_c3*2;
            $terbobot_c4 = $ternormalisasi_c4*2;
            $terbobot_c5 = $ternormalisasi_c5*2;

            $final = $terbobot_c1 + $terbobot_c2 + $terbobot_c3 + $terbobot_c4 + $terbobot_c5;
            // dd($final);
            $save=DB::table('tb_sub_kriteria')->where('id_sub_kriteria', $row->id_sub_kriteria)
            ->update([
                'nilaitotal_sub_kriteria' =>$nilaitotal1,
                'pangkat_c1' =>$pangkat_c1,
                'pangkat_c2' =>$pangkat_c2,
                'pangkat_c3' =>$pangkat_c3,
                'pangkat_c4' =>$pangkat_c4,
                'pangkat_c5' =>$pangkat_c5,
                'hasil_final_sub_kriteria' =>$final,
            ]);
        }



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

    public function store(Request $request, SubKriteriaModel $sk){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'id_pengguna'=>'required',
            'c1_sub_kriteria'=>'required',
            'c21_sub_kriteria'=>'required',
            'c22_sub_kriteria'=>'required',
            'c23_sub_kriteria'=>'required',
            'c24_sub_kriteria'=>'required',
            'c25_sub_kriteria'=>'required',
            'c26_sub_kriteria'=>'required',
            'c27_sub_kriteria'=>'required',
            'c28_sub_kriteria'=>'required',
            'c29_sub_kriteria'=>'required',
            'c31_sub_kriteria'=>'required',
            'c41_sub_kriteria'=>'required',
            'c42_sub_kriteria'=>'required',
            'c43_sub_kriteria'=>'required',
            'c44_sub_kriteria'=>'required',
            'c45_sub_kriteria'=>'required',
            'c46_sub_kriteria'=>'required',
            'c47_sub_kriteria'=>'required',
            'c48_sub_kriteria'=>'required',
            'c49_sub_kriteria'=>'required',
            'c51_sub_kriteria'=>'required',
            'c52_sub_kriteria'=>'required',
            'c53_sub_kriteria'=>'required',
            'c54_sub_kriteria'=>'required',
            'c55_sub_kriteria'=>'required',
            'c56_sub_kriteria'=>'required',
            'c57_sub_kriteria'=>'required',
            'c58_sub_kriteria'=>'required',
            'c59_sub_kriteria'=>'required',
        ]);

        if($validator->fails()){
            return redirect()
            ->route('sk.create')
            ->withErrors($validator)
            ->withInput();
        }else {
            $sk->id_pengguna = $request->input('id_pengguna');
            $sk->c1_sub_kriteria = $request->input('c1_sub_kriteria');
            $sk->c21_sub_kriteria = $request->input('c21_sub_kriteria');
            $sk->c22_sub_kriteria = $request->input('c22_sub_kriteria');
            $sk->c23_sub_kriteria = $request->input('c23_sub_kriteria');
            $sk->c24_sub_kriteria = $request->input('c24_sub_kriteria');
            $sk->c25_sub_kriteria = $request->input('c25_sub_kriteria');
            $sk->c26_sub_kriteria = $request->input('c26_sub_kriteria');
            $sk->c27_sub_kriteria = $request->input('c27_sub_kriteria');
            $sk->c28_sub_kriteria = $request->input('c28_sub_kriteria');
            $sk->c29_sub_kriteria = $request->input('c29_sub_kriteria');
            $sk->c31_sub_kriteria = $request->input('c31_sub_kriteria');
            $sk->c41_sub_kriteria = $request->input('c41_sub_kriteria');
            $sk->c42_sub_kriteria = $request->input('c42_sub_kriteria');
            $sk->c43_sub_kriteria = $request->input('c43_sub_kriteria');
            $sk->c44_sub_kriteria = $request->input('c44_sub_kriteria');
            $sk->c45_sub_kriteria = $request->input('c45_sub_kriteria');
            $sk->c46_sub_kriteria = $request->input('c46_sub_kriteria');
            $sk->c47_sub_kriteria = $request->input('c47_sub_kriteria');
            $sk->c48_sub_kriteria = $request->input('c48_sub_kriteria');
            $sk->c49_sub_kriteria = $request->input('c49_sub_kriteria');
            $sk->c51_sub_kriteria = $request->input('c51_sub_kriteria');
            $sk->c52_sub_kriteria = $request->input('c52_sub_kriteria');
            $sk->c53_sub_kriteria = $request->input('c53_sub_kriteria');
            $sk->c54_sub_kriteria = $request->input('c54_sub_kriteria');
            $sk->c55_sub_kriteria = $request->input('c55_sub_kriteria');
            $sk->c56_sub_kriteria = $request->input('c56_sub_kriteria');
            $sk->c57_sub_kriteria = $request->input('c57_sub_kriteria');
            $sk->c58_sub_kriteria = $request->input('c58_sub_kriteria');
            $sk->c59_sub_kriteria = $request->input('c59_sub_kriteria');
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

    public function edit(SubKriteriaModel $sk){

        return view(
            'backend/pages/sk/form',compact('sk')
        );
    }

    public function update(Request $request, SubKriteriaModel $sk){

        $request->validate([
            'id_pengguna'=>'required',
            'c1_sub_kriteria'=>'required',
            'c21_sub_kriteria'=>'required',
            'c22_sub_kriteria'=>'required',
            'c23_sub_kriteria'=>'required',
            'c24_sub_kriteria'=>'required',
            'c25_sub_kriteria'=>'required',
            'c26_sub_kriteria'=>'required',
            'c27_sub_kriteria'=>'required',
            'c28_sub_kriteria'=>'required',
            'c29_sub_kriteria'=>'required',
            'c31_sub_kriteria'=>'required',
            'c41_sub_kriteria'=>'required',
            'c42_sub_kriteria'=>'required',
            'c43_sub_kriteria'=>'required',
            'c44_sub_kriteria'=>'required',
            'c45_sub_kriteria'=>'required',
            'c46_sub_kriteria'=>'required',
            'c47_sub_kriteria'=>'required',
            'c48_sub_kriteria'=>'required',
            'c49_sub_kriteria'=>'required',
            'c51_sub_kriteria'=>'required',
            'c52_sub_kriteria'=>'required',
            'c53_sub_kriteria'=>'required',
            'c54_sub_kriteria'=>'required',
            'c55_sub_kriteria'=>'required',
            'c56_sub_kriteria'=>'required',
            'c57_sub_kriteria'=>'required',
            'c58_sub_kriteria'=>'required',
            'c59_sub_kriteria'=>'required',
        ]);

        $sk->id_pengguna = $request->input('id_pengguna');
        $sk->c1_sub_kriteria = $request->input('c1_sub_kriteria');
        $sk->c21_sub_kriteria = $request->input('c21_sub_kriteria');
        $sk->c22_sub_kriteria = $request->input('c22_sub_kriteria');
        $sk->c23_sub_kriteria = $request->input('c23_sub_kriteria');
        $sk->c24_sub_kriteria = $request->input('c24_sub_kriteria');
        $sk->c25_sub_kriteria = $request->input('c25_sub_kriteria');
        $sk->c26_sub_kriteria = $request->input('c26_sub_kriteria');
        $sk->c27_sub_kriteria = $request->input('c27_sub_kriteria');
        $sk->c28_sub_kriteria = $request->input('c28_sub_kriteria');
        $sk->c29_sub_kriteria = $request->input('c29_sub_kriteria');
        $sk->c31_sub_kriteria = $request->input('c31_sub_kriteria');
        $sk->c41_sub_kriteria = $request->input('c41_sub_kriteria');
        $sk->c42_sub_kriteria = $request->input('c42_sub_kriteria');
        $sk->c43_sub_kriteria = $request->input('c43_sub_kriteria');
        $sk->c44_sub_kriteria = $request->input('c44_sub_kriteria');
        $sk->c45_sub_kriteria = $request->input('c45_sub_kriteria');
        $sk->c46_sub_kriteria = $request->input('c46_sub_kriteria');
        $sk->c47_sub_kriteria = $request->input('c47_sub_kriteria');
        $sk->c48_sub_kriteria = $request->input('c48_sub_kriteria');
        $sk->c49_sub_kriteria = $request->input('c49_sub_kriteria');
        $sk->c51_sub_kriteria = $request->input('c51_sub_kriteria');
        $sk->c52_sub_kriteria = $request->input('c52_sub_kriteria');
        $sk->c53_sub_kriteria = $request->input('c53_sub_kriteria');
        $sk->c54_sub_kriteria = $request->input('c54_sub_kriteria');
        $sk->c55_sub_kriteria = $request->input('c55_sub_kriteria');
        $sk->c56_sub_kriteria = $request->input('c56_sub_kriteria');
        $sk->c57_sub_kriteria = $request->input('c57_sub_kriteria');
        $sk->c58_sub_kriteria = $request->input('c58_sub_kriteria');
        $sk->c59_sub_kriteria = $request->input('c59_sub_kriteria');
        $sk->save();

        return redirect()
        ->route('sk')
        ->with('pesan','Data Berhasil Diedit');
    }

    public function destroy(SubKriteriaModel $sk){
        $sk->forceDelete();
        return redirect()
        ->route('sk')
        ->with('pesan','Data Berhasil Dihapus');
    }
}
