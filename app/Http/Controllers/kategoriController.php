<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class kategoriController extends Controller
{
    public function index() {
        $kategori = DB::table('tb_kategori')->select('*')->get();
        return view('kategori.index', compact('kategori'));
    }

    public function create() {
        return view('kategori.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'NamaKategori' => 'required'
        ]);

        DB::table('tb_kategori')->insert([
            'NamaKategori' => $request -> NamaKategori
        ]);

        return redirect()->route('kategori.index');
    }

    public function edit($id) {
        $kategori = DB::table('tb_kategori')->find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'NamaKategori' => 'required'
        ]);

        $buku = DB::table('tb_kategori')
        ->where('id', $id)
        ->update([
            'NamaKategori' => $request->NamaKategori
        ]);

        return redirect()->route('kategori.index');
    }

    public function destroy($id) {
        DB::table('tb_kategori')->where('id', $id)->delete();
        return redirect()->route('kategori.index');
    }

}
