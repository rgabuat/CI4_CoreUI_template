<?php

namespace App\Controllers;

class AccountsController extends BaseController
{
    public function index()
    {
        $data['main_content'] = view('admin/accounts');
        return view('admin/main/main_content',$data);
    }
}
