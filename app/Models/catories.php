<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catories extends Model
{
    use HasFactory;
     protected $fillable = [
        'ten_tin_tuc',
        'trang_thai',
        'noi_dung',
    ];
}

