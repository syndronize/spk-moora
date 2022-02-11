<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjumlahanModel extends Model
{
    public $timestamps = false;
    protected $table = "tb_penjumlahan";
    protected $primaryKey = "id_penjumlahan";
    protected $fillable =[
        'id_pengguna',
        'id_kriteria',
        'penjumlahan_1',
        'penjumlahan_2',
        'penjumlahan_akhir',
    ];
}
