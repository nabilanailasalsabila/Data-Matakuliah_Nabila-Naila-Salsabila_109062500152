
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
</head>
<body>

    <h2>Edit Mata Kuliah</h2>

    <form action="index.php?page=matakuliah&action=update" method="POST">
        <input type="hidden" name="id"
               value="<?= (int) $matakuliah['id'] ?>">

        <label for="kode_mk">Kode Mata Kuliah</label><br>
        <input type="text" id="kode_mk" name="kode_mk"
               value="<?= htmlspecialchars($matakuliah['kode_mk']) ?>"
               required>
        <br><br>

        <label for="nama_mk">Nama Mata Kuliah</label><br>
        <input type="text" id="nama_mk" name="nama_mk"
               value="<?= htmlspecialchars($matakuliah['nama_mk']) ?>"
               required>
        <br><br>

        <label for="sks">SKS</label><br>
        <input type="number" id="sks" name="sks" min="1"
               value="<?= (int) $matakuliah['sks'] ?>"
               required>
        <br><br>

        <label for="semester">Semester</label><br>
        <input type="number" id="semester" name="semester" min="1"
               value="<?= (int) $matakuliah['semester'] ?>"
               required>
        <br><br>

        <label for="dosen_pengampu">Dosen Pengampu</label><br>
        <input type="text" id="dosen_pengampu" name="dosen_pengampu"
               value="<?= htmlspecialchars($matakuliah['dosen_pengampu']) ?>"
               required>
        <br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=matakuliah">Kembali</a>
    </form>

</body>
</html>
