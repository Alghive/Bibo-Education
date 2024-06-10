<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class Users extends BaseController
{
    protected $matkulModel;
    public function __construct()
    {
        $this->matkulModel = new MatkulModel();
    }
    public function e_learning() //: string
    {
        // $matkul = $this->matkulModel->findAll();

        $data = [
            "title" => "E_Learning",
            "matkul" => $this->matkulModel->getMatkul()
        ];




        return view('users/e_learning', $data);

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

        return view("matkul/detail", $data);
    }
}
