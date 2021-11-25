<?php 
namespace App\Models;
use CodeIgniter\Model;
     
    class UserModel extends Model{
        protected $table = 'tbl_users';
        protected $table2 = 'tbl_user_level';
        protected $allowedFields = ['username','password','email','level','uniqueid'];
        protected $allowedFields2 = ['level'];

        public function getUser()
        {
            // return $this->findAll();
            return $this->select('*');
            return $this->join('tbl_user_level','tbl_user_level.id = tbl_users.level');
        }
}