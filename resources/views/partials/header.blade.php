<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
    <!-- <link rel="stylesheet" href="public/css/reset.css"> -->
    <title>Home</title>
    @vite(['resources/sass/common.scss', 'resources/js/app.js'])
</head>
 
<body>
    <div id="wrapper container-custom">
        <div id="header">
            <div class="header-container" style="background-color: orangered;">
                <div class="container-header container-custom">
                    <a href="" class="logo">
                        <img src="public/image/Layer_1.png" alt="logo">
                    </a>
                    <form action="" class="search">
                        <span class="ic-search"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="q" class="ip-search" placeholder="Nhập thông tin cần tìm kiếm...">
                        <button type="submit" class="btn-search">TÌM KIẾM</button>
                    </form>
                </div>
            </div>
            <div class="container-menu ">
                <nav class="navbar container-custom">
                    <a href="#disorders">Rối loạn trầm cảm nặng</a>
                    <a href="#signal">Dấu hiệu</a>
                    <a href="#causal">Nguyên nhân & ảnh hưởng</a>
                    <a href="#solution">Gợi ý giải pháp</a>
                    <a href="#useful">Tin tức</a>
                </nav>
            </div>
        </div>