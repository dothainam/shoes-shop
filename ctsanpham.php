<?php
    include 'db.php';
    $sql = 'select * from ct_sanpham';
    $result = $connect->query($sql);
    foreach ($result as $row)
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
        .ll {
            margin-left: 320px;
            display: flex;
            align-items: center;
        }

        .ll p {
            padding-right: 5px;
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

        .bd1 {
            display: inline-block;
            background-image: url("back.webp");
            background-size: cover;
            width: 100%;
            height: 560px;
        }

        .divbanner {
            width: 1200px;
            height: 200px;
            background-color: #3f3fdb;
            margin: auto;
            text-align: center;
            margin-top: -4px;
            margin-bottom: 30px;
        }

        .divconb {
            margin: 10px;
            margin-top: 30px;
            width: 275px;
            height: 160px;
            display: block;
            color: white;
            float: left;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .divconb img {
            width: 40px;
            height: 40px;
        }

        .divconb h3 {
            font-size: 14px;
        }

        .divconb p {
            font-size: 13px;
        }

        .tieude {
            margin: 0;
            text-align: center;
            font-family: "montserrat", sans-serif;
        }

        .tieude a {
            text-decoration: none;
        }

        .tieude h2 {
            margin: 0;
            color: #3f3fdb;
            font-size: 35px;

        }

        .tieude p {
            margin-top: 5px;
        }

        .tieude h2:hover {
            color: #f97e6c;

        }

        .spgiay {
            margin: auto;
            width: 1200px;
            height: 774px;
            padding-left: 50px;
            margin-bottom: 28px;
        }

        .giay {
            margin-top: 20px;
            width: 270px;
            height: 370px;
            margin-right: 20px;
            float: left;

        }

        .imggiay {
            width: 100%;
            transition: 0.5s ease-in-out;
        }

        .imggiay:hover {
            transform: scale(1.2);
        }

        .giay p {
            margin: 0;
            padding-top: 3px;
            font-family: "montserrat", sans-serif;
            font-size: 14px;
        }

        .hang {
            color: #b6b6b6;
        }

        .gia {
            color: #f97e6c;
        }

        .ten:hover {
            color: #f97e6c;
        }

        .xemthem {
            width: 234px;
            height: 60px;
            background-color: #3f3fdb;
            margin: auto;
            text-align: center;
            margin-top: 28px;
            margin-bottom: 50px;
        }

        .xemthem a {
            text-decoration: none;
            line-height: 60px;
            color: white;
            font-family: "montserrat", sans-serif;
            font-size: 20px;
        }

        .xemthem:hover {
            background-color: #f97e6c;
        }

        .bannerbanchay {
            margin-top: 50px;
            text-align: center;
        }

        .tieude2 {
            margin: 0;
            text-align: center;
        }

        .tieude2 h2 {
            margin: 0;
            color: #3f3fdb;
            font-size: 35px;
        }

        .tieude2 p {
            margin-top: 5px;
        }

        .sneaker {
            background-color: #f6f6f6;
        }

        .childmenu {
            display: flex;
            justify-content: center;

        }

        .childmenu li {

            display: inline-block;
        }

        .childmenu a {
            text-decoration: none;
            color: black;
            list-style: none;
            padding: 10px 40px;
        }

        .childmenu a:hover {
            background-color: #3f3fdb;
            color: white;
        }

        .adi {
            background-color: #3f3fdb;

        }

        .divtong {
            margin: auto;
            width: 1200px;
            height: 564px;
            padding-left: 30px;
            padding-top: 40px;
        }

        .divto {
            width: 570px;
            height: 488px;
            margin: 0px 10px;
            float: left;
            background-image: url("phukien1.webp");
            transition: 2s ease-in-out;
        }

        .divnho1 {
            width: 559px;
            height: 237px;
            float: left;
            margin-bottom: 14px;
            background-image: url("phukien2.webp");
        }

        .divnho2 {
            width: 559px;
            height: 237px;
            float: left;
            margin-bottom: 12px;
            background-image: url("phukien3.webp");
        }

        .textpk {
            margin-left: 30px;
            margin-top: 407px;
        }

        .textpk h1 {
            margin: 0;
            color: white;
            padding-bottom: 10px;
        }

        .textpk p {
            margin: 0;
            color: white;
        }

        .textpk h1:hover {
            color: #f97e6c;
        }

        .textpk p:hover {
            color: #f97e6c;
        }

        .textpkn {
            margin-top: 160px;
            margin-left: 20px;
            color: white;

        }

        .textpkn h1 {
            margin: 0;
            padding-bottom: 10px;

        }

        .textpkn p {
            margin: 0
        }

        .textpkn h1:hover {
            color: #f97e6c;
        }

        .textpkn p:hover {
            color: #f97e6c;
        }

        .feedback {
            margin: 0;
            width: auto;
            height: 700px;
        }

        .bannerfb {
            background-image: url("background-feedback.webp");
            width: 100%;
            height: 100%;
            background-size: cover;
            opacity: 1.5;
            position: absolute;
            filter: saturate(0);
            z-index: -1;
        }

        .bannerfb h2 {
            color: white;
            font-size: 35px;
            text-align: center;
            margin: 0;
            padding-top: 30px;
        }

        .bannerfb p {
            color: white;
            text-align: center;
        }

        .fbcon {
            margin: auto;
            width: 1200px;
            height: 381px;
            padding-left: 28px;
            padding-top: 116px;

        }

        .fb {
            width: 270px;
            height: 260px;
            display: inline-block;
            padding: 7px 7px;
        }

        .fb img {
            width: 270px;
            height: 260px;
        }

        .nonews {
            background-color: blanchedalmond;

        }

        .footer {
            width: 100%;
            height: 400px;
            margin: 0;
            position: relative;
        }

        .footer::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-image: url("img/background-footer.webp");
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

        form {
            padding-left: 804px;
            position: absolute;
            padding-top: 34px;
        }

        .bt:hover {
            background-color: #f97e6c;
            color: white;
        }

        .bannerct img {
            background-size: cover;
            width: 100%;
        }

        .ctsanpham {
            margin-top: 15px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 30px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .sp-item img {
            float: right;
        }

        .sp-item2 img {
            width: 45%;
            background-size: cover;
        }

        .th {
            display: flex;
            padding: 10px 0px;
            align-items: center;
        }

        .th h4 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .giac {
            color: #f97e6c;
        }

        .sp-item3 h2 {
            margin: 0;
        }

        .dath {
            width: 100px;
            height: 50px;
            background-color: #3f3fdb;

            text-align: center;
            line-height: 50px;
            border-radius: 20px;

        }

        .dath a {
            color: #f6f6f6;
            text-decoration: none;
        }

        .dath:hover {
            background-color: #f97e6c;
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
                <form>
                    <input type="text" placeholder="Tìm kiếm..." class="search" required class="text">
                    <input type="submit" value="Tìm kiếm" class="bt">
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
    <div class="bannerct">
        <img src="img/lo.png">
    </div>
    <div class="ctsanpham">
        <div class="sp-item">
        <?php 
            include 'db.php';
            $sql = "select * from ct_sanpham where id_ctsanpham = '1' ";
            $result = $connect->query($sql);
            foreach ($result as $row) {
        ?>
            <img src=<?php echo $row['img_ctsanpham'] ?> alt ="">
            <?php
            }
            ?>
        </div>
        <div class="sp-item2">
            <?php 
            include 'db.php';
            $sql = 'select * from ct_sanpham';
            $result = $connect->query($sql);
            foreach ($result as $row) {
            ?>
            <img src=<?php echo $row['img_ctsanpham1'] ?> alt=""> 
            
          
            <?php
            }
            
            
            ?>
            
            <!--<img src="img/giayut2.webp" alt="">
            <img src="img/giayit3.webp" alt="">
            <img src="img/giayit4.webp" alt="">
            <img src="img/giayit5.webp" alt="">
            <img src="img/giayit6.webp" alt="">
            <img src="img/giayit7.webp" alt="">
            <img src="img/giayit8.webp" alt="">-->
            
        </div>
        <div class="sp-item3">
        <?php 
            include 'db.php';
            $sql = 'select * from ct_sanpham where id_ctsanpham = "1"';
            $result = $connect->query($sql);
            foreach ($result as $row) {
            ?>
            <h2><?php echo $row['name_ctsanpham'] ?></h2>
            <div class="th">
                <p>Thương hiệu: </p>
                <h4><?php echo $row['brand_ctsanpham'] ?></h4>
                <p>Mã: </p>
                <h4><?php echo $row['ma_ctsanpham'] ?></h4>
            </div>
            <p class="dath"><a href><?php echo $row['buy_ctsanpham'] ?></a></p>
            <h2 class="giac"><?php echo $row['price_ctsanpham'] ?>đ</h2>
            <p><a href="">Xem hướng dẫn chọn size</a></p>
            <p><?php echo $row['detail_ctsanpham'] ?></p>
                <?php
            }
            ?>

        </div>

    </div>








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
            <li><a href="asm1.html">Trang chủ</a></li>
            <li><a href="gioithieu.html">Giới thiệu</a></li>
            <li><a href="">Sản phẩm</a></li>
            <li><a href="tintuc.html">Tin tức</a></li>
            <li><a href="lienhe.html">Liên hệ</a></li>
        </div>
        <div class="row3">
            <h2>Chính sách</h2>
            <li><a href="asm1.html">Trang chủ</a></li>
            <li><a href="gioithieu.html">Giới thiệu</a></li>
            <li><a href="">Sản phẩm</a></li>
            <li><a href="tintuc.html">Tin tức</a></li>
            <li><a href="lienhe.html">Liên hệ</a></li>
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