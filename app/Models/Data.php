<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    public $table = "datas";

    protected $fillable = [
        'status',
        'area',
        'tipe',
        'varietas',
        'kuantitas',
        'harga',
    ];
}
