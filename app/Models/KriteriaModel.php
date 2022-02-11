<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaModel extends Model
{
    public $timestamps = false;
    protected $table = "tb_kriteria";
    protected $primaryKey = "id_kriteria";
    protected $fillable =[
        'nama_kriteria',
        'tipe_kriteria',
        'nama_sk_kriteria',
        'jenis_sk_kriteria',
        'bobot_sk_kriteria',
        'nilai_sk_kriteria',
    ];
}
