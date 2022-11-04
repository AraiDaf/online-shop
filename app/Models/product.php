<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
        'discount',
        'category_id'
    ];
    public function Category()
    {
        return $this->belongsTo(category::class);
    }
}

