<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guard = ['id'];
    protected $fillable = [
        'nama'
    ];

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
