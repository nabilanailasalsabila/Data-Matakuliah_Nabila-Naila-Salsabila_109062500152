
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
</head>
<body>

    <h2>Tambah Mata Kuliah</h2>

    <form action="index.php?page=matakuliah&action=store" method="POST">
        <label for="kode_mk">Kode Mata Kuliah</label><br>
        <input type="text" id="kode_mk" name="kode_mk" required>
        <br><br>

        <label for="nama_mk">Nama Mata Kuliah</label><br>
        <input type="text" id="nama_mk" name="nama_mk" required>
        <br><br>

        <label for="sks">SKS</label><br>
        <input type="number" id="sks" name="sks" min="1" required>
        <br><br>

        <label for="semester">Semester</label><br>
        <input type="number" id="semester" name="semester" min="1" required>
        <br><br>

        <label for="dosen_pengampu">Dosen Pengampu</label><br>
        <input type="text" id="dosen_pengampu" name="dosen_pengampu" required>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=matakuliah">Kembali</a>
    </form>

</body>
</html>
