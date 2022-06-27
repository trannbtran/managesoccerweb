<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=WEBSITE_TITLE?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=ASSETS?>page/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=ASSETS?>page/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    



</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?=ASSETS?>/page/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?=ROOT?>home">Trang chủ</a></li>
                            <li><a href="#">Cầu thủ</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?=ROOT?>rud_player">Danh sách cầu thủ</a></li>
                                    <li><a href="<?=ROOT?>add_player">Thêm cầu thủ</a></li>
                                    <li><a href="<?=ROOT?>rud_player">Sửa cầu thủ</a></li>
                                    <li><a href="<?=ROOT?>rud_player">Xóa cầu thủ</a></li>
                                </ul>
                            <li><a href="#">Câu lạc bộ</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?=ROOT?>rud_club">Danh sách câu lạc bộ</a></li>
                                    <li><a href="<?=ROOT?>add_club">Thêm CLB</a></li>
                                    <li><a href="<?=ROOT?>rud_club">Sửa CLB</a></li>
                                    <li><a href="<?=ROOT?>rud_club">Xóa CLB</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Tìm kiếm</a></li>
                            <li><a href="./contact.html">Giới thiệu</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->