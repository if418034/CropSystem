<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTanaman extends Model
{
    use HasFactory;

    public $table = "kategori_tanamans";

    protected $fillable = [
        'kategori',
    ];
}
