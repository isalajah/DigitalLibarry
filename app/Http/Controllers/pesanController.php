<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class pesanController extends Controller
{
    public function pinjam($id) {
       
        $buku = DB::table('tb_buku')->where('id', $id)->first();
        return view('pesan.pinjam', ['buku' => $buku]);
    }
}
