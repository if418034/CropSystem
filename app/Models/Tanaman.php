<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    public $table = "tanamans";

    protected $fillable = [
        'jenisTanaman',
        'kondisiAgroclimatic',
        'jenisPupuk',
    ];
}
