<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AkunModel;
use App\Models\TanyaFTModel;

class views extends Controller
{
    public function index()
    {
        echo view('dashboard');
    }

    public function preview($id_tanyaft)
    {
        $TanyaFT = new TanyaFTModel();
        $data['TanyaFT'] = $TanyaFT->where('id_tanyaft', $id_tanyaft)->first();
        echo view('detail-pengajuan', $data);
    }

    public function tanggapan($id_tanyaft)
    {
        $TanyaFT = new TanyaFTModel();
        $data['TanyaFT'] = $TanyaFT->where('id_tanyaft', $id_tanyaft)->first();
        echo view('tanggapan', $data);
    }
    public function e_response()
    {
        echo view('e-response');
    }

    public function tanya_ft()
    {
        $tanyaFModel = new TanyaFTModel(); // Assuming TanyaF is your model for submissions
        $data['pengajuan'] = $tanyaFModel->findAll(); // Fetch all submissions
        echo view('tanya-ft', $data); // Pass the data to the view 'tanya-ft.php'
    }


    public function save()
    {
        $session = session();
        $dataModel = new TanyaFTModel();

        $rules = [
            'nama_lengkap' => 'required|string',
            'nim' => 'required|string',
            'prodi' => 'required|string',
            'no_handphone' => 'required|string',
            'pertanyaan' => 'required|string',
            'file_berkas' => 'uploaded[file_berkas]|max_size[file_berkas,2048]|ext_in[file_berkas,pdf,doc,png,jpeg]'
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('file_berkas');
        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('./upload/image');
        }

        $dataModel->save([
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'nim' => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('prodi'),
            'no_handphone' => $this->request->getPost('no_handphone'),
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'file_berkas' => $fileName
        ]);
        $session->setFlashdata('msg', 'Data Berhasil Ditambahkan');

        return redirect('tanyaft');
    }
    public function create()
    {
        return view('tanya-ft');
    }
    public function form()
    {
        return view('form_pengajuan');

    }
}