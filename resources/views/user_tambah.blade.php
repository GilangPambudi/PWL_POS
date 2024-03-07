<!DOCTYPE html>
<html>
    <head>
        <title>Tambah User</title>
    </head>
    <body>
        <h1>Form Tambah Data User</h1>
        <form action="tambah_simpan" method="post">
            {{ csrf_field() }}
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