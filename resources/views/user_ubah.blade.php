<!DOCTYPE html>
<html>
    <head>
        <title>Ubah User</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="/PWL_POS/public/user"> Kembali</a>
        <form method="post" action="/PWL_POS/public/user/ubah_simpan/{{ $data->user_id}}" >
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Masukkan Username"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Masukkan Password"></td>
                </tr>
                <tr>
                    <td>ID Level Pengguna</td>
                    <td><input type="text" name="level_id" placeholder="Masukkan Level ID"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
    </body>
</html>