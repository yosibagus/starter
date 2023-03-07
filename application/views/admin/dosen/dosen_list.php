<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Master</a></li>
        <li class="breadcrumb-item active">Dosen</li>
    </ol>
</nav>

<div class="mb-9">
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Data Dosen</h2>
        </div>
    </div>
    <div id="products">
        <div class="mb-4">
            <div class="row g-3">
                <div class="col-auto">
                    <a href="#/dosen_tambah" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Tambah Dosen</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0" id="table-dosen">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>NIK Dosen</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="tmp-dosen">

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
        $("#table-dosen").dataTable();

        function tampil_data() {
            $.ajax({
                type: "GET",
                url: "<?= base_url('core/data_dosen') ?>",
                async: false,
                dataType: "html",
                success: function(data) {
                    console.log(data);
                    $("#tmp-dosen").html(data);
                }
            })
        }

    })
</script>