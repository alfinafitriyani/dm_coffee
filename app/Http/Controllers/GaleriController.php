<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    // Fungsi Pengelolaan Snack

    public function galeriIndex()
    {
        $galeris = galeri::all();
        return view('admin.galeri.galeri', compact('galeris'));
    }

    public function galeriCreate()
    {
        return view('admin.galeri.create');
    }

    public function galeriStore(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $galeri = new Galeri();
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $galeri->gambar = $imageName;
        }
        $galeri->save();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function galeriEdit($id)
    {
        $galeri = Galeri::find($id);
        return view('admin.galeri.editgaleri', compact('galeri'));
    }

    public function galeriUpdate(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $galeri = Galeri::find($id);
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $galeri->gambar = $imageName;
        }
        $galeri->save();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diupdate.');
    }

    public function galeriDestroy($id)
    {
        $galeri = Galeri::find($id);
        if ($galeri) {
            $galeri->delete();
            return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus.');
        } else {
            return redirect()->route('admin.galeri.index')->with('error', 'Galeri tidak ditemukan.');
        }
    }
}
