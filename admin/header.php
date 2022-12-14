<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $TITLE_NAME?></title>
    <!--     --===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="stylesheet" href="../css/information.css">
</head>

<body>
    <div class="container1">
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="../img/hackerIt.jpeg" alt="" />
                    </span>

                    <div class="text logo-text">
                        <span class="name">Xin chào</span>
                        <span class="profession">Admin</span>
                    </div>
                </div>

                <i class="bx bx-chevron-right toggle"></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <button><i class="bx bx-search icon"></i></button>
                        <input type="text" placeholder="Search..." />
                    </li>

                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="index.php">
                                <i class="bx bx-home-alt icon"></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="index.php?action=news">
                                <i class="bx bx-bell icon"></i>
                                <span class="text nav-text">Tin tức</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="index.php?action=ticket">
                                <i class='bx bxl-go-lang icon'></i>
                                <span class="text nav-text">QL Vé</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="index.php?action=ticket_type">
                                <i class='bx bxl-go-lang icon'></i>
                                <span class="text nav-text">QL Loại vé</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="index.php?action=flight">
                                <i class='bx bxs-plane-take-off icon'></i>
                                <span class="text nav-text">QL Chuyến Bay</span>
                            </a>
                        </li>

                        <li class="nav-link">

                            <a href="index.php?action=bill">
                                <i class="icon fa-solid fa-money-bill"></i>
                                <span class="text nav-text">Bill đã thanh toán</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="index.php?action=experience">
                                <i class="bx bx-info-circle icon"></i>
                                <span class="text nav-text">Trải nghiệm</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="index.php?action=slideShow">
                                <i class="bx bx-info-circle icon"></i>
                                <span class="text nav-text">Slide Show</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="index.php?action=list_endow">
                                <i class="bx bxs-party icon"></i>
                                <span class="text nav-text">Ưu đãi</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="index.php?action=review">
                                <i class="bx bxs-slideshow icon"></i>
                                <span class="text nav-text">Giới thiệu</span>
                            </a>
                        </li>


                        <li class="nav-link">
                            <a href="index.php?action=listMembers">
                                <i class="bx bx-user icon"></i>
                                <span class="text nav-text">Thành viên</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="index.php?action=listContact">
                                <i class="bx bxs-comment-detail icon"></i>
                                <span class="text nav-text">Liên hệ</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class="bx bx-question-mark icon"></i>
                                <span class="text nav-text">CSKH</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="index.php?action=information">
                                <i class="bx bx-info-circle icon"></i>
                                <span class="text nav-text">Thông tin</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="#">
                            <i class="bx bx-cog icon"></i>
                            <span class="text nav-text">Setting</span>
                        </a>
                    </li>

                    <li class="mode">
                        <div class="sun-moon">
                            <i class="bx bx-moon icon moon"></i>
                            <i class="bx bx-sun icon sun"></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>