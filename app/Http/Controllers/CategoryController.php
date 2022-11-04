<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('category.index', [
            'category' => $category
        ]);
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $input = $request->all();
        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $folderTujuan = 'uploads/';
            $namaFile = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path($folderTujuan), $namaFile);
            $input['gambar'] = $namaFile;
        }
        Category::create ($input);
        return redirect(route('category.index'));
    }
    public function delete($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return redirect(route('category.index'));
    }

    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('category.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        $category = category::find($id);
        if ($request->hasFile('gambar')) {
        @unlink(public_path('uploads/' . $category->gambar));
        $file = $request->file('gambar');
        $folderTujuan = 'uploads/';
        $namaFile = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path($folderTujuan), $namaFile);
        $input['gambar'] = $namaFile;
        }

        $category ->update($input);
        return redirect(route('category.index'));
        }
    }

