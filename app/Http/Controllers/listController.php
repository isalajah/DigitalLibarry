<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class listController extends Controller
{
    public function index() {
        $list = DB::table('tb_list')
        ->join('tb_buku', 'tb_list.buku_id', '=', 'tb_buku.id')
        ->select('tb_buku.image', 'tb_buku.judul', 'tb_list.id')
        ->get();
        return view('list.index', ['list' => $list]);
    }

    public function koleksi(Request $request) {

        $this->validate($request, [
            'buku_id' => 'required|numeric'
        ]);
        // $bukuExists = DB::table('nama_tabel_koleksi')
        //         ->where('buku_id', $request->buku_id)
        //         ->exists();

        // if ($bukuExists) {
        //      // Jika buku sudah ada, kirimkan pesan ke halaman
        //      return response()->json(['message' => 'Buku sudah ada dalam koleksi'], 422);
        // }   

        DB::table("tb_list")->insert([
            // 'user_id' => Auth::user()->id,
            'buku_id' => $request->buku_id,
            'created_at' => now()
        ]);

        return redirect()->route('pesan.pinjam', $request->buku_id);
    }

    public function destroy($id) {
        DB::table('tb_list')->where('id', $id)->delete();
        return redirect()->route('list.index');
    }
}
