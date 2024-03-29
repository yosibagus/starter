<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Informasi</a></li>
        <li class="breadcrumb-item"><a href="#/kategori">Kategori</a></li>
        <li class="breadcrumb-item active"><?= $data['nama_menu'] ?></li>
        <li class="breadcrumb-item active"><?= $data['nama_kategori'] ?></li>
    </ol>
</nav>
<h2 class="mb-4">Edit <?= $data['nama_kategori'] ?></h2>
<div class="row">
    <div class="col-xl-12">
        <form class="row g-3 mb-6">

            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" id="url" value="<?= $data['url'] ?>" type="text" placeholder="URL Kategori" />
                    <label for="url">URL Kategori</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <select name="publish" id="publish" class="form-control">
                        <option value="1" <?= $data['status_kategori'] == 1 ? "selected" : '' ?>>YA</option>
                        <option value="0" <?= $data['status_kategori'] == 0 ? "selected" : '' ?>>TIDAK</option>
                    </select>
                    <label for="publish">Publish?</label>
                </div>
            </div>
            <hr>

            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" id="nama_kategori" type="text" placeholder="Nama Kategori" value="<?= $data['nama_kategori'] ?>" />
                    <label for="nama_kategori">Nama Kategori</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <select name="id_menu" id="id_menu" class="form-control">
                        <?php foreach ($menu as $get) : ?>
                            <option <?= $get['id_menu'] == $data['id_menu'] ? "selected" : ""  ?> value="<?= $get['id_menu'] ?>"><?= $get['nama_menu'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="id_menu">Menu</label>
                </div>
            </div>
            <div class="col-6 gy-6">
                <div class="form-floating">
                    <textarea class="form-control" id="deskripsi_kategori" placeholder="Deskripsi" style="height: 100px"><?= $data['deskripsi_kategori'] ?></textarea><label for="deskripsi_kategori">Deskripsi</label>
                </div>
            </div>
            <div class="col-6 gy-6">
                <div class="form-floating">
                    <textarea class="form-control" id="keterangan_kategori" placeholder="Keterangan" style="height: 100px"><?= $data['keterangan_kategori'] ?></textarea><label for="keterangan_kategori">Keterangan</label>
                </div>
            </div>
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                    <div class="col-auto">
                        <a href="<?= base_url('algoritma/#/kategori') ?>" class="btn btn-lg btn-phoenix-primary px-5">Cancel</a>
                    </div>
                    <div class="col-auto">
                        <button type="button" onclick="editKategori()" class="btn btn-lg btn-primary px-5 px-sm-15">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function editKategori() {
        var nama_kategori = $("#nama_kategori").val();
        var keterangan_kategori = $("#keterangan_kategori").val();
        var deskripsi_kategori = $("#deskripsi_kategori").val();
        var publish = $("#publish").val();
        var url = $("#url").val();
        var id_menu = $("#id_menu").val();
        var id_kategori = "<?= $data['id_kategori'] ?>";
        $.ajax({
            type: "POST",
            url: "<?= base_url('core/kategori_update') ?>",
            dataType: "json",
            data: {
                nama_kategori: nama_kategori,
                keterangan_kategori: keterangan_kategori,
                id_menu: id_menu,
                url: url,
                publish: publish,
                deskripsi_kategori: deskripsi_kategori,
                id_kategori: id_kategori
            },
            success: function(data) {
                VanillaToasts.create({
                    title: 'Ruang Algoritma',
                    text: 'Kategori Berhasil Diupdate',
                    type: 'success',
                    icon: '<?= base_url('assets/front/logo/informatika.png') ?>',
                    timeout: 3000,
                    single: true,
                    callback: function() {
                        window.location.href = '#kategori';
                    }
                });
                window.location.href = "<?= base_url('algoritma/#/kategori') ?>"
            }
        })
    }
</script>