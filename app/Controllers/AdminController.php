<?php
namespace App\Controllers;

class AdminController extends BaseController 
{
    public function index()
    {
        $data = array();
        $data['main_content'] = view('admin/admindashboard');
        return view('admin/main/main_content',$data);
    }

    public function test()
    {
        return view('index');
    }


    public function looping()
    {
        $data = array();
        $data['main_content'] = view('admin/main/tests');
        return view('admin/main/main_content',$data);
    }
    
}

