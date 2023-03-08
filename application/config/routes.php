<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'algoritma';
$route['404_override'] = 'page/notfound';
$route['translate_uri_dashes'] = FALSE;

$route['profil/sejarah'] = 'page/sejarah';
$route['profil/visi_misi'] = 'page/visi_misi';
$route['profil/struktur_organisasi'] = 'page/struktur_organisasi';
$route['profil/manajemen/proker'] = 'page/manajemen_proker';
$route['profil/manajemen/raker'] = 'page/manajemen_raker';
$route['profil/sdm/tendik'] = 'page/sdm_tendik';
$route['profil/sdm/dosen'] = 'page/sdm_dosen';
$route['profil/fasilitas'] = 'page/fasilitas';
$route['profil/akreditasi'] = 'page/akreditasi';

$route['informasi/berita'] = 'page/berita';
$route['informasi/pengumuman'] = 'page/pengumuman';
$route['informasi/surat_edaran'] = 'page/surat_edaran';

$route['akademik/pendidikan/sistem_pendidikan'] = 'page/sistem_pendidikan';
$route['akademik/pendidikan/sop_praktikum'] = 'page/sop_praktikum';
$route['akademik/pendidikan/kalender_akademik'] = 'page/kalender_akademik';
$route['akademik/pendidikan/mbkm'] = 'page/mbkm';
$route['akademik/pendidikan/kurikulum'] = 'page/kurikulum';
$route['akademik/prosedur/daftar_ulang_krs'] = 'page/daftar_ulang_krs';
$route['akademik/prosedur/transkip_akademik'] = 'page/transkip_akademik';
$route['akademik/prosedur/pkl'] = 'page/pkl';
$route['akademik/prosedur/sempro_skripsi'] = 'page/sempro_skripsi';
$route['akademik/prosedur/cuti'] = 'page/cuti';
$route['akademik/prosedur/yudisium'] = 'page/yudisium';
$route['akademik/prosedur/wisuda'] = 'page/wisuda';
$route['akademik/prosedur/dokumen_akademik'] = 'page/dokumen_akademik';
$route['akademik/sdm/data_mahasiswa'] = 'page/data_mahasiswa';
$route['akademik/sdm/data_alumni'] = 'page/data_alumni';

$route['penelitian_pengabdian/panduan_penelitian'] = 'page/panduan_penelitian';
$route['penelitian_pengabdian/hasil_penelitian'] = 'page/hasil_penelitian';

$route['kemahasiswaan/informasi/info_beasiswa'] = 'page/info_beasiswa';
$route['kemahasiswaan/informasi/info_yudisium'] = 'page/info_yudisium';
$route['kemahasiswaan/informasi/info_wisuda'] = 'page/info_wisuda';
$route['kemahasiswaan/prestasi/prestasi_mahasiswa'] = 'page/prestasi_mahasiswa';
$route['kemahasiswaan/ormawa/kegiatan_mahasiswa'] = 'page/kegiatan_mahasiswa';
$route['kemahasiswaan/ormawa/himatif'] = 'page/himatif';

$route['kontak'] = 'page/kontak';
