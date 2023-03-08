<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yosi Bagus Sadar Rasuli" />
    <title>Ruang Algoritma | Informatika</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/back/') ?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/front/logo/informatika.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/front/logo/informatika.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/front/logo/informatika.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/back/') ?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/back/') ?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.jsdelivr.net/npm/vanillatoasts@1.3.0/vanillatoasts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/vanillatoasts@1.3.0/vanillatoasts.css" rel="stylesheet">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js" integrity="sha512-bgHRAiTjGrzHzLyKOnpFvaEpGzJet3z4tZnXGjpsCcqOnAH6VGUx9frc5bcIhKTVLEiCO6vEhNAgx5jtLUYrfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <script src="<?= base_url('assets/back/') ?>vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>assets/js/config.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/back/') ?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/back/') ?>unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="<?= base_url('assets/back/') ?>assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="<?= base_url('assets/back/') ?>assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script> -->
    <script src="<?= base_url('assets/back/ckeditor/ckeditor.js') ?>"></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.3/af-2.5.2/datatables.min.css" />

    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.3/af-2.5.2/datatables.min.js"></script>
    <style>
        #vanillatoasts-container {
            position: fixed;
            top: 0;
            right: 0;
            width: 320px;
            font-family: 'Helvetica';
            z-index: 1030;
        }

        .dataTables_filter {
            float: right;
        }

        .pagination {
            float: right;
        }
    </style>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
                <script>
                    var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <!-- scrollbar removed-->
                    <div class="navbar-vertical-content">
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            <li class="nav-item">
                                <span class="nav-item-wrapper">
                                    <a class="nav-link dropdown-indicator label-1" href="#home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="home">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon">
                                                <span class="fas fa-caret-right"></span>
                                            </div>
                                            <span class="nav-link-icon">
                                                <span data-feather="pie-chart"></span>
                                            </span>
                                            <span class="nav-link-text">Home</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="home">
                                            <p class="collapsed-nav-item-title d-none">Home</p>
                                            <li class="nav-item"><a class="nav-link" href="<?= base_url('algoritma/#/home') ?>" data-bs-toggle="" aria-expanded="false">
                                            <li class="nav-item"><a class="nav-link" href="<?= base_url('algoritma/#/home') ?>" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Dashboard</span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="dashboard/project-management.html" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Data Diri</span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="landing.html" data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text">Submit Project</span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </span>
                            </li>
                            <li class="nav-item">
                                <p class="navbar-vertical-label">Master</p>
                                <hr class="navbar-vertical-line" />
                            </li>
                            <div class="nav-item-wrapper">
                                <a class="nav-link label-1" href="<?= base_url('algoritma/#/menu') ?>" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span data-feather="menu"></span>
                                        </span>
                                        <span class="nav-link-text-wrapper"><span class="nav-link-text">Data Menu</span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item-wrapper">
                                <a class="nav-link label-1" href="<?= base_url('algoritma/#/kategori') ?>" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span data-feather="file-text"></span>
                                        </span>
                                        <span class="nav-link-text-wrapper"><span class="nav-link-text">Kategori</span>
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item-wrapper">
                                <a class="nav-link label-1" href="<?= base_url('algoritma/#/dosen') ?>" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span data-feather="users"></span>
                                        </span>
                                        <span class="nav-link-text-wrapper"><span class="nav-link-text">Dosen</span>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <li class="nav-item">
                                <p class="navbar-vertical-label">Main Menu</p>
                                <hr class="navbar-vertical-line" />
                            </li>

                            <?php foreach ($menu as $get) : ?>
                                <li class="nav-item">
                                    <span class="nav-item-wrapper">
                                        <a class="nav-link dropdown-indicator label-1" href="#mainmenu<?= $get['id_menu'] ?>" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="mainmenu<?= $get['id_menu'] ?>">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon">
                                                    <span class="fas fa-caret-right"></span>
                                                </div>
                                                <span class="nav-link-icon">
                                                    <span data-feather="<?= $get['icon'] ?>"></span>
                                                </span>
                                                <span class="nav-link-text"><?= $get['nama_menu'] ?></span>
                                            </div>
                                        </a>
                                        <div class="parent-wrapper label-1">
                                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="mainmenu<?= $get['id_menu'] ?>">
                                                <p class="collapsed-nav-item-title d-none"><?= $get['nama_menu'] ?></p>
                                                <?php $data = $this->db->get_where('master_kategori', ['id_menu' => $get['id_menu']])->result_array(); ?>
                                                <?php foreach ($data as $val) : ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?= base_url('algoritma/#/detail_kategori/') . $val['id_kategori'] . "/" . $val['kode_kategori'] ?>" data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center">
                                                                <span class="nav-link-text">
                                                                    <?php $jumlah = strlen($val['nama_kategori']);
                                                                            $kategori = $jumlah > 20 ? substr($val['nama_kategori'], 0, 20) . " ..." : $val['nama_kategori'];
                                                                            echo $kategori;
                                                                            ?>
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
            </nav>
            <nav class="navbar navbar-top navbar-expand" id="navbarDefault" style="display:none;">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="index.html">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center"><img src="<?= base_url('assets/front/logo/informatika.png') ?>" alt="phoenix" width="27" />
                                    <p class="logo-text ms-2 d-none d-sm-block">Informatika</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm rounded-pill search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                        <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
                        <div class="dropdown-menu border font-base start-0 py-0 overflow-hidden w-100">
                            <div class="scrollbar list pb-3" style="max-height: 30rem;">
                                <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Recently Searched </h6><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                    </div>
                                </a>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Products</h6><a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                                    <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="<?= base_url('assets/back/') ?>assets/img/products/3.png" alt="" /></div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 d-flex align-items-center" href="apps/e-commerce/landing/product-details.html">
                                    <div class="file-thumbnail me-2"><img class="img-fluid" src="<?= base_url('assets/back/') ?>assets/img/products/3.png" alt="" /></div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                    </div>
                                </a>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Quick Links</h6><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                    </div>
                                </a>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Files</h6><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                    </div>
                                </a>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Members</h6><a class="dropdown-item py-2 d-flex align-items-center" href="pages/pages/members.html">
                                    <div class="avatar avatar-l status-online  me-2 text-900">
                                        <img class="rounded-circle " src="<?= base_url('assets/back/') ?>assets/img/team/10.png" alt="" />
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                        <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 d-flex align-items-center" href="pages/pages/members.html">
                                    <div class="avatar avatar-l  me-2 text-900">
                                        <img class="rounded-circle " src="<?= base_url('assets/back/') ?>assets/img/team/12.png" alt="" />
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-1000 title">John Smith</h6>
                                        <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                    </div>
                                </a>
                                <hr class="text-200 my-0" />
                                <h6 class="dropdown-header text-1000 fs--1 border-bottom py-2 lh-sm">Related Searches</h6><a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                    <div class="d-flex align-items-center">
                                        <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center">
                                <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0"></div>
                                    <div class="scrollbar-overlay">
                                        <div class="overflow-auto" style="height: 27rem;">
                                            <!-- tempat notif -->
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-white position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/behance.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/slack.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/gitlab.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-drive.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/trello.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/figma.png" alt="" width="20" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/twitter.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/pinterest.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/ln.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-maps.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-photos.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/spotify.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-l ">
                                    <img class="rounded-circle " src="<?= base_url('assets/back/') ?>assets/img/team/57.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="<?= base_url('assets/back/') ?>assets/img/team/57.png" alt="" />
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr />
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-top navbar-slim navbar-expand" id="navbarSlim" style="display:none;">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="navbar-logo">
                        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                        <a class="navbar-brand navbar-brand" href="index.html">phoenix <span class="text-1000">slim</span></a>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons flex-row">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                <div class="card position-relative border-0">
                                    <div class="card-header p-2">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0"></div>
                                    <div class="scrollbar-overlay">
                                        <div class="overflow-auto" style="height: 27rem;">
                                            <!-- tempat notif -->
                                        </div>
                                    </div>
                                    <div class="card-footer p-0 border-top border-0">
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/pages/notifications.html">Notification history</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                    <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                    <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                                </svg></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                                <div class="card bg-white position-relative border-0">
                                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                        <div class="row text-center align-items-center gx-0 gy-0">
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/behance.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/slack.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/gitlab.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-drive.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/trello.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/figma.png" alt="" width="20" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/twitter.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/pinterest.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/ln.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-maps.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-photos.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                                </a></div>
                                            <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/spotify.png" alt="" width="30" />
                                                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">
                                    <div class="card-body p-0">
                                        <div class="text-center pt-4 pb-3">
                                            <div class="avatar avatar-xl ">
                                                <img class="rounded-circle " src="<?= base_url('assets/back/') ?>assets/img/team/57.png" alt="" />
                                            </div>
                                            <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                        </div>
                                        <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-footer p-0 border-top">
                                        <ul class="nav d-flex flex-column my-3">
                                            <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                        </ul>
                                        <hr />
                                        <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                        <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-top navbar-expand-lg" id="navbarTopNew" style="display:none;">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse" aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center"><img src="<?= base_url('assets/logo/informatika.png') ?>" alt="Informatika" width="27" />
                                <p class="logo-text ms-2 d-none d-sm-block">Informatika</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarToplCollapse">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                                <div class="dropdown-menu-content py-2">
                                    <a class="dropdown-item fw-semi-bold" href="#/home">Dashboard</a>
                                    <a class="dropdown-item fw-semi-bold" href="">Data Diri</a>
                                </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="master">Master</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="master">
                                <div class="dropdown-menu-content py-2">
                                    <a class="dropdown-item fw-semi-bold" href="#/menu">Data Menu</a>
                                    <a class="dropdown-item fw-semi-bold" href="#/kategori">Multi Blog</a>
                                    <a class="dropdown-item fw-semi-bold" href="#/dosen">Dosen</a>
                                </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Main Menu</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <?php foreach ($menu as $get) : ?>
                                                <div class="col-12">
                                                    <div class="nav flex-column">
                                                        <p class="nav-link mb-0 fw-bold" style="color:red;"><?= $get['nama_menu'] ?></p>
                                                        <!-- penanda yosi -->
                                                        <?php $data = $this->db->get_where('master_kategori', ['id_menu' => $get['id_menu']])->result_array(); ?>
                                                        <?php foreach ($data as $val) : ?>
                                                            <a class="nav-link fw-semi-bold" href="#/detail_kategori/<?= $val['id_kategori'] . "/" . $val['kode_kategori'] ?>">
                                                                <?= $val['nama_kategori'] ?>
                                                            </a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons flex-row">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                    </li>

                    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-l ">
                                <img class="rounded-circle " src="" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                            <div class="card position-relative border-0">
                                <div class="card-body p-0">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="" alt="" />
                                        </div>
                                        <h6 class="mt-2 text-black">Admin</h6>
                                    </div>
                                </div>
                                <div class="overflow-auto scrollbar">
                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span>Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top">
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    <hr />
                                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="<?= base_url('auth/logout') ?>"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="navbar navbar-top navbar-slim justify-content-between navbar-expand-lg" id="navbarTopSlimNew" style="display:none;">
                <div class="navbar-logo">
                    <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToplCollapse" aria-controls="navbarToplCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand navbar-brand" href="#/home">Informatika <span class="text-1000">slim</span></a>
                </div>
                <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarToplCollapse">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="dashboards">
                                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold" href="index.html">E commerce</a><a class="dropdown-item fw-semi-bold" href="dashboard/project-management.html">Project management</a><a class="dropdown-item fw-semi-bold" href="landing.html">Landing</a><a class="dropdown-item fw-semi-bold" href="apps/social/feed.html">Social feed</a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="appss">Apps</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="appss">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Admin</p><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/add-product.html">Add product</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/products.html">Products</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/customers.html">Customers</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/customer-details.html">Customer details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/orders.html">Orders</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/order-details.html">Order details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/admin/refund.html">Refund</a>
                                                    <p class="nav-link mb-0 fw-bold">Landing</p><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/homepage.html">Homepage</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Product details</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/products-filter.html">Products filter</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/cart.html">Cart</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/checkout.html">Checkout</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/shipping-info.html">Shipping info</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/profile.html">Profile</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/favourite-stores.html">Favourite stores</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/wishlist.html">Wishlist</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/order-tracking.html">Order tracking</a><a class="nav-link fw-semi-bold" href="apps/e-commerce/landing/invoice.html">Invoice</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Projects</p><a class="nav-link fw-semi-bold" href="apps/project-management/create-new.html">Create new</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-list-view.html">Project list view</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-card-view.html">Project card view</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-board-view.html">Project board view</a><a class="nav-link fw-semi-bold" href="apps/project-management/todo-list.html">Todo list</a><a class="nav-link fw-semi-bold" href="apps/project-management/project-details.html">Project details</a>
                                                    <p class="nav-link mb-0 fw-bold">Email</p><a class="nav-link fw-semi-bold" href="apps/email/inbox.html">Inbox</a><a class="nav-link fw-semi-bold" href="apps/email/email-detail.html">Email detail</a><a class="nav-link fw-semi-bold" href="apps/email/compose.html">Compose</a>
                                                    <p class="nav-link mb-0 fw-bold">Events</p><a class="nav-link fw-semi-bold" href="apps/events/create-an-event.html">Create an event</a><a class="nav-link fw-semi-bold" href="apps/events/event-detail.html">Event detail</a>
                                                    <p class="nav-link mb-0 fw-bold">Social</p><a class="nav-link fw-semi-bold" href="apps/social/profile.html">Profile</a><a class="nav-link fw-semi-bold" href="apps/social/settings.html">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="pagess">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold" href="pages/starter.html">Starter</a><a class="nav-link fw-semi-bold" href="pages/pages/faq.html">Faq</a>
                                                    <p class="nav-link mb-0 fw-bold">Pricing</p><a class="nav-link fw-semi-bold" href="pages/pages/pricing/pricing-column.html">Pricing column</a><a class="nav-link fw-semi-bold" href="pages/pages/pricing/pricing-grid.html">Pricing grid</a><a class="nav-link fw-semi-bold" href="pages/pages/notifications.html">Notifications</a><a class="nav-link fw-semi-bold" href="pages/pages/members.html">Members</a>
                                                    <p class="nav-link mb-0 fw-bold">Split</p><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-in.html">Sign in</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-up.html">Sign up</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/sign-out.html">Sign out</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link fw-semi-bold" href="pages/authentication/split/reset-password.html">Reset password</a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column">
                                                    <p class="nav-link mb-0 fw-bold">Errors</p><a class="nav-link fw-semi-bold" href="pages/errors/404.html">404</a><a class="nav-link fw-semi-bold" href="pages/errors/500.html">500</a>
                                                    <p class="nav-link mb-0 fw-bold">Simple</p><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-in.html">Sign in</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-up.html">Sign up</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/sign-out.html">Sign out</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link fw-semi-bold" href="pages/authentication/simple/lock-screen.html">Lock screen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="moduless">
                                <div class="dropdown-menu-content navbar-top-card p-3">
                                    <div class="scrollbar max-h-dropdown">
                                        <div class="row gx-0">
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold" href="modules/forms/basic/form-control.html">Form control</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/input-group.html">Input group</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/select.html">Select</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/checks.html">Checks</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/range.html">Range</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/floating-labels.html">Floating labels</a><a class="nav-link fw-semi-bold" href="modules/forms/basic/layout.html">Layout</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/editor.html">Editor</a></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="nav flex-column"><a class="nav-link fw-semi-bold" href="modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link fw-semi-bold" href="modules/forms/advance/rating.html">Rating</a><a class="nav-link fw-semi-bold" href="modules/forms/wizard.html">Wizard</a><a class="nav-link fw-semi-bold" href="modules/icons/feather.html">Feather</a><a class="nav-link fw-semi-bold" href="modules/icons/font-awesome.html">Font awesome</a><a class="nav-link fw-semi-bold" href="modules/icons/unicons.html">Unicons</a><a class="nav-link fw-semi-bold" href="modules/tables/basic-tables.html">Basic tables</a><a class="nav-link fw-semi-bold" href="modules/tables/advance-tables.html">Advance tables</a><a class="nav-link fw-semi-bold" href="modules/components/accordion.html">Accordion</a><a class="nav-link fw-semi-bold" href="modules/components/avatar.html">Avatar</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                            <div class="dropdown-menu navbar-dropdown-caret py-0" aria-labelledby="documentations">
                                <div class="dropdown-menu-content py-2"><a class="dropdown-item fw-semi-bold" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item fw-semi-bold" href="documentation/customization/styling.html">Styling</a><a class="dropdown-item fw-semi-bold" href="documentation/customization/plugin.html">Plugin</a><a class="dropdown-item fw-semi-bold" href="documentation/layouts/vertical-navbar.html">Vertical navbar</a><a class="dropdown-item fw-semi-bold" href="documentation/layouts/horizontal-navbar.html">Horizontal navbar</a><a class="dropdown-item fw-semi-bold" href="documentation/gulp.html">Gulp</a><a class="dropdown-item fw-semi-bold" href="documentation/design-file.html">Design file</a><a class="dropdown-item fw-semi-bold" href="changelog.html">Changelog</a><a class="dropdown-item fw-semi-bold" href="showcase.html">Showcase</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons flex-row">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="moon"></span><span class="fs--1 fw-bold">Dark</span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon me-1 d-none d-sm-block" data-feather="sun"></span><span class="fs--1 fw-bold">Light</span></label></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span data-feather="bell" style="height:12px;width:12px;"></span></a>
                        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                            <div class="card position-relative border-0">
                                <div class="card-header p-2">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                                    </div>
                                </div>
                                <div class="card-body p-0"></div>
                                <div class="scrollbar-overlay">
                                    <div class="overflow-auto" style="height: 27rem;">
                                        <!-- tempat notif -->
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-top border-0">
                                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="pages/pages/notifications.html">Notification history</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                                <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                                <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                            <div class="card bg-white position-relative border-0">
                                <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                                    <div class="row text-center align-items-center gx-0 gy-0">
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/behance.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-cloud.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/slack.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/gitlab.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Gitlab</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/bitbucket.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-drive.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/trello.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/figma.png" alt="" width="20" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/twitter.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/pinterest.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/ln.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-maps.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/google-photos.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                                            </a></div>
                                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="<?= base_url('assets/back/') ?>assets/img/nav-icons/spotify.png" alt="" width="30" />
                                                <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olivia <span class="fa-solid fa-chevron-down fs--2"></span></a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                            <div class="card position-relative border-0">
                                <div class="card-body p-0">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl ">
                                            <img class="rounded-circle " src="<?= base_url('assets/back/') ?>assets/img/team/57.png" alt="" />
                                        </div>
                                        <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                                    </div>
                                    <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                                </div>
                                <div class="overflow-auto scrollbar" style="height: 10rem;">
                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top">
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    <hr />
                                    <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                                    <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="content">
                <div id="main"></div>
                <footer class="footer position-absolute">
                    <div class="row g-0 justify-content-between align-items-center h-100">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 mt-2 mt-sm-0 text-900">Ruang Algoritma<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022 &copy;<a class="ms-1" href="https://yosibgsdr.site/">Team IT</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.0.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
            var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTopNew = document.querySelector('#navbarTopNew');
            var navbarSlim = document.querySelector('#navbarSlim');
            var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault.remove();
                navbarTopNew.remove();
                navbarTopSlimNew.remove();
                navbarSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarVertical.remove();
                navbarTopNew.remove();
                navbarSlim.remove();
                navbarTopSlimNew.removeAttribute('style');
                body.classList.add('nav-slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault.remove();
                navbarSlim.remove();
                navbarVertical.remove();
                navbarTopSlimNew.remove();
                navbarTopNew.removeAttribute('style');
                documentElement.classList.add('navbar-horizontal')

            } else {
                body.classList.remove('nav-slim');
                navbarSlim.remove();
                navbarTopNew.remove();
                navbarTopSlimNew.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>
    </main>

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header align-items-start border-bottom flex-column">
            <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
                <div>
                    Customize <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme r</h5>
                    <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
                </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
            </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
        </div>
        <div class="offcanvas-body scrollbar px-card pt-2" id="themeController">
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Color Scheme</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/default-light.png" alt="" /></span><span class="label-text">Light</span></label></div>
                    <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/default-dark.png" alt="" /></span><span class="label-text"> Dark</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Navigation Type</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="<?= base_url('assets/back/') ?>assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="<?= base_url('assets/back/') ?>assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">Vertical</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="<?= base_url('assets/back/') ?>assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="<?= base_url('assets/back/') ?>assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text"> Horizontal</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="<?= base_url('assets/back/') ?>assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="<?= base_url('assets/back/') ?>assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="<?= base_url('assets/back/') ?>assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="<?= base_url('assets/back/') ?>assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-slim.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text"> Slim</span></label></div>
                </div>
            </div>
            <div class="setting-panel-item">
                <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-style-darker.png" alt="" /></span><span class="label-text">Default</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/navbar-top-style-light.png" alt="" /><img class="img-fluid img-prototype d-light-none mb-0" src="<?= base_url('assets/back/') ?>assets/img/generic/top-style-lighter.png" alt="" /></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
                </div>
            </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary" href="#!" target="_blank">Purchase template</a>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center px-2 py-1">
            <div class="position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">custom</small>
        </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url('assets/back/') ?>vendors/popper/popper.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/is/is.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/fontawesome/all.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/lodash/lodash.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/list.js/list.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/feather-icons/feather.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>assets/js/phoenix.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/echarts/echarts.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>vendors/chart/chart.min.js"></script>
    <script src="<?= base_url('assets/back/') ?>unpkg.com/%40googlemaps/markerclusterer%402.0.14/dist/index.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&amp;callback=revenueMapInit" async></script>
    <script src="<?= base_url('assets/back/') ?>assets/js/ecommerce-dashboard.js"></script>

    <script>
        var baseurl = "http://localhost/starter/";

        function loadContent(hash) {
            if (hash == '') {
                hash = 'home';
            }
            $('#main').load(baseurl + 'algoritma/' + hash);
        }

        $(window).on('hashchange', function() {
            loadContent(location.hash.slice(1));
        });

        var url = window.location.href;
        var hash = url.substring(url.indexOf("#") + 1);

        if (hash == url) {
            hash = 'home';
        }

        $(document).ready(function() {
            $('#main').load(baseurl + 'algoritma/' + hash);
        })
    </script>

</body>

</html>