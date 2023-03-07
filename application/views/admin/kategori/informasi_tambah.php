<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Informasi</a></li>
        <li class="breadcrumb-item"><a href="#kategori">Kategori</a></li>
        <li class="breadcrumb-item"><a href=""><?= $data['nama_kategori'] ?></a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</nav>

<h2 class="mb-4">Form <?= $data['nama_kategori'] ?></h2>
<div class="row">
    <div class="col-xl-12">
        <form method="POST" action="<?= base_url('core/informasi_tambah') ?>" enctype="multipart/form-data" id="form-informasi" class="row g-3 mb-6">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating">
                            <input class="form-control" id="vendor" name="vendor" type="text" placeholder="Project title" value="Admin" disabled />
                            <label for="vendor">Vendor</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input class="form-control" id="kategori" name="kategori" type="text" value="<?= $data['nama_kategori'] ?>" disabled />
                            <label for="kategori">kategori</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <select name="status_informasi" id="status_informasi" class="form-control">
                        <option value="1">YA</option>
                        <option value="0">TIDAK</option>
                    </select>
                    <label for="status_informasi">Publish</label>
                </div>
            </div>
            <hr>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" id="judul_informasi" name="judul_informasi" autocomplete="off" type="text" placeholder="Project title" />
                    <label for="judul_informasi">Judul</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" name="deskripsi_informasi" id="deskripsi_informasi" autocomplete="off" type="text" placeholder="Project title" />
                    <label for="deskripsi_informasi">Deskripsi</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" id="file_informasi" name="file_informasi" type="file" placeholder="Project title" />
                    <label for="file_informasi">File</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" id="tgl_informasi" name="tgl_informasi" type="date" />
                    <label for="tgl_informasi">Tanggal Post</label>
                    <small class="text-info"><i>Kosongi Tanggal, Otomatis akan terisi tanggal <?= date('d-m-y') ?>.</i></small>
                </div>
            </div>
            <div class="col-12 gy-6">
                <textarea id="isi_informasi" name="isi_informasi"></textarea>
            </div>
            <div class="col-12 gy-6">
                <textarea id="informasi" name="informasi" hidden></textarea>
            </div>
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                    <div class="col-auto">
                        <a href="<?= base_url('algoritma/#/kategori') ?>" class="btn btn-lg btn-phoenix-primary px-5">Cancel</a>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        var editor = CKEDITOR.replace('isi_informasi', {
            height: 300,
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: "<?= base_url('core/upload_image') ?>"
        });

        editor.on('change', function(evt) {
            $("#informasi").val(evt.editor.getData());
        });

        $("form").submit(function(e) {
            e.preventDefault();
            var form = $('#form-informasi')[0];
            var data = new FormData(form);
            var id = "<?= $data['id_kategori'] ?>";
            var kode = "<?= $data['kode_kategori'] ?>";
            console.log($("#informasi").val());
            $.ajax({
                url: '<?= base_url('core/informasi_tambah/') ?>' + id,
                type: 'post',
                enctype: 'multipart/form-data',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                success: function(data) {
                    VanillaToasts.create({
                        title: 'Ruang Algoritma',
                        text: 'Kategori Berhasil Disimpan',
                        type: 'success',
                        icon: '<?= base_url('assets/front/logo/informatika.png') ?>',
                        timeout: 3000,
                        single: true,
                        callback: function() {
                            window.location.href = '#kategori';
                        }
                    });
                    window.location.href = "<?= base_url('algoritma/#/detail_kategori/') ?>" + id + "/" + kode;
                }
            });
        });
    })
</script>