@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Produk</h1>
        <a href="products/create" class="btn btn-primary">Tambah Produk</a>
      </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name ?? 'Tanpa Kategori' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
