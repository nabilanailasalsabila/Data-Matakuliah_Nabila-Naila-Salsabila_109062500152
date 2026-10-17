
<?php

class MataKuliah
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, kode_mk, nama_mk, sks, semester, dosen_pengampu
             FROM matakuliah ORDER BY nama_mk'
        );

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT id, kode_mk, nama_mk, sks, semester, dosen_pengampu
             FROM matakuliah WHERE id = :id'
        );

        $stmt->execute([':id' => $id]);

        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO matakuliah
                (kode_mk, nama_mk, sks, semester, dosen_pengampu)
                VALUES (:kode_mk, :nama_mk, :sks, :semester, :dosen_pengampu)';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':kode_mk' => $data['kode_mk'],
            ':nama_mk' => $data['nama_mk'],
            ':sks' => $data['sks'],
            ':semester' => $data['semester'],
            ':dosen_pengampu' => $data['dosen_pengampu']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE matakuliah
                SET kode_mk = :kode_mk,
                    nama_mk = :nama_mk,
                    sks = :sks,
                    semester = :semester,
                    dosen_pengampu = :dosen_pengampu
                WHERE id = :id';

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':kode_mk' => $data['kode_mk'],
            ':nama_mk' => $data['nama_mk'],
            ':sks' => $data['sks'],
            ':semester' => $data['semester'],
            ':dosen_pengampu' => $data['dosen_pengampu']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            'DELETE FROM matakuliah WHERE id = :id'
        );

        return $stmt->execute([':id' => $id]);
    }
}

?>
