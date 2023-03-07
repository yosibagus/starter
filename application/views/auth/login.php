<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="author" content="Yosi Bagus Sadar Rasuli" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/auth/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/auth/') ?>css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/auth/') ?>css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/auth/') ?>css/iofrm-theme26.css">
</head>

<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="">
                    <img class="logo-size" src="<?= base_url('assets/front/logo/uniba_informatika.png') ?>" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h2>Kelola Jembatan Data,<br><span>di Ruang Algoritma.</span></h2>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Ruang.<br>Algoritma.</h3>
                        <p>Masukkan Kode Akses (Username & Password) untuk mengelola ruang algoritma sebagai antarmuka <a href="https://informatika.unibamadura.ac.id">informatika.unibamadura.ac.id</a></p>
                        <div id="peringatan"></div>
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Username" autofocus name="username" id="username">
                                </div>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-button">
                                <button type="button" onclick="loginReq()" class="ibtn extra-padding">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/auth/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/auth/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/auth/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/auth/') ?>js/main.js"></script>

    <script>
        function loginReq() {
            var username = $("#username").val();
            var password = $("#password").val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('auth/login_req') ?>",
                dataType: "json",
                data: {
                    username: username,
                    password: password
                },
                success: function(data) {

                    if (data.error == "tidak_ada") {
                        $("#peringatan").html('<div class="alert alert-danger" role="alert">Username / Password Tidak Ditemukan</div>');
                    } else if (data.error == "kosong") {
                        $("#peringatan").html('<div class="alert alert-warning" role="alert">Username dan Password harus terisi!</div>');
                    } else {
                        window.location.href = "<?= base_url('algoritma') ?>";
                    }

                }
            })
        }
    </script>
</body>

</html>