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
        if ($this->request->getMethod() === 'post')
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
                        'isLoggedIn'     => TRUE,
                        'role'           => $data['level']
                    ];
                    print_r($ses_data);
                    $session->set($ses_data);
                    if($data['level'])
                    {
                        return redirect()->to('dashboard');
                    }
                    else 
                    {
                        return redirect()->to('register');
                    }
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

            $data['validation'] = $this->validator;
            echo view('./login');
        }  
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('./login');
    }
}