<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getKategori($id = null)
    {
        if ($id == "") {
            $this->db->where('id_menu', 3);
            return $this->db->get('master_kategori');
        } else {
            return $this->db->get_where('master_kategori', ['id_kategori' => $id]);
        }
    }

    public function getAllDokumen()
    {
        return $this->db->query("SELECT master_informasi.file_informasi, master_informasi.deskripsi_informasi from master_informasi join master_kategori on master_kategori.id_kategori = master_informasi.id_kategori where master_kategori.id_menu = '4' and master_informasi.file_informasi != ''");
    }

    public function getJumlahStackholder($id)
    {
        return $this->db->query("SELECT sum(deskripsi_informasi) as jumlahStack from master_informasi where id_kategori = '$id'");
    }

    public function kategoriNonInformasi()
    {
        return $this->db->query("SELECT * FROM master_kategori where master_kategori.url != 'informasi'");
    }

    public function getSingleBlog($id)
    {
        return $this->db->get_where('master_blog', ['id_blog' => $id]);
    }

    public function getStrukturOrganisasi()
    {
        return $this->db->query("SELECT * FROM master_dosen where jabatan != 'Dosen' and jabatan != 'Asisten Dosen'");
    }

    public function getDosen()
    {
        return $this->db->query("SELECT * FROM master_dosen where jabatan != 'Dekan FST'");
    }

    public function getDetailKategori($id)
    {
        return $this->db->get_where('master_kategori', ['kode_kategori' => $id]);
    }

    public function getListInformasi($kode_kategori)
    {
        $this->db->select('*');
        $this->db->from('master_kategori');
        $this->db->join('master_informasi', 'master_kategori.id_kategori = master_informasi.id_kategori', 'left');
        $this->db->where('master_informasi.id_kategori', $kode_kategori);
        $this->db->where('master_informasi.status_informasi', 1);
        $this->db->order_by('master_informasi.tgl_informasi', 'desc');
        return $this->db->get();
    }

    public function getListInformasiLimit($id, $limit)
    {
        $this->db->select('*');
        $this->db->from('master_kategori');
        $this->db->join('master_informasi', 'master_kategori.id_kategori = master_informasi.id_kategori', 'left');
        $this->db->where('master_informasi.id_kategori', $id);
        $this->db->order_by('master_informasi.tgl_informasi', 'desc');
        $this->db->limit($limit);
        return $this->db->get();
    }

    public function informasiDetail($token)
    {
        return $this->db->get_where('master_informasi', ['token_informasi' => $token]);
    }

    public function last_post($limit)
    {
        $this->db->select('*');
        $this->db->from('master_informasi');
        $this->db->limit($limit);
        $this->db->order_by('tgl_informasi', 'desc');
        return $this->db->get();
    }
}


/* End of file User_model.php and path \application\models\User_model.php */
