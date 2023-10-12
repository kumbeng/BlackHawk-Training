<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agensi extends Model
{
    use HasFactory;

    protected $table = 'agencies';
    protected $fillable = [
        'name',
        'alamat'
    ];
}