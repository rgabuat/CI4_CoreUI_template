<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class RegisterController extends BaseController 
{
    
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
  
    public function store()
    {
        helper(['form','url']);
        $rules =  [
            'username'          => 'required|min_length[2]|max_length[50]|is_unique[tbl_users.username]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[tbl_users.email,]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];

        if($this->validate($rules)){
            $TempUserModel = new TempUserModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $TempUserModel->save($data);
            return redirect()->to('./signup');
        }
        else{
            $data['validation'] = $this->validator;
            echo view('./signup', $data);
        }
          
    }
    
}