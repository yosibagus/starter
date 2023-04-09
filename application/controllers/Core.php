<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Core extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Core_model', 'mcore');
    }

    public function index()
    {
        echo "core aplikasi informatika";
    }

    public function data_menu()
    {
        $data = $this->mcore->getMenu()->result_array();
        $html = "";
        $i = 1;
        foreach ($data as $get) {
            $html .= "<tr>";
            $html .= "<td>" . $i++ . "</td>";
            $html .= "<td>" . $get['nama_menu'] . "</td>";
            $html .= "<td>" . $get['icon'] . "</td>";
            $html .= "<td>
            <a href='" . base_url('core/delete/') . "' class='badge bg-danger'><i class='fa fa-trash'></i></a>
            <a href='" . base_url('algoritma/#/dosen_edit/') . "' class='badge bg-info'><i class='fa fa-pencil'></i></a>
            </td>";
            $html .= "</tr>";
        }
        echo $html;
    }

    public function getKategoriMenu()
    {
        $data = $this->mcore->getKategori()->result_array();

        foreach ($data as $get) {
            echo '<li class="nav-item">
            <a class="nav-link" href="" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-text">' . $get['nama_kategori'] . '</span></div>
            </a>
        </li>';
        }
    }

    public function kategori_tambah()
    {
        $this->load->helper('string');
        $kode = random_string('md5');
        $kategori = $this->input->post('nama_kategori');
        $keterangan = $this->input->post('keterangan_kategori');
        $id_menu = $this->input->post('id_menu');
        $publish = $this->input->post('publish');
        $deskripsi_kategori = $this->input->post('deskripsi_kategori');
        $url = $this->input->post('url');
        $data = [
            'kode' => $this->mcore->generateKode(),
            'kode_kategori' => $kode,
            'nama_kategori' => $kategori,
            'keterangan_kategori' => $keterangan,
            'id_menu' => $id_menu,
            'url' => $url,
            'deskripsi_kategori' => $deskripsi_kategori,
            'status_kategori' => $publish
        ];

        $this->mcore->addKategori($data);
        echo json_encode(['Data Berhasil Disimpan']);
    }

    public function kategori_update()
    {
        $kategori = $this->input->post('nama_kategori');
        $keterangan = $this->input->post('keterangan_kategori');
        $id_menu = $this->input->post('id_menu');
        $publish = $this->input->post('publish');
        $deskripsi_kategori = $this->input->post('deskripsi_kategori');
        $url = $this->input->post('url');
        $data = [
            'nama_kategori' => $kategori,
            'keterangan_kategori' => $keterangan,
            'id_menu' => $id_menu,
            'url' => $url,
            'deskripsi_kategori' => $deskripsi_kategori,
            'status_kategori' => $publish
        ];
        $this->mcore->updateKategori($_POST['id_kategori'], $data);
        echo json_encode($data);
    }

    public function data_kategori()
    {
        $data = $this->mcore->getKategori()->result_array();
        $i = 1;
        foreach ($data as $get) {
            echo '<tr class="hover-actions-trigger btn-reveal-trigger position-static">
            <td class="fs--1 align-middle">
                ' . $i++ . '
            </td>
            <td class="fs--1 align-middle">
                ' . $get['kode'] . '
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:220px;">
                <a href="' . base_url('algoritma/#/detail_kategori/') . $get['id_kategori'] . "/" . $get['kode_kategori'] . '">' . $get['nama_kategori'] . '</a>
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:100px;">
                ' . $get['nama_menu'] . '
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;">
                ' . $get['url'] . '
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:50px;">
                Admin
            </td>
            <td class="time align-middle white-space-nowrap text-600 ps-4">' . $get['tgl_create'] . '</td>
            <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                <div class="position-relative">
                    <div class="hover-actions">
                    <a href="#/kategori_edit/' . $get['id_kategori'] . '" class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-edit"></span></a>
                    <button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button>
                    </div>
                </div>
                <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="' . base_url('algoritma/#/detail_kategori/') . $get['id_kategori'] . "/" . $get['kode_kategori'] . '">Tambah Sub Kategori</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                </div>
            </td>
            </tr>';
        }
    }

    public function informasi_tambah($id)
    {
        $config['upload_path']          = './assets/foto/informasi/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|docx|doc|xls';
        $config['max_width']            = 5024;
        $tgl = $this->input->post('tgl_informasi');

        $this->load->library('upload', $config);
        $this->load->helper('string');

        if (!$this->upload->do_upload('file_informasi')) {
            $data = array('error' => $this->upload->display_errors());
            $input = [
                'id_kategori' => $id,
                'token_informasi' => random_string('md5'),
                'status_informasi' => $this->input->post('status_informasi'),
                'judul_informasi' => $this->input->post('judul_informasi'),
                'deskripsi_informasi' => $this->input->post('deskripsi_informasi'),
                'tgl_informasi' => $tgl == '' ? date('d-m-y') : $tgl,
                'isi_informasi' => $this->input->post('informasi'),
                'file_informasi' => 'default.png',
                'tipefile_informasi' => 'png',
                'id_akses' => 1
            ];
        } else {
            $data = $this->upload->data();
            $input = [
                'token_informasi' => random_string('md5'),
                'id_kategori' => $id,
                'judul_informasi' => $this->input->post('judul_informasi'),
                'lokasi_informasi' => 'Uniba Madura',
                'deskripsi_informasi' => $this->input->post('deskripsi_informasi'),
                'isi_informasi' => $this->input->post('informasi'),
                'tgl_informasi' => $tgl == '' ? date('d-m-y') : $tgl,
                'id_akses' => 1,
                'status_informasi' => $this->input->post('status_informasi'),
                'file_informasi' => $data['file_name'],
                'tipefile_informasi' => $data['file_ext'],
            ];
        }

        $this->db->insert('master_informasi', $input);

        echo json_encode($input);
    }

    public function data_kategori_detail()
    {
        $id = $this->input->get('id');

        $data = $this->mcore->getListDetailKategori($id)->result_array();
        $i = 1;
        foreach ($data as $get) {
            $status = $get['status_informasi'] == 1 ? "Aktif" : "Non Aktif";
            echo '<tr class="hover-actions-trigger btn-reveal-trigger position-static">
            <td class="fs--1 align-middle">
                ' . $i++ . '
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;">
                <a href="' . base_url('algoritma/#/informasi_detail/') . $get['token_informasi'] . '">' . $get['judul_informasi'] . '</a>
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;">
                ' . $get['deskripsi_informasi'] . '
            </td>
            <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;">
                Admin
            </td>
            <td class="time align-middle white-space-nowrap text-600 ps-4"><a target="blank" href="' . base_url('assets/foto/informasi/') . $get['file_informasi'] . '">' . $get['file_informasi'] . '</a></td>
            <td class="time align-middle white-space-nowrap text-600 ps-4">' . $get['tgl_informasi'] . '</td>
            <td class="time align-middle white-space-nowrap text-600 ps-4">' . $status . '</td>
            <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                <div class="position-relative">
                    <div class="hover-actions">
                    <a href="' . base_url('core/delete_informasi/') . $get['id_informasi'] . '" class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></a></div>
                </div>
                <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                    <a class="dropdown-item" href="' . base_url('algoritma/#/informasi_detail/') . $get['token_informasi']  . '">Detail</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                </div>
            </td>
            </tr>';
        }
        // <button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button>
    }

    public function delete_informasi($id)
    {
        $this->db->where('id_informasi', $id);
        $this->db->delete('master_informasi');
        echo "<script>window.history.go(-1);</script>";
    }

    public function setup_data($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    public function setdata()
    {
        $data = $this->setup_data("https://unibamadura.ac.id/algoritma");

        $rest = json_decode($data, true);
        $this->load->helper('string');

        foreach ($rest['data'] as $get) {
            $result[] = [
                'token_informasi' => random_string('md5'),
                'id_kategori' => 19,
                'judul_informasi' => $get['judul_informasi'],
                'lokasi_informasi' => "UNIBA MADURA",
                'deskripsi_informasi' => $get['deskripsi_informasi'],
                'isi_informasi' => $get['isi_informasi'],
                'tgl_informasi' => $get['tgl_informasi'],
                'id_akses' => 1,
                'status_informasi' => 1,
                'file_informasi' => 'default.png',
                'tipefile_informasi' => '.png'
            ];
        }

        echo json_encode($result);
        // $this->db->bat('master_informasi', $result);
        $this->db->insert_batch('master_informasi', $result);
    }

    public function upload_image()
    {
        $file = $_FILES['upload']['tmp_name'];
        $file_name = $_FILES['upload']['name'];
        $file_name_array = explode(".", $file_name);
        $extension = end($file_name_array);
        $new_image_name = rand() . '.' . $extension;
        chmod('./assets/upload/', 0777);
        $allowed_extension = array("jpg", "gif", "png");
        if (in_array($extension, $allowed_extension)) {
            move_uploaded_file($file, './assets/upload/' . $new_image_name);
            $function_number = $_GET['CKEditorFuncNum'];
            $url = base_url('assets/upload/') . $new_image_name;
            $message = '';
            echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
        }
    }

    public function informasi_edit($id)
    {
        $config['upload_path']          = './assets/foto/informasi/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|docx|doc|xls';
        $config['max_width']            = 5024;

        $this->load->library('upload', $config);
        $this->load->helper('string');

        if (!$this->upload->do_upload('file_informasi')) {
            $data = array('error' => $this->upload->display_errors());
            $input = [
                'status_informasi' => $this->input->post('status_informasi'),
                'judul_informasi' => $this->input->post('judul_informasi'),
                'deskripsi_informasi' => $this->input->post('deskripsi_informasi'),
                'tgl_informasi' => $this->input->post('tgl_informasi'),
                'lokasi_informasi' => $this->input->post('lokasi_informasi'),
                'isi_informasi' => $this->input->post('informasi'),
                'id_akses' => 1
            ];
        } else {
            $data = $this->upload->data();
            $input = [
                'judul_informasi' => $this->input->post('judul_informasi'),
                'lokasi_informasi' => $this->input->post('lokasi_informasi'),
                'deskripsi_informasi' => $this->input->post('deskripsi_informasi'),
                'isi_informasi' => $this->input->post('informasi'),
                'tgl_informasi' => $this->input->post('tgl_informasi'),
                'id_akses' => 1,
                'status_informasi' => $this->input->post('status_informasi'),
                'file_informasi' => $data['file_name'],
                'tipefile_informasi' => $data['file_ext'],
            ];
        }

        $this->db->where('id_informasi', $id);
        $this->db->update('master_informasi', $input);

        echo json_encode($input);
    }

    public function menu_tambah()
    {
        $data = [
            'nama_menu' => $this->input->post('nama_menu'),
            'icon' => $this->input->post('icon_menu')
        ];

        $this->db->insert('master_menu', $data);

        echo json_encode($data);
    }
}

/* End of file Core.php and path \application\controllers\Core.php */
