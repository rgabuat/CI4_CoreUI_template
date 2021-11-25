<?php
namespace App\Controllers;


class UserController extends BaseController 
{
    
    public function index()
    {
        return view('admin/main/main_content');
    }

    public function looping()
    {
        $data = array();
        $data['main_content'] = view('admin/main/tests');
        return view('admin/main/main_content',$data);
    }
    
}

