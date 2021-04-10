<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    use HasFactory;

    public $table = "crops";

    protected $fillable = [
        'jenisTanah',
        'curahHujan',
        'iklim',
        'suhu',
    ];
}
