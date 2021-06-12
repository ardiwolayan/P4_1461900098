<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
            <th>Jenis</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rak_buku as $user)
        <tr>
            <td>{{ $user->id_buku }}</td>
            <td>{{ $user->judul }}</td>
            <td>{{ $user->tahun_terbit }}</td>
            <td>{{ $user->jenis }}</td>

        </tr>
        @endforeach
    </tbody>
</table>