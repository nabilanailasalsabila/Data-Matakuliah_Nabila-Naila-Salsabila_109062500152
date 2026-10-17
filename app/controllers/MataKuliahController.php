
<?php

class MataKuliahController
{
    public function __construct(private MataKuliah $model) {}

    public function index(): void
    {
        $matakuliah = $this->model->getAll();
        require __DIR__ . '/../views/matakuliah/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/matakuliah/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php?page=matakuliah');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $matakuliah = $this->model->findById($id);

        if (!$matakuliah) {
            http_response_code(404);
            exit('Data mata kuliah tidak ditemukan.');
        }

        require __DIR__ . '/../views/matakuliah/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);
        header('Location: index.php?page=matakuliah');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->delete($id);
        header('Location: index.php?page=matakuliah');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'kode_mk' => trim($input['kode_mk'] ?? ''),
            'nama_mk' => trim($input['nama_mk'] ?? ''),
            'sks' => trim((string) ($input['sks'] ?? '')),
            'semester' => trim((string) ($input['semester'] ?? '')),
            'dosen_pengampu' => trim($input['dosen_pengampu'] ?? '')
        ];

        if (
            $data['kode_mk'] === '' ||
            $data['nama_mk'] === '' ||
            $data['sks'] === '' ||
            $data['semester'] === '' ||
            $data['dosen_pengampu'] === ''
        ) {
            exit('Semua data mata kuliah wajib diisi.');
        }

        if (
            !ctype_digit($data['sks']) ||
            (int) $data['sks'] < 1 ||
            !ctype_digit($data['semester']) ||
            (int) $data['semester'] < 1
        ) {
            exit('SKS dan semester harus berupa bilangan bulat positif.');
        }

        $data['sks'] = (int) $data['sks'];
        $data['semester'] = (int) $data['semester'];

        return $data;
    }
}

?>
