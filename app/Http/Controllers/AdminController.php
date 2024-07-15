<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Makanan;
use App\Models\Snack;
use App\Models\Kopi;
use App\Models\Wedangan;
use App\Models\Jus;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    // Fungsi Pengelolaan Makanan

    public function makananIndex()
    {
        $makanans = Makanan::all();
        return view('admin.menu.makanan', compact('makanans'));
    }

    public function makananCreate()
    {
        return view('admin.menu.create');
    }

    public function makananStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $makanan = new Makanan();
        $makanan->nama = $request->nama;
        $makanan->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $makanan->gambar = $imageName;
        }
        $makanan->harga = $request->harga;
        $makanan->save();

        return redirect()->route('admin.makanan.index')->with('success', 'Makanan berhasil ditambahkan.');
    }

    public function makananEdit($id)
    {
        $makanan = Makanan::find($id);
        return view('admin.menu.editmakanan', compact('makanan'));
    }

    public function makananUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $makanan = Makanan::find($id);
        $makanan->nama = $request->nama;
        $makanan->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $makanan->gambar = $imageName;
        }
        $makanan->harga = $request->harga;
        $makanan->save();

        return redirect()->route('admin.makanan.index')->with('success', 'Makanan berhasil diupdate.');
    }

    public function makananDestroy($id)
    {
        $makanan = Makanan::find($id);
        if ($makanan) {
            $makanan->delete();
            return redirect()->route('admin.makanan.index')->with('success', 'Makanan berhasil dihapus.');
        } else {
            return redirect()->route('admin.makanan.index')->with('error', 'Makanan tidak ditemukan.');
        }
    }

    // Fungsi Pengelolaan Snack

    public function snackIndex()
    {
        $snacks = Snack::all();
        return view('admin.menu-snack.snack', compact('snacks'));
    }

    public function snackCreate()
    {
        return view('admin.menu-snack.create');
    }

    public function snackStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $snack = new Snack();
        $snack->nama = $request->nama;
        $snack->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $snack->gambar = $imageName;
        }
        $snack->harga = $request->harga;
        $snack->save();

        return redirect()->route('admin.snack.index')->with('success', 'Snack berhasil ditambahkan.');
    }

    public function snackEdit($id)
    {
        $snack = Snack::find($id);
        return view('admin.menu-snack.editsnack', compact('snack'));
    }

    public function snackUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $snack = Snack::find($id);
        $snack->nama = $request->nama;
        $snack->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $snack->gambar = $imageName;
        }
        $snack->harga = $request->harga;
        $snack->save();

        return redirect()->route('admin.snack.index')->with('success', 'Snack berhasil diupdate.');
    }

    public function snackDestroy($id)
    {
        $snack = Snack::find($id);
        if ($snack) {
            $snack->delete();
            return redirect()->route('admin.snack.index')->with('success', 'Snack berhasil dihapus.');
        } else {
            return redirect()->route('admin.snack.index')->with('error', 'Snack tidak ditemukan.');
        }
    }

    // Fungsi Pengelolaan Kopi
    public function kopiIndex()
    {
        $kopis = Kopi::all();
        return view('admin.menu-kopi.kopi', compact('kopis'));
    }

    // Menampilkan form tambah kopi
    public function kopiCreate()
    {
        return view('admin.menu-kopi.create');
    }

    // Menyimpan kopi baru
    public function kopiStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $kopi = new Kopi();
        $kopi->nama = $request->nama;
        $kopi->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $kopi->gambar = $imageName;
        }
        $kopi->harga = $request->harga;
        $kopi->save();

        return redirect()->route('admin.kopi.index')->with('success', 'Kopi berhasil ditambahkan.');
    }

    // Menampilkan form edit kopi
    public function kopiEdit($id)
    {
        $kopi = Kopi::find($id);
        return view('admin.menu-kopi.editkopi', compact('kopi'));
    }

    // Mengupdate data kopi
    public function kopiUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $kopi = Kopi::find($id);
        $kopi->nama = $request->nama;
        $kopi->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $kopi->gambar = $imageName;
        }
        $kopi->harga = $request->harga;
        $kopi->save();

        return redirect()->route('admin.kopi.index')->with('success', 'Kopi berhasil diupdate.');
    }

    // Menghapus kopi
    public function kopiDestroy($id)
    {
        $kopi = Kopi::find($id);
        if ($kopi) {
            $kopi->delete();
            return redirect()->route('admin.kopi.index')->with('success', 'Kopi berhasil dihapus.');
        } else {
            return redirect()->route('admin.kopi.index')->with('error', 'Kopi tidak ditemukan.');
        }
    }

    // Fungsi Pengelolaan Wedangan
    public function wedanganIndex()
    {
        $wedangans = Wedangan::all();
        return view('admin.menu-wedangan.wedangan', compact('wedangans'));
    }

    // Menampilkan form tambah wedangan
    public function wedanganCreate()
    {
        return view('admin.menu-wedangan.create');
    }

    // Menyimpan wedangan baru
    public function wedanganStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $wedangan = new wedangan();
        $wedangan->nama = $request->nama;
        $wedangan->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $wedangan->gambar = $imageName;
        }
        $wedangan->harga = $request->harga;
        $wedangan->save();

        return redirect()->route('admin.wedangan.index')->with('success', 'wedangan berhasil ditambahkan.');
    }

    // Menampilkan form edit wedangan
    public function wedanganEdit($id)
    {
        $wedangan = wedangan::find($id);
        return view('admin.menu-wedangan.editwedangan', compact('wedangan'));
    }

    // Mengupdate data wedangan
    public function wedanganUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $wedangan = Wedangan::find($id);
        $wedangan->nama = $request->nama;
        $wedangan->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $wedangan->gambar = $imageName;
        }
        $wedangan->harga = $request->harga;
        $wedangan->save();

        return redirect()->route('admin.wedangan.index')->with('success', 'wedangan berhasil diupdate.');
    }

    // Menghapus wedangan
    public function wedanganDestroy($id)
    {
        $wedangan = Wedangan::find($id);
        if ($wedangan) {
            $wedangan->delete();
            return redirect()->route('admin.wedangan.index')->with('success', 'wedangan berhasil dihapus.');
        } else {
            return redirect()->route('admin.wedangan.index')->with('error', 'wedangan tidak ditemukan.');
        }
    }

    // Fungsi Pengelolaan Jus
    public function jusIndex()
    {
        $juss = Jus::all();
        return view('admin.menu-jus.jus', compact('juss'));
    }

    // Menampilkan form tambah jus
    public function jusCreate()
    {
        return view('admin.menu-jus.create');
    }

    // Menyimpan jus baru
    public function jusStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $jus = new jus();
        $jus->nama = $request->nama;
        $jus->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $jus->gambar = $imageName;
        }
        $jus->harga = $request->harga;
        $jus->save();

        return redirect()->route('admin.jus.index')->with('success', 'jus berhasil ditambahkan.');
    }

    // Menampilkan form edit jus
    public function jusEdit($id)
    {
        $jus = jus::find($id);
        return view('admin.menu-jus.editjus', compact('jus'));
    }

    // Mengupdate data jus
    public function jusUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $jus = Jus::find($id);
        $jus->nama = $request->nama;
        $jus->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $jus->gambar = $imageName;
        }
        $jus->harga = $request->harga;
        $jus->save();

        return redirect()->route('admin.jus.index')->with('success', 'jus berhasil diupdate.');
    }

    // Menghapus jus
    public function jusDestroy($id)
    {
        $jus = Jus::find($id);
        if ($jus) {
            $jus->delete();
            return redirect()->route('admin.jus.index')->with('success', 'jus berhasil dihapus.');
        } else {
            return redirect()->route('admin.jus.index')->with('error', 'jus tidak ditemukan.');
        }
    }
}
