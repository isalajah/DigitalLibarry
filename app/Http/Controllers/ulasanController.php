<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ulasanController extends Controller
{
    public function index() {
        $ulasan = DB::table('ulasan_buku')->select('*')->get();
        return view('ulasan.index', ['ulasan' => $ulasan]);
    }

    public function create() {
        $buku = DB::table('tb_buku')->get();
        $user = DB::table('users')->get();
        return view('ulasan.create', ['buku' => $buku, 'user' => $user]);
    }

    public function store(Request $request) {
        $this->validate($request, [
           'ulasan' => 'required',
           'rating' => 'required'
        ]);

        DB::table('ulasan_buku')->insert([
            // 'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating
        ]);

        return redirect()->route('ulasan.index');
    }

    public function edit($id) {
        $ulasan = DB::table('ulasan_buku')->find($id);
        $buku = DB::table('tb_buku')->get();
        $user = DB::table('users')->get();
        return view('ulasan.edit', ['ulasan', 'buku', 'user' => $ulasan, $buku, $user]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'ulasan' => 'required',
            'rating' => 'required'
         ]);

         $buku = DB::table('tb_buku')
        ->where('id', $id)
        ->update([ 
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating
        ]);

        return redirect()->route('ulasan.index');
    }

    public function destroy($id) {
        DB::table('ulasan_buku')->where('id', $id)->delete();
        return redirect()->route('ulasan.index');
    }
}
