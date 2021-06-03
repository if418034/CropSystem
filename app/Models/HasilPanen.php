<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPanen extends Model
{
    use HasFactory;

    public $table = "hasil_panens";

    protected $fillable = [
        'id_tanaman',
        'berat',
        'nama_petani',
        'nomor_wa',
    ];
}
