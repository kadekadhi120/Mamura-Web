<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function store(Request $request)
{
    // Validasi data input
    $request->validate([
        'Nama' => 'required|string|max:255',
        'Deskripsi' => 'nullable|string',
        'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle file upload (if Foto is uploaded)
    if ($request->hasFile('Foto')) {
        $image = $request->file('Foto');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'images/categories/' . $imageName;
        $image->move(public_path('images/categories'), $imageName);
    } else {
        // Default image if no Foto uploaded
        $imagePath = 'images/default.jpg';
    }

    // Create new category instance
    $category = new Categories();
    $category->Nama = $request->input('Nama');
    $category->Deskripsi = $request->input('Deskripsi');
    $category->Foto = $imagePath; // Save image path
    $category->save();

    // Redirect after successful save
    return redirect('/home')->with('success', 'Kategori berhasil ditambahkan!');
}

    
}
