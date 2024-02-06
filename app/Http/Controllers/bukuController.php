<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class bukuController extends Controller
{
    public function index() {
        $buku = DB::table('tb_buku')->select('*')->get();
        return view('buku.index', ['buku' => $buku]);
    }

    public function create() {
        $kategori = DB::table('tb_kategori')->get();
        return view('buku.create', ['kategori' => $kategori]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'penulis' => 'required',
            'penerbit' => 'required',
            'TahunTerbit' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $imageName = date('Y-m-d') . '_' . time() . '.' . $image->extension();
        
        // Simpan file gambar ke dalam direktori 'public/picture'
        $image->move(public_path('picture'), $imageName);
        
         DB::table('tb_buku')->insert([
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'judul' => $request->judul,
            'TahunTerbit' => $request->TahunTerbit,
            'kategori_id' => $request->kategori_id,
            'image' => $imageName
         ]);

         return redirect()->route('buku.index');
    }

    public function edit($id) {
            $buku = DB::table('tb_buku')->find($id);
            $kategori = DB::table('tb_kategori')->get();
            return view('buku.edit', ['buku' => $buku, 'kategori' => $kategori]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'penulis' => 'required',
            'penerbit' => 'required',
            'TahunTerbit' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $imageName = date('Y-m-d') . '_' . time() . '.' . $image->extension();
        
        // Simpan file gambar ke dalam direktori 'public/picture'
        $image->move(public_path('picture'), $imageName);

        $buku = DB::table('tb_buku')
        ->where('id', $id)
        ->update([  
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'judul' => $request->judul,
            'TahunTerbit' => $request->TahunTerbit,
            'kategori_id' => $request->kategori_id,
            'image' => $imageName
        ]);

        return redirect()->route('buku.index');
    }

    public function destroy($id) {
        DB::table('tb_buku')->where('id', $id)->delete();
        return redirect()->route('buku.index');
    }
}
