<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class Matkul extends BaseController
{
    protected $matkulModel;
    public function __construct()
    {
        $this->matkulModel = new MatkulModel();
    }
    public function index() //: string
    {
        // $matkul = $this->matkulModel->findAll();

        $data = [
            "title" => "E_Learning",
            "matkul" => $this->matkulModel->getMatkul()
        ];




        return view('matkul/index', $data);

        //konek db tanpa model
        // $db = \Config\Database::connect();
        // $matkul = $db->query("SELECT*FROM matkul");
        // foreach ($matkul->getResultArray() as $row) {
        //     dd($row);
        // }

    }

    public function about() //: string
    {

        $data = [
            "title" => "About Bibo"
        ];

        return view('matkul/about', $data);
    }


    public function detail($id)
    {

        $data = [
            "title" => "Detail Course",
            "matkul" => $this->matkulModel->getMatkul($id)
        ];

        if (empty($data["matkul"])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul course ' . $id . ' tidak ditemukan');
        }
        return view("matkul/detail", $data);
    }

    public function create()
    {

        $data = [
            "title" => "Form Tambah Course",
            'validation' => \Config\Services::validation()
        ];

        return view('matkul/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[matkul.judul]',
                'errors' => [
                    'required' => '{field} course harus diisi.',
                    'is_unique' => '{field} course sudah terdaftar'
                ]
            ],
            'matakuliah' => [
                'rules' => 'required|is_unique[matkul.judul]',
                'errors' => [
                    'required' => '{field} course harus diisi.',
                    'is_unique' => '{field} course sudah terdaftar'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required|is_unique[matkul.judul]',
                'errors' => [
                    'required' => '{field} course harus diisi.',
                    'is_unique' => '{field} course sudah terdaftar'
                ]
            ],
            'tutor' => [
                'rules' => 'required|is_unique[matkul.judul]',
                'errors' => [
                    'required' => '{field} course harus diisi.',
                    'is_unique' => '{field} course sudah terdaftar'
                ]
            ],
            'sampul' => [
                'rules' => 'required|is_unique[matkul.judul]',
                'errors' => [
                    'required' => '{field} course harus diisi.',
                    'is_unique' => '{field} course sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->to('/matkul/create')->withInput()->with('validation', $validation);
        }
        $this->matkulModel->save([
            'judul' => $this->request->getVar('judul'),
            'matakuliah' => $this->request->getVar('matakuliah'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tutor' => $this->request->getVar('tutor'),
            'sampul' => $this->request->getVar('sampul'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/matkul/index');
    }

    public function delete($id)
    {
        $this->matkulModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to(base_url() . '/matkul');
    }

    public function edit($id)
    {
        $data = [
            "title" => "Form Ubah Course",
            'validation' => \Config\Services::validation(),
            'matkul' => $this->matkulModel->getMatkul($id)
        ];

        return view('matkul/edit', $data);
    }

    public function update($id)
    {

        $this->matkulModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'matakuliah' => $this->request->getVar('matakuliah'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tutor' => $this->request->getVar('tutor'),
            'sampul' => $this->request->getVar('sampul'),

        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/matkul/index');
    }
}
