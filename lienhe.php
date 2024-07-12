<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        @font-face {
            font-family: "";
            src: url();
        }

        #header {
            background-color: black;
            position: relative;
            left: 0;
            right: 0;
            width: 100%;

        }

        body {
            margin: 0;
            font-family: "montserrat", sans-serif;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;

        }

        nav {
            display: flex;
        }

        #logo {
            position: absolute;
            top: 0;
            left: 112px;
            padding-top: 32px;
            padding-left: 86px;
        }

        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #logo img {
            max-width: 120px;
            height: 33px;

        }
        .ll {
            margin-left: 320px;
            display: flex;
            align-items: center;
        }

        .ll p {
            padding-right: 5px;
        }

        #mainmenu {
            display: flex;
            list-style: none;
            padding-left: 330px;

        }

        #mainmenu li {
            position: relative;
        }

        #mainmenu li a {
            color: #cfcfcf;
            display: block;
            padding: 20px 15px;
            text-decoration: none;
            font-size: 13px;

        }

        #mainmenu li a:hover {
            color: #f97e6c;

        }

        #mainmenu ul.submenu {
            position: absolute;
            background-color: black;
            padding: 15px 0px;
            list-style: none;
            width: 200px;
            display: none;
        }

        #mainmenu li:hover>ul.submenu {
            display: block;
        }

        #mainmenu ul.submenu a {
            padding: 15px 15px;
            left: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #mainmenu ul.submenu a:hover {
            color: #f97e6c;
        }

        #mainmenu ul.submenu ul.submenu {
            left: 200px;
            padding: 15px 0px;
            width: 200px;
            bottom: -152px;
        }

        .lienhe {
            margin: 0;
            width: 100%;
            height: 550px;
        }

        .contact img {
            width: 100%;
        }

        .lienhe {
            padding-left: 544px;
        }

        .lienhe p {
            margin: 0;
            padding: 10px 0px;
        }

        .footer {
            width: 100%;
            height: 400px;
            margin: 0;
            position: relative;
        }

        /* .backft{
    width:100%;
    height:100%;
    background-size: cover;
    background-image:url("background-footer.webp");
    opacity: 0.2;
} */
        .footer::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: url("background-footer.webp");
            background-repeat: no-repeat;
            background-size: cover;
            filter: saturate(0);
            opacity: 0.2;
        }

        .footer::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: -1;
        }

        .row1 {
            width: 355px;
            height: 300px;
            position: absolute;
            color: white;
            margin-left: 104px;
            margin-top: 84px;
            font-size: 12px;
        }

        .row1 li {
            padding: 10px 10px;
            list-style: none;
        }

        .row1 img {
            margin-left: 16px;
            width: 70%;
        }

        .row2 {
            width: 355px;
            height: 300px;
            position: absolute;
            margin-left: 532px;
            margin-top: 84px;
            font-size: 12px;
        }

        .row2 li {
            padding: 7.5px 10px;
            list-style: none;

        }

        .row2 h2 {
            color: white;
        }

        .row2 a {
            color: white;
            text-decoration: none;
        }

        .row3 {
            width: 355px;
            height: 300px;
            position: absolute;
            margin-left: 755px;
            margin-top: 84px;
            font-size: 12px;
        }

        .row3 li {
            padding: 7.5px 10px;
            list-style: none;
        }

        .row3 h2 {
            color: white;
        }

        .row3 a {
            color: white;
            text-decoration: none;
        }

        .row4 {
            width: 355px;
            height: 300px;
            position: absolute;
            color: white;
            margin-left: 1032px;
            margin-top: 84px;
            font-size: 12px;
        }

        .row4 li {
            padding: 7.5px 10px;
            list-style: none;
        }

        .row4 a {
            color: white;
            text-decoration: none;
        }

        .kt {
            width: 30%;
            height: 30px;
        }

        .nd {
            width: 460px;
            height: 100px;
            margin-bottom: 10px;
        }

        form {
            height: 400px;
        }

        .bt {

            background-color: #3f3fdb;
            width: 200px;
            height: 50px;
            color: white;
            text-align: center;
        }

        .bt:hover {
            background-color: #1d1b1b;
        }

        .f2 {
            margin-left: 804px;
            position: absolute;
            padding-top: 34px;
        }

        .bton:hover {
            background-color: #f97e6c;
            color: white;
        }
    </style>
    <div class="hdt">
        <div id="header">
            <nav class="container">
                <a href="asm1.php" id="logo">
                    <img src="img/gravity2.png">
                </a>
                <div id="menu">
                    <ul id="mainmenu">
                        <li><a href="asm1.php">
                                <font face="Tahoma">TRANG CHỦ</font>
                            </a>
                        </li>
                        <li><a href="gioithieu.php">
                                <font face="Tahoma">GIỚI THIỆU</font>
                            </a>
                        </li>
                        <li><a href="">
                                <font face="Tahoma">SẢN PHẨM</font>
                            </a>
                            <ul class="submenu">
                                <li><a href="nike.php">NIKE</a></li>
                                <li><a href="adidas.php">ADIDAS</a></li>
                                <li><a href="puma.php">PUMA</a></li>
                            </ul>
                        <li><a href="tintuc.php">
                                <font face="Tahoma">TIN TỨC</font>
                            </a>
                        <li><a href="lienhe.php">
                                <font face="Tahoma">LIÊN HỆ</font>
                            </a>
                </div>
                <form class="f2">
                    <input type="text" placeholder="Tìm kiếm..." class="search" required class="text">
                    <input type="submit" value="Tìm kiếm" class="bton">
                </form>
                <div class="ll">
                    <p><a href="admin.php">Quản trị</a>
                    <p>
                    <p><a href="">Đăng nhập</a>
                    <p>
                </div>
            </nav>
        </div>
    </div>
    <div class="contact">
        <img src="img/contact.png">
    </div>
    <div class="lienhe">
        <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <p>Chúng tôi sẽ liên hệ lại sớm nhất</p>
        <form>
            <p>Họ Tên</p>
            <input type="text" id="username" required placeholder="Họ và tên..." class="kt">
            <p>Email:</p>
            <input type="email" id="email" required placeholder="Email..." class="kt">
            <p>Số điện thoại</p>
            <input type="number" id="sdt" required placeholder="Số điện thoại..." class="kt">
            <p>Nội dung</p>
            <textarea type="text" id="nd" required placeholder="Nội dung..." class="nd"></textarea>
            <input type="submit" value="Gửi" class="bt">
        </form>

    </div>
    <script>
        var hovaten = document.getElementById("username")
    </script>

    <div class="footer">
        <div class="backft"></div>
        <div class="row1">
            <a href="">
                <img src="img/gravity2.png">
            </a>
            <ul>
                <li>
                    Tầng 6, Tòa nhà Ladeco, 266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình, TP Hà Nội</li>
                <li>19006750</li>
                <li>support@sapo.vn</li>
            </ul>
        </div>
        <div class="row2">
            <h2>Về chúng tôi</h2>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Giới thiệu</a></li>
            <li><a href="">Sản phẩm</a></li>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Liên hệ</a></li>
        </div>
        <div class="row3">
            <h2>Chính sách</h2>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Giới thiệu</a></li>
            <li><a href="">Sản phẩm</a></li>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Liên hệ</a></li>
        </div>
        <div class="row4">
            <h2>Theo dõi chúng tôi</h2>
            <li><a href="">Facebook:</a></li>
            <li><a href="">Instagram:</a></li>
            <li><a href="">Twitter</a></li>
        </div>
    </div>
</body>

</html>