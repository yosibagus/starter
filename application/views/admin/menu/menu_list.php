<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Master</a></li>
        <li class="breadcrumb-item active">Menu</li>
    </ol>
</nav>
<div class="mb-9">
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Menu List</h2>
        </div>
    </div>
    <div id="products">
        <div class="mb-4">
            <div class="row g-3">
                <div class="col-auto">
                    <a href="#/menu_tambah" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Tambah Menu</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0" id="table-menu">
                        <thead>
                            <tr>
                                <th width="20">No</th>
                                <th>Menu</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tmp-menu">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    tampil_data();
    $('#table-menu').dataTable();

    function tampil_data() {
        $.ajax({
            type: "GET",
            url: "<?= base_url('core/data_menu') ?>",
            async: false,
            dataType: "html",
            success: function(data) {
                $("#tmp-menu").html(data);
            }
        });
    }
</script>