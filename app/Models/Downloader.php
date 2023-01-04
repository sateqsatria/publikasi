<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloader extends Model
{
    use HasFactory;

    protected $fillable = [
        'publication_id',
        'nama',
        'instansi',
        'email'
    ];
}
