<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('Matakuliah/proses'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Mahasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nim" id="nim" placeholder="Input NIM">
                    </td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Input Nama Mahasiswa">
                    </td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>:</td>
                    <td>
                        <select name="prodi" id="prodi">
                            <option value="">Pilih Program Studi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Proses">
                        <input type="Reset" value="Cancel">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>