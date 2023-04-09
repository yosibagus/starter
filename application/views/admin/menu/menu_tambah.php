<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Master</a></li>
        <li class="breadcrumb-item"><a href="#/menu">Menu</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</nav>

<h2 class="mb-4">Tambah Menu </h2>
<div class="row">
    <div class="col-xl-12">
        <form method="POST" action="" enctype="multipart/form-data" id="form-dosen" class="row g-3 mb-6">
            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" id="nama_menu" name="nama_menu" autocomplete="off" type="text" placeholder="Nama Menu" />
                    <label for="nama_menu">Nama Menu</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input class="form-control" name="icon_menu" id="icon_menu" autocomplete="off" type="text" placeholder="Icon Menu" />
                    <label for="icon_menu">Icon</label>
                </div>
                <small><i>Data Referensi : <a href="https://feathericons.com/" target="_blank" rel="noopener noreferrer">https://feathericons.com/</a></i></small>
            </div>
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                    <div class="col-auto">
                        <a href="<?= base_url('algoritma/#/dosen') ?>" class="btn btn-lg btn-phoenix-primary px-5">Cancel</a>
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
        $("form").submit(function(e) {
            e.preventDefault();
            var form = $('#form-dosen')[0];
            var data = new FormData(form);
            $.ajax({
                url: '<?= base_url('core/menu_tambah') ?>',
                type: 'post',
                enctype: 'multipart/form-data',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    VanillaToasts.create({
                        title: 'Ruang Algoritma',
                        text: 'Berhasil Disimpan',
                        type: 'success',
                        icon: '<?= base_url('assets/front/logo/informatika.png') ?>',
                        timeout: 3000,
                        single: true
                    });
                    window.location.href = "<?= base_url('algoritma/#/dosen') ?>";
                }
            });
        });
    })
</script>