<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="asm1.css">
    <!-- Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5XXDHCXS1E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5XXDHCXS1E');
</script>
</head> 

<body>
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
                        </li>
                        <li><a href="tintuc.php">
                                <font face="Tahoma">TIN TỨC</font>
                            </a>
                        </li>
                        <li><a href="lienhe.php">
                                <font face="Tahoma">LIÊN HỆ</font>
                            </a>
                        </li>

                </div>
                <form>
                    <input type="text" placeholder="Tìm kiếm..." class="search" required class="text">
                    <input type="submit" value="Tìm kiếm" class="bt">
                </form>
                <div class="ll">
                    <p><a href="dangnhap.php">Quản trị</a>
                    <p>
                    <p><a href="dangnhap.php">Đăng nhập</a>
                    <p>
                </div>
            </nav>

        </div>
    </div>
    <div class="bd1">
        <img src="img/back.webp">
    </div>
    <div class="divbanner">
        <div class="divconb">
            <img src="img/icon1.svg">
            <h3>
                GIAO HÀNG TOÀN QUỐC
            </h3>
            <p>
                Miễn phí vận chuyển với các đơn hàng trị giá trên 2.000.000Đ
            </p>
        </div>
        <div class="divconb">
            <img src="img/icon2.svg">
            <h3>
                HỖ TRỢ ONLINE 24/24
            </h3>
            <p>
                Luôn hỗ trợ khách hàng 24/24 tất cả các ngày trong tuần
            </p>
        </div>
        <div class="divconb">
            <img src="img/icon3.svg">
            <h3>
                ĐỔI HÀNG DỄ DÀNG
                </h1>
                <p>
                    Miễn phí đổi trả trong vòng 30 ngày đầu tiên cho tất cả các mặt hàng
                </p>
        </div>
        <div class="divconb">
            <img src="img/icon4.svg">
            <h3>
                QUÀ TẶNG HẤP DẪN
            </h3>
            <p>
                Chương trình khuyễn mãi cực lớn và hấp dẫn hàng tháng
            </p>
        </div>
    </div>
    <div class="spmoi">
        <div class="tieude">
            <a href="">
                <h2>S Ả N P H Ẩ M M Ớ I </h2>
            </a>
            <p>Các sản phẩm mới có mặt tại cửa hàng</p>
        </div>
        <div class="spgiay">
            <?php
            include 'db.php';
            $sql = 'select * from san_pham';
            $result = $connect->query($sql);
            foreach ($result as $row) {

            ?>
                <div class="giay">
                    <a href="ctsanpham.php">
                        <img src=<?php echo $row['img_sanpham']; ?> class="imggiay"></a>
                    <p class="ten"><?php echo $row['name_sanpham']; ?></p>
                    <p class="hang"><?php echo $row['brand_sanpham']; ?></p>
                    <p class="gia"><?php echo $row['price_sanpham']; ?>₫</p>
                </div>
            <?php
            }

            ?>
            <!-- <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/naf.webp" class="imggiay"></a>
                <p class="ten">Nike Air Force 1 07 Lv8</p>
                <p class="hang">Nike</p>
                <p class="gia">3.900.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/naf1.webp" class="imggiay"></a>
                <p class="ten">Nike Air Force 1 07</p>
                <p class="hang">Nike</p>
                <p class="gia">2.000.000₫</p>
                <p class="hang"><strike>3.000.000₫</strike></p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay4.webp" class="imggiay"></a>
                <p class="ten">Lebron 19</p>
                <p class="hang">Nike</p>
                <p class="gia">20.000$</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay5.webp" class="imggiay"></a>
                <p class="ten">Nike Blazer x sacai x KAWS</p>
                <p class="hang">Nike</p>
                <p class="gia">5.100.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay6.webp" class="imggiay"></a>
                <p class="ten">Nike Air</p>
                <p class="hang">Nike</p>
                <p class="gia">5.100.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay7.webp" class="imggiay"></a>
                <p class="ten">Nike Air Huarache PRM QS</p>
                <p class="hang">Nike</p>
                <p class="gia">6.100.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay8.webp" class="imggiay"></a>
                <p class="ten">Kyrie Infinity</p>
                <p class="hang">Nike</p>
                <p class="gia">5.100.000₫</p>
            </div>-->
        </div>
        <div class="xemthem">
            <a href="">Xem tất cả</a>
        </div>
    </div>
    <div class="spbanchay">
        <div class="tieude">
            <a href="">
                <h2>S Ả N P H Ẩ M B Á N C H Ạ Y </h2>
            </a>
            <p>Các sản phẩm bán chạy tại cửa hàng</p>
        </div>
        <div class="bannerbanchay">
            <img src="img/backbanchay.webp">
        </div>

        <div class="spgiay">
            <?php
            include 'db.php';
            $sql = 'select * from san_pham';
            $result = $connect->query($sql);
            foreach ($result as $row) {
            ?>
                <div class="giay">
                    <a href="ctsanpham.php">
                        <img src=<?php echo $row['img_sanpham']; ?> class="imggiay"></a>
                    <p class="ten"><?php echo $row['name_sanpham']; ?></p>
                    <p class="hang"><?php echo $row['brand_sanpham']; ?></p>
                    <p class="gia"><?php echo $row['price_sanpham']; ?>₫</p>
                </div>
            <?php
            }


            ?>
            <!-- <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/naf.webp" class="imggiay"></a>
                <p class="ten">Nike Air Force 1 07 Lv8</p>
                <p class="hang">Nike</p>
                <p class="gia">3.900.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/naf1.webp" class="imggiay"></a>
                <p class="ten">Nike Air Force 1 07</p>
                <p class="hang">Nike</p>
                <p class="gia">2.000.000₫</p>
                <p class="hang"><strike>3.000.000₫</strike></p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay4.webp" class="imggiay"></a>
                <p class="ten">Lebron 19</p>
                <p class="hang">Nike</p>
                <p class="gia">20.000$</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay5.webp" class="imggiay"></a>
                <p class="ten">Nike Blazer x sacai x KAWS</p>
                <p class="hang">Nike</p>
                <p class="gia">5.100.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay6.webp" class="imggiay"></a>
                <p class="ten">Nike Air</p>
                <p class="hang">Nike</p>
                <p class="gia">5.100.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay7.webp" class="imggiay"></a>
                <p class="ten">Nike Air Huarache PRM QS</p>
                <p class="hang">Nike</p>
                <p class="gia">6.100.000₫</p>
            </div>
            <div class="giay">
                <a href="ctsanpham.php">
                    <img src="img/giay8.webp" class="imggiay"></a>
                <p class="ten">Kyrie Infinity</p>
                <p class="hang">Nike</p>
                <p class="gia">5.100.000₫</p>
            </div>-->
        </div>
    </div>
    <div class="xemthem">
        <a href="">Xem tất cả</a>
    </div>
    <div class="sneaker">
        <div class="tieude2">
            <h2>S N E A K E R</h2>
            <p>Các sản phẩm sneaker có mặt tại GRAVITY</p>
        </div>
        <div class="childmenu">
            <ul>
                <li><a href="" class="adi" style="color:white;">ADIDAS</a></li>
                <li><a href="">NIKE</a></li>
                <li><a href="">CONVERSE</a></li>
                <li><a href="">PUMA</a></li>
                <li><a href="">FILA</a></li>
            </ul>
        </div>
        <div class="spgiay">
            <?php
            include 'db.php';
            $sql = 'select * from san_pham2';
            $result = $connect->query($sql);
            foreach ($result as $row) {
            ?>
                <div class="giay">
                    <a href="ctsanpham.php">
                        <img src=<?php echo $row['img_sanpham']; ?> class="imggiay"></a>
                    <p class="ten"><?php echo $row['name_sanpham']; ?></p>
                    <p class="hang"><?php echo $row['brand_sanpham']; ?></p>
                    <p class="gia"><?php echo $row['price_sanpham']; ?>₫</p>
                </div>

            <?php

            }

            ?>
            <!-- <div class="giay">
                <a href="">
                    <img src="img/giay1.2.webp" class="imggiay"></a>
                <p class="ten">Giày Adidas Ultraboost DNA SEA CITY</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">3.900.000₫</p>
            </div>
            <div class="giay">
                <a href="">
                    <img src="img/giay1.3.webp" class="imggiay"></a>
                <p class="ten">Giày Adidas Ultraboost DNA X LEGO</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">2.000.000₫</p>
                <p class="hang"><strike>3.000.000₫</strike></p>
            </div>
            <div class="giay">
                <a href="">
                    <img src="img/giay1.4.webp" class="imggiay"></a>
                <p class="ten">GIÀY Adidas Ultraboost DNA X LEGO đỏ</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">20.000$</p>
            </div>
            <div class="giay">
                <a href="">
                    <img src="img/giay1.5.webp" class="imggiay"></a>
                <p class="ten">Giày Stan Smith</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">5.100.000₫</p>
            </div>
            <div class="giay">
                <a href="">
                    <img src="img/giay1.6.webp" class="imggiay"></a>
                <p class="ten">Giày ULTRABOOST 21</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">5.100.000₫</p>
                <p class="hang"><strike>8.000.000₫</strike></p>
            </div>
            <div class="giay">
                <a href="">
                    <img src="img/giay1.7.webp" class="imggiay"></a>
                <p class="ten">Giày X9000L4</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">6.100.000₫</p>
            </div>
            <div class="giay">
                <a href="">
                    <img src="img/giay1.8.webp" class="imggiay"></a>
                <p class="ten">Giày Forum Exhibit Low</p>
                <p class="hang">ADIDAS</p>
                <p class="gia">5.100.000₫</p>
            </div>-->
        </div>
    </div>
    <div class="phukien">
        <div class="tieude2">
            <h2>P H Ụ K I Ệ N</h2>
            <p>Các phụ kiện có tại GRAVITY</p>
        </div>
        <div class="divtong">
            <?php

            include 'db.php';
            $sql = "select * from phu_kien";
            $result = $connect->query($sql);
            foreach ($result as $row)
            ?>
            <div class="divto">
                <div class="textpk">
                    <h1><?php echo $row['name_phukien']; ?></h1>
                    <p><?php echo $row['more']; ?> </p>
                </div>
            </div>
            <div class="divnho1">
                <div class="textpkn">
                    <h1><?php echo $row['name_phukien']; ?></h1>
                    <p><?php echo $row['more']; ?></p>
                </div>
            </div>
            <div class="divnho2">
                <div class="textpkn">
                    <h1><?php echo $row['name_phukien']; ?></h1>
                    <p><?php echo $row['more']; ?></p>
                </div>
            </div>
        </div>
        <div class="xemthem">
            <a href="">Xem tất cả</a>
        </div>
    </div>
    <div class="feedback">
        <div class="bannerfb">
            <h2>F E E D B A C K</h2>
            <p>ALBUM FEEDBACK của khách hàng gửi về shop GRAVITY</p>
        </div>
        <div class="fbcon">
            <?php
            include 'db.php';
            $sql = "select * from fb";
            $result = $connect->query($sql);
            foreach ($result as $row) {
            ?>
                <div class="fb">
                    <img src=<?php echo $row['img_fb']; ?>>
                </div>

            <?php
            }
            ?>

            <!--<div class="fb">
                <img src="img/fb2.webp">
            </div>
            <div class="fb">
                <img src="img/fb3.webp">
            </div>
            <div class="fb">
                <img src="img/fb4.webp">
            </div>
            <div class="fb">
                <img src="img/fb5.webp">
            </div>
            <div class="fb">
                <img src="img/fb6.webp">
            </div>
            <div class="fb">
                <img src="img/fb7.webp">
            </div>
            <div class="fb">
                <img src="img/fb8.webp">
            </div>-->
        </div>
    </div>

    <!--<div class="tieudenew">
        <a href="">
            <h2>T I N T Ứ C</h2>
        </a>
        <p>Các tin tức mới nhất về thời trang</p>
        <p class="nonews">Không có tin tức nào mới...</p>
    </div>-->
</body>
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
        <?php
        include 'db.php';
        $sql = "select * from footer";
        $result = $connect->query($sql);
        foreach ($result as $row) {



        ?>
            <h2><?php echo $row['name']; ?></h2>
            <li><a href="asm1.html"><?php echo $row['gt1']; ?></a></li>
            <li><a href="gioithieu.html"><?php echo $row['gt2']; ?></a></li>
            <li><a href=""><?php echo $row['gt3']; ?></li>
            <li><a href="tintuc.html"><?php echo $row['gt4']; ?></a></li>
            <li><a href="lienhe.html"><?php echo $row['gt5']; ?></a></li>
    </div>
    <div class="row3">
        <!--<h2>Chính sách</h2>
        <li><a href="asm1.html">Trang chủ</a></li>
        <li><a href="gioithieu.html">Giới thiệu</a></li>
        <li><a href="">Sản phẩm</a></li>
        <li><a href="tintuc.html">Tin tức</a></li>
        <li><a href="lienhe.html">Liên hệ</a></li>
    </div>-->
    <?php
        }


    ?>

    <!-- <div class="row4">
        <h2>Theo dõi chúng tôi</h2>
        <li><a href="">Facebook:</a></li>
        <li><a href="">Instagram:</a></li>
        <li><a href="">Twitter</a></li>
    </div>-->
    </div>

</html>