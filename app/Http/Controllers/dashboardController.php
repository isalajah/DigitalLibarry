<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class dashboardController extends Controller
{
    public function index() {
        if(Auth::user()->role == 'admin'){
            return view('admin.index');
        }elseif(Auth::user()->role == 'users'){
            return view('guest.index');
        }else{
            abort(404, 'Tampilan dengan Role'. Auth::user()->role . 'tidak ada');
        }
        
    }

    public function buku() {
        $buku = DB::table('tb_buku')->get();
        return view('guest.userBuku', ['buku' => $buku]);
    }

    public function user() {
        return view('guest.index');
    }
}
