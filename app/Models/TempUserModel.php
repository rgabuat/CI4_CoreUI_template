<?php 
namespace App\Models;
use CodeIgniter\Model;
     
    class TempUserModel extends Model{
        protected $table = 'tbl_new_registration';
        protected $allowedFields = ['user','pass','email','status'];

        public function getUser()
        {
            return $this->findAll();
            // return $this->select('*');
            // return $this->join('tbl_user_level','tbl_user_level.id = tbl_users.level');
        }
}