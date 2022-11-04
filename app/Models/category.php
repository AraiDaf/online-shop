<?php

namespace App\Models;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'nama',
        'gambar'
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
