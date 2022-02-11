<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKriteriaModel extends Model
{
    public $timestamps = false;
    protected $table = "tb_sub_kriteria";
    protected $primaryKey = "id_sub_kriteria";
    protected $fillable =[
        'id_pengguna',
        'c1_sub_kriteria',
        'c21_sub_kriteria',
        'c22_sub_kriteria',
        'c23_sub_kriteria',
        'c24_sub_kriteria',
        'c25_sub_kriteria',
        'c26_sub_kriteria',
        'c27_sub_kriteria',
        'c28_sub_kriteria',
        'c29_sub_kriteria',
        'c31_sub_kriteria',
        'c41_sub_kriteria',
        'c42_sub_kriteria',
        'c43_sub_kriteria',
        'c44_sub_kriteria',
        'c45_sub_kriteria',
        'c46_sub_kriteria',
        'c47_sub_kriteria',
        'c48_sub_kriteria',
        'c49_sub_kriteria',
        'c51_sub_kriteria',
        'c52_sub_kriteria',
        'c53_sub_kriteria',
        'c54_sub_kriteria',
        'c55_sub_kriteria',
        'c56_sub_kriteria',
        'c57_sub_kriteria',
        'c58_sub_kriteria',
        'c59_sub_kriteria',
    ];
}
