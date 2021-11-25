<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class AccountsController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data = array();
        $data['param'] = $model->where('status', '0')->findall();
        $data['main_content'] = view('admin/accounts',$data);
        return view('admin/main/main_content',$data);
    }
}
