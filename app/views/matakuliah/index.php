
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <h2>Daftar Mata Kuliah</h2>

    <a href="index.php?page=matakuliah&action=create">
        Tambah Data
    </a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Dosen Pengampu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matakuliah as $mk): ?>
                <tr>
                    <td><?= htmlspecialchars($mk['kode_mk']) ?></td>
                    <td><?= htmlspecialchars($mk['nama_mk']) ?></td>
                    <td><?= htmlspecialchars((string) $mk['sks']) ?></td>
                    <td><?= htmlspecialchars((string) $mk['semester']) ?></td>
                    <td><?= htmlspecialchars($mk['dosen_pengampu']) ?></td>
                    <td>
                        <a href="index.php?page=matakuliah&action=edit&id=<?= (int) $mk['id'] ?>">
                            Edit
                        </a>

                        <form action="index.php?page=matakuliah&action=delete"
                              method="POST"
                              style="display:inline;"
                              onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            <input type="hidden" name="id"
                                   value="<?= (int) $mk['id'] ?>">
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

            <?php if (empty($matakuliah)): ?>
                <tr>
                    <td colspan="6">Belum ada data mata kuliah.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
