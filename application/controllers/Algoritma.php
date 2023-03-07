<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Algoritma extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $id = $this->session->userdata('id_akses');
        if (empty($id)) {
            redirect('auth');
        }
        $this->load->model('Core_model', 'mcore');
    }

    public function index()
    {
        $data['menu'] = $this->db->get('master_menu')->result_array();
        $this->load->view('template/template', $data);
    }

    public function home()
    {
        $this->load->view('admin/home/home');
    }

    public function kategori()
    {
        $this->load->view('admin/kategori/kategori');
    }

    public function menu()
    {
        $data['menu'] = $this->mcore->getMenu()->result_array();
        $this->load->view('admin/menu/menu_list', $data);
    }

    public function menu_tambah()
    {
        $this->load->view('admin/menu/menu_tambah');
    }

    public function kategori_tambah()
    {
        $data['menu'] = $this->mcore->getMenu()->result_array();
        $this->load->view('admin/kategori/kategori_tambah', $data);
    }

    public function detail_kategori($id)
    {
        $data['data'] = $this->mcore->getMenu($id)->row_array();
        $this->load->view('admin/kategori/kategori_detail', $data);
    }

    public function kategori_edit($id)
    {
        $data['data'] = $this->mcore->getMenu($id)->row_array();
        $data['menu'] = $this->mcore->getMenu()->result_array();
        $this->load->view('admin/kategori/kategori_edit', $data);
    }

    public function informasi_tambah($id)
    {
        $data['data'] = $this->db->get_where('master_kategori', ['kode_kategori' => $id])->row_array();
        $this->load->view('admin/kategori/informasi_tambah', $data);
    }

    public function informasi_detail($token)
    {
        $data['detail'] = $this->mcore->getDetailInformasi($token)->row_array();
        $this->load->view('admin/kategori/informasi_edit', $data);
    }

    public function dosen()
    {
        $this->load->view('admin/dosen/dosen_list');
    }

    public function dosen_tambah()
    {
        $this->load->view('admin/dosen/dosen_tambah');
    }

    public function dosen_edit($id)
    {
        $data['dosen'] = $this->db->get_where('master_dosen', ['id_dosen' => $id])->row_array();
        $this->load->view('admin/dosen/dosen_edit', $data);
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
