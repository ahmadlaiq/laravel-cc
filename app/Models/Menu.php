<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guard = ['id'];
    protected $fillable = [
        'nama', 'harga', 'deskripsi', 'gambar', 'kategori'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
