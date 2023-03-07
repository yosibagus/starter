<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'mauth');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login_req()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (empty($username) || empty($password)) {
            $array = ['error' => 'kosong'];
        } else {
            $cek = $this->mauth->login_validation($username, $password)->num_rows();
            if ($cek > 0) {
                $data = $this->mauth->login_validation($username, $password)->row_array();
                $array = array(
                    'id_akses' => $data['id_akses'],
                    'username' => $data['username'],
                    'password' => $data['password_akses'],
                    'role' => $data['level_akses']
                );
                $this->session->set_userdata($array);
            } else {
                $array = ['error' => 'tidak_ada'];
            }
        }
        echo json_encode($array);
    }

    public function logout()
    {
        $this->session->unset_userdata('id_akses');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('role');
        redirect('auth');
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */
