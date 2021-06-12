@extends('0098layout')
@section('content')

<div>
    <main role="main" class="flex-shrink0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Export Excel</h1>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center" scope="col">Id</th>
                                            <th class="text-center" scope="col">Judul</th>
                                            <th class="text-center" scope="col">Tahun Terbit</th>
                                            <th class="text-center" scope="col">Jenis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- kode_buku kode_kategori kode_penerbit judul_buku jumlah_buku pengarang_buku tahun_terbit_buku -->
                                        @foreach($rak_buku as $p)
                                        <tr>
                                            <td class="text-center">{{$p->id_buku}}</td>
                                            <td class="text-center">{{$p->judul}}</td>
                                            <td class="text-center">{{$p->tahun_terbit}}</td>
                                            <td class="text-center">{{$p->jenis}}</td>
                                            @endforeach
                                            <div>
                                                Filter
                                            </div>
                                            <a href="0098index">All</a>
                                            <a href="0098filter1"> Teknologi</a>
                                            <a href="0098filter2"> Sejarah</a>
                                            <br>
                                            <br>
                                            <a href="users/export/">Excel</a>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <ul>

    </ul>

</div>
@stop