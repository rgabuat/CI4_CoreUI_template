<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends BaseController 
{
    
    public function index()
    {
        helper(['form']);
        return view('login');
    }

    public function loginAuth()
    {

        $session = session();
        $model = new UserModel();

        // $username = $this->request->getPost('username');
        // $password = $this->request->getPost('password');
        if ($this->request->getMethod() == 'get')
        {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
        
       
            $data = $model->where('username', $username)->first();

            if($data)
            {
                $pass = $data['password'];
                $verify_pass = password_verify($password, $pass);
                if($verify_pass)
                {
                    $ses_data = [
                        'username'       => $data['username'],
                        'email'          => $data['email'],
                        'isLoggedIn'     => TRUE
                    ];
                    $session->set($ses_data);
                    if(!$data['role'])
                        return redirect()->to('admin/main/main_content');
                    else    
                        return redirect()->to('admin/main/main_content');
                }
                else
                {
                    $session->setFlashdata('msg', 'Wrong Password');
                    return redirect()->to('./login');
                }
            }
            else
            {
                $session->setFlashdata('msg', 'Email not Found');
                return redirect()->to('./login');
            }

        }
       
        else
        {
        echo view('./login');
        }  
    }
}