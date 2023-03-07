<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login_validation($username, $password)
    {
        return $this->db->get_where('tb_akses', ['username' => $username, 'password_akses' => md5($password)]);
    }
}


/* End of file Auth_model.php and path \application\models\Auth_model.php */
