<?php

namespace App\Http\Controllers;


use Illuminate\support\Facades\DB;


use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class BukuController extends Controller
{
    public function index()
    {
        $rak_buku = DB::table('rak_buku')->select('id_buku', 'judul', 'tahun_terbit', 'jenis')->join('jenis_buku', 'id_jenis_buku', '=', 'jenis_buku.id')->join('buku', 'id_buku', '=', 'buku.id')->get();
        return view('0098index', ['rak_buku' => $rak_buku]);
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function filter1()
    {
        $rak_buku = DB::table('rak_buku')->select('id_buku', 'judul', 'tahun_terbit', 'jenis')->join('jenis_buku', 'id_jenis_buku', '=', 'jenis_buku.id')->join('buku', 'id_buku', '=', 'buku.id')->where('jenis', 'Teknologi')->get();
        return view('0098index', ['rak_buku' => $rak_buku]);
    }
    public function filter2()
    {
        $rak_buku = DB::table('rak_buku')->select('id_buku', 'judul', 'tahun_terbit', 'jenis')->join('jenis_buku', 'id_jenis_buku', '=', 'jenis_buku.id')->join('buku', 'id_buku', '=', 'buku.id')->where('jenis', 'Sejarah')->get();
        return view('0098index', ['rak_buku' => $rak_buku]);
    }
}
