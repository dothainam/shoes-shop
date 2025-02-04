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
        .ll {
            margin-left: 320px;
            display: flex;
            align-items: center;
        }

        .ll p {
            padding-right: 5px;
        }
        #mainmenu ul.submenu ul.submenu {
            left: 200px;
            padding: 15px 0px;
            width: 200px;
            bottom: -152px;
        }

        .tintuc img {
            width: 100%;
            padding-bottom: 29px;
        }

        .new {
            width: 100%;
            height: 900px;
        }

        .ctnnew {
            width: 80%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            height: 747px;
        }

        .news {
            width: 348px;
            height: 439px;
            float: left;
            padding: 9px 10px;
        }

        .title {
            font-size: 17px;
            margin: 0;
            padding-bottom: 5px;
        }

        .author {
            margin: 0;
        }

        .nd {
            padding-top: 5px;
            font-size: 10px;
            margin: 0;
        }

        .news img {
            width: 100%;
        }

        .footer {
            width: 100%;
            height: 400px;
            margin: 0;
            position: relative;
        }

        iframe {
            width: 100%;
            height: 247px;
        }

        .title a {
            color: black;
            text-decoration: none;
        }

        .news .title a:hover {
            color: #f97e6c
        }

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

        form {
            margin-left: 804px;
            position: absolute;
            padding-top: 34px;
        }

        .bt:hover {
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
    <div class="tintuc">
        <img src="img/new.png">
    </div>
    <div class="new">
        <div class="ctnnew">
            <div class="news">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uuSj5EW6ELA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p class="title"><a href="cttintuc.php"> James mang đôi OFF-WHITE x Nike Air Force 1 University Yellow của Virgil Abloh có
                        gì đặc biệt?</a></p>
                <p class="author">Đỗ Thái Nam</p>
                <p class="nd">
                    OFF-WHITE x Nike Air Force 1 University Yellow là đôi sneakers được hé lộ trong website
                    public—domain.com, một websit...
                </p>
            </div>
            <div class="news">
                <img src="img/new2.webp">
                <p class="title"><a href="cttintuc.php"> Loạt các phối màu của adidas Stan Smith được tung ra dành cho tín đồ mê sneakers</a>
                </p>
                <p class="author">Đỗ Thái Nam</p>
                <p class="nd">

                    adidas Stan Smith đã không còn xa lạ với bất cứ ai yêu mến sneakers trên toàn cầu nói chung và tại
                    Việt Nam nói riêng...

                </p>
            </div>
            <div class="news">
                <img src="img/new3.webp">
                <p class="title"><a href="cttintuc.php"> AIR FORCE 1 Love Women – Phối màu dành riêng cho một nửa thế giới</a>
                </p>
                <p class="author">Đỗ Thái Nam</p>
                <p class="nd">

                    Nike lại tiếp tục tung ra một phối màu sử dụng tông màu trắng chủ đạo bằng chất liệu canvas kết hợp
                    denim trên đôi sn...

                </p>
            </div>
            <div class="news">
                <img src="img/new4.webp">
                <p class="title"><a href="cttintuc.php">Những hoài niệm trong Tuần lễ Thời trang Milan</a>
                </p>
                <p class="author">Đỗ Thái Nam</p>
                <p class="nd">

                    Thương hiệu thời trang Nhật Bản Onitsuka Tiger tiếp tục trình làng bộ sưu tập (BST) đương đại kết
                    hợp giữa thời trang...

                </p>
            </div>
            <div class="news">
                <img src="img/new5.webp">
                <p class="title"><a href="cttintuc.php">Tiger ra mắt đồng phục chính thức của Intel World Open</a>


                </p>
                <p class="author">Đỗ Thái Nam</p>
                <p class="nd">
                    Thương hiệu thời trang Nhật Bản Onitsuka Tiger tự hào thông báo về việc tham gia Intel World Open –
                    giải đấu Esports ...
                </p>
            </div>
            <div class="news">
                <img src="img/new6.webp">
                <p class="title"><a href="cttintuc.php">Vợ của Kobe Bryant đã thỏa thuận chấm dứt hợp đồng cùng Nike</a>
                </p>
                <p class="author">Đỗ Thái Nam</p>
                <p class="nd">

                    Vanessa Bryant, vợ của Kobe Bryant – VĐV Bóng rổ có tầm ảnh hưởng cực lớn trong nền văn hóa sneakers
                    cũng như bộ môn ...

                </p>
            </div>
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