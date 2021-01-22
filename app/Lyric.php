<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model {
    protected $fillable = [
        'Judul_Lagu',
        'Penyanyi',
        'Tahun',
        'Lirik',
        'Photo'
    ];
}