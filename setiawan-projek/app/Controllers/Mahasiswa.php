<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        return view('input_data');
    }

    public function submit_data()
    {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $statusKelulusan = $this->request->getPost('status_kelulusan');
 
        return view('status_kelulusan', [
            'nim' => $nim,
            'nama' => $nama,
            'statusKelulusan' => $statusKelulusan
        ]);
    }
}
