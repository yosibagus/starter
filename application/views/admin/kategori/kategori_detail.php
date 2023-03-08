<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="">Main Menu</a></li>
        <li class="breadcrumb-item"><a href="#/kategori">Multi Blog</a></li>
        <li class="breadcrumb-item active"><?= $data['nama_kategori'] ?></li>
    </ol>
</nav>

<div class="mb-9">
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0"><?= $data['nama_kategori'] ?></h2>
        </div>
    </div>
    <div id="products">
        <div class="mb-4">
            <div class="row g-3">
                <div class="col-auto">
                    <a href="#/informasi_tambah/<?= $data['kode_kategori'] ?>" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Tambah <?= $data['nama_kategori'] ?></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0" id="mydata">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs--1 align-middle" style="max-width:20px; width:18px;">
                                    No
                                </th>

                                <th class="sort align-middle ps-4" scope="col" data-sort="category" style="width:150px;">Judul </th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="vendor" style="width:200px;">Deskripsi</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="vendor" style="width:200px;">Vendor</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="vendor" style="width:200px;">File</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">Tgl</th>
                                <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">Status</th>
                                <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="tmp-detail">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        tampil_data();
        $('#mydata').dataTable();

        function tampil_data() {
            var id = "<?= $data['id_kategori'] ?>";
            $.ajax({
                type: "GET",
                url: "<?= base_url('core/data_kategori_detail') ?>",
                data: {
                    id: id
                },
                async: false,
                dataType: "html",
                success: function(data) {
                    $("#tmp-detail").html(data);
                }
            });
        }

    })
</script>