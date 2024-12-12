<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
{
    // Mengambil semua produk dan kategori terkait
    $products = Product::with('category')->get();

    return view('products.index', compact('products'));
}


    public function create()
{
    // Ambil semua kategori untuk ditampilkan di dropdown
    $categories = Category::all();

    return view('products.create', compact('categories'));
}


    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'price' => 'required',
        ]);

        // Simpan produk baru
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,  // Menambahkan deskripsi
            'price' => $request->price
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }
}
