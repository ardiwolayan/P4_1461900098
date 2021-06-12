<?php

namespace App\Exports;

use App\User;

use Illuminate\support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;



class UsersExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): view
    {
        $rak_buku = DB::table('rak_buku')->select('id_buku', 'judul', 'tahun_terbit', 'jenis')->join('jenis_buku', 'id_jenis_buku', '=', 'jenis_buku.id')->join('buku', 'id_buku', '=', 'buku.id')->get();

        return view('0098tabel', ['rak_buku' => $rak_buku]);
    }
}



class InvoicesExport implements FromView
{
    public function view(): View
    {
        return view('exports.invoices', [
            'invoices' => Invoice::all()
        ]);
    }
}
