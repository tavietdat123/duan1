<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datstyle.css">
    <title>Website đặt vé máy bay</title>
</head>

<body>
    <header>
        <div class="header d-flex justify-content-between align-items-center w-100">
            <svg class="svg_image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 38">
                <defs>
                    <linearGradient id="logos806a-1" x2="0" y2="100%">
                        <stop offset="0" stop-color="#00d7e5"></stop>
                        <stop offset="1" stop-color="#0066ae"></stop>
                    </linearGradient>
                    <linearGradient id="logos806b-1" x2="0" y2="100%">
                        <stop offset="0" stop-color="#ff30ae"></stop>
                        <stop offset="1" stop-color="#d1003a"></stop>
                    </linearGradient>
                    <linearGradient id="logos806c-1" x2="0" y2="100%">
                        <stop offset="0" stop-color="#ffba00"></stop>
                        <stop offset="1" stop-color="#f02e00"></stop>
                    </linearGradient>
                </defs>
                <path fill="url(#logos806a-1)"
                    d="M23.2 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-6c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 4 0 7.5 1.7 9.9 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.8-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.4-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8z">
                </path>
                <path fill="url(#logos806b-1)"
                    d="M103.8 15.5c2.5-2.7 6-4.4 9.9-4.4 8.7 0 13.4 6 13.4 13.4v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5H101c-.3 0-.5-.2-.5-.5V24.5c0-4.6-3.1-5.9-6.4-5.9-3.2 0-6.4 1.3-6.4 5.9v12.8c0 .3-.3.5-.5.5h-5.9c-.3 0-.5-.2-.5-.5V24.5c0-7.4 4.7-13.4 13.3-13.4 3.8 0 7.3 1.7 9.7 4.4m54.3 9.1c0 7.5-5.2 13.4-14 13.4s-14-5.9-14-13.4c0-7.6 5.2-13.4 14-13.4 8.7-.1 14 5.9 14 13.4zm-6.7 0c0-3.7-2.3-6.8-7.3-6.8-5.2 0-7.3 3.1-7.3 6.8 0 3.7 2.1 6.8 7.3 6.8 5.1-.1 7.3-3.1 7.3-6.8zm9.8-.1v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-4.6 3.1-5.9 6.4-5.9 3.3 0 6.4 1.3 6.4 5.9v12.8c0 .3.2.5.5.5h5.9c.3 0 .5-.2.5-.5V24.5c0-7.4-4.5-13.4-13.4-13.4-8.7 0-13.2 6-13.2 13.4">
                </path>
                <path fill="url(#logos806c-1)"
                    d="M218.4 0h-5.9c-.3 0-.5.2-.5.5v13c-1.3-1.2-4.3-2.4-7-2.4-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4c8.7 0 14-5.2 14-14.6V.4c-.1-.2-.3-.4-.6-.4zm-13.5 31.3c-5.2 0-7.3-3-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3 7.3 6.8s-2.2 6.8-7.3 6.8zM236 11.1c-8.8 0-14 5.9-14 13.4s5.2 13.4 14 13.4 14-5.9 14-13.4c0-7.4-5.3-13.4-14-13.4zm0 20.2c-5.2 0-7.3-3.1-7.3-6.8 0-3.7 2.1-6.8 7.3-6.8 4.9 0 7.3 3.1 7.3 6.8 0 3.8-2.2 6.8-7.3 6.8z">
                </path>
            </svg>
            <div class="container_login d-flex align-items-center">
                <div class="login_trips">
                    <span>Các Chuyến Đi</span>
                </div>
                <a class="btn_login " href="index.php?action=login"><i class="fa-regular fa-user"></i> <span>Đăng Nhập</span></a>
            </div>
        </div>
        <div class="nav d-flex flex-column">
            <div class="header_list"><button class="header_list_btn">
                    <i class="fa-solid fa-list"></i></button></div>
            <div class="nav_1">
                <a href="index.php?action=login" class="nav_link"><i class="fa-regular fa-user"></i><span>Đăng Nhập</span></a>

            </div>
            <div class="nav_2 d-flex flex-column">
                <a href="index.php" class="nav_link active"><i class="fa-solid fa-plane"></i><span>Chuyến Bay</span></a>
                <a href="index.php?action=experience" class="nav_link"><i class="fa-solid fa-inbox"></i><span>Trải Nghiệm</span></a>
                <a href="index.php?action=endow" class="nav_link"><i class="fa-brands fa-salesforce"></i><span>Ưu Đãi</span></a>
                <a href="index.php?action=news" class="nav_link"><i class="fa-solid fa-newspaper"></i><span>Tin Tức</span></a>
                <a href="index.php?action=review" class="nav_link"><i class="fa-solid fa-barcode"></i><span>Giới Thiệu</span></a>
            </div>
            <div class="nav_3 d-flex flex-column">
                <a href="index.php?action=contact" class="nav_link"><i class="fa-solid fa-address-book"></i><span>Liên Hệ</span></a>
                <a href="index.php?action=trips" class="nav_link"><i class="fa-solid fa-plane-departure"></i><span>Các Chuyến Bay</span></a>
            </div>
        </div>
    </header>