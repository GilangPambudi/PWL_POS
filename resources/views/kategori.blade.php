<!DOCTYPE html>
<html>
    <head>
        <title>Data Kategori Barang</title>
    </head>
    <body>
        <h1>Data Kategori Barang</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @forelse ($data as $d)
                <tr>
                    <td>{{ $d->kategori_id }}</td>
                    <td>{{ $d->kategori_kode }}</td>
                    <td>{{ $d->kategori_nama }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tidak ada data</td>
                </tr>
            @endforelse
        </table>
    </body>
</html>