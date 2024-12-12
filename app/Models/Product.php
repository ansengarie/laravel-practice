<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     // Tambahkan properti $fillable
    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id', // Jika menggunakan relasi kategori
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}