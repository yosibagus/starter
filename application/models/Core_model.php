<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Core_model extends CI_Model
{
    public function getMenu($id = null)
    {
        if (empty($id)) {
            $query =  $this->db->get('master_menu');
        } else {
            $this->db->select('*');
            $this->db->from('master_kategori');
            $this->db->join('master_menu', 'master_menu.id_menu = master_kategori.id_menu', 'left');
            $this->db->where('id_kategori', $id);
            $query = $this->db->get();
            // $query = $this->db->get_where('master_kategori', ['id_kategori' => $id]);
        }
        return $query;
    }

    public function addKategori($data)
    {
        $this->db->insert('master_kategori', $data);
    }

    public function updateKategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('master_kategori', $data);
    }

    public function generateKode()
    {
        $data = $this->db->query("SELECT max(id_kategori) as kategoriMax from master_kategori")->row_array();

        $kode = $this->db->query("SELECT kode from master_kategori where id_kategori = '$data[kategoriMax]'")->row_array();
        $kodemax = substr($kode['kode'], 1);
        return "M" . $kodemax + 1;
    }

    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('master_kategori');
        $this->db->join('master_menu', 'master_menu.id_menu = master_kategori.id_menu', 'left');
        $this->db->order_by('tgl_create', 'desc');
        return $this->db->get();
    }

    public function getDetailKategori($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->get('master_kategori');
    }

    public function getAllSingleBlog()
    {
        return $this->db->get('master_blog');
    }

    public function getListDetailKategori($id)
    {
        $this->db->select('*');
        $this->db->from('master_informasi');
        $this->db->where('id_kategori', $id);
        $this->db->order_by('tgl_informasi', 'desc');
        return $this->db->get();
    }

    public function getDetailInformasi($token)
    {
        $this->db->select('*');
        $this->db->from('master_informasi');
        $this->db->join('master_kategori', 'master_kategori.id_kategori = master_informasi.id_kategori', 'left');
        $this->db->where('master_informasi.token_informasi', $token);
        return $this->db->get();
    }
}


/* End of file Core_model.php and path \application\models\Core_model.php */
