<?php 
namespace App\Models;
use CodeIgniter\Model;
     
    class UserModel extends Model{
        protected $table = 'tbl_users';
        protected $allowedFields = ['username','password','email','level','uniqueid'];

        public function getUser()
        {
            return $this->findAll();
        }
}