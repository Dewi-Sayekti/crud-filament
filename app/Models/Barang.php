<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getGambarUrlAttribute()
{
    return url("/uploads/barangs/" . basename($this->gambar));
}


}
