<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AkunModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('registerft', $data);
    }
 
    public function save()
    {        helper(['form']);

        //set rules validation form
        // $rules = [
        //     'nama'          => 'required|min_length[3]|max_length[50]',
        //     'no_hanphone'   => 'required|min_length[10]|max_length[15]|numeric',
        //     'email'         => 'required|valid_email|min_length[6]|max_length[50]|is_unique[akun.email]',
        //     'masuk_sebagai' => 'required',
        //     'password'      => 'required|min_length[6]|max_length[200]',
        //     'confpassword'  => 'matches[password]'
        // ];
        
         
        $model = new AkunModel();
        $data = [
            'nama'          => $this->request->getVar('nama'),
            'no_hanphone'   => $this->request->getVar('no_hanphone'),
            'email'         => $this->request->getVar('email'),
            'masuk_sebagai' => $this->request->getVar('masuk_sebagai'),
            'password' => $this->request->getVar('password'),
            'confpassword' => $this->request->getVar('confpassword'),
        ];
        
        if ($model->save($data)) {
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('registerft', $data);
        }
         
    }
 
}