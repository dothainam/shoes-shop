<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "montserrat", sans-serif;
        }

        .container {
            display: flex;

        }

        .a {
            width: 100%;

        }

        .a .header p {
            color: white;
        }

        .b {
            background-color: black;
            color: white;
            width: 320px;
            height: 800px;
        }

        .b h2 {
            text-align: center;
            padding-top: 20px;
        }

        .b ul li {
            padding: 20px 5px;

        }

        nav {
            padding-top: 75px;
            border-bottom: 1px solid gray;
        }

        .header {
            display: flex;
            background-color: black;
            justify-content: space-between;
            line-height: 72px;
        }

        .qt {
            display: flex;
            margin-right: 10px;

        }

        .qt p {
            padding-left: 25px;
        }

        li:hover {
            background-color: gray;
        }

        a {
            text-decoration: none;
            color: white;
        }

        #mainmenu ul.submenu {
            position: absolute;
            background-color: black;
            padding: 15px 0px;
            list-style: none;
            width: 320px;
            display: none;
        }

        #mainmenu li:hover>ul.submenu {
            display: block;
        }
        .show h2{
            padding-top:30px;
            padding-left: 30px;
        }
    </style>
    <div class="container">
        <div class="b">
            <h2>Quản trị hệ thống</h2>

            <nav>
                <ul id="mainmenu">
                    <li><a href="">Danh mục</a>
                        <ul class="submenu">
                            <li><a href="showcate.php">Show danh mục</a></li>
                            <li><a href="insertcate.php">Thêm danh mục</a></li>
                            
                        </ul>
                    </li>

                    <li><a href="showpro.php">Sản phẩm</a>
                    <ul class="submenu">
                            <li><a href="showpro.php">Show sản phẩm</a></li>
                            <li><a href="insertpro.php">Thêm sản phẩm</a></li>
                            
                        </ul>
                
                
                </li>
                    <li><a href="">User</a></li>
                    <li><a href="">Slide</a></li>
                    <li><a href="">Thông tin web</a></li>
                    <li><a href="">Quản lý comment</a></li>

                </ul>
            </nav>

        </div>
        <div class="a">
            <div class="header">
                <p><a href="asm1.php">Trang chủ</a></p>
                <div class="qt">
                    <p>Xin chào : Đỗ Thái Nam</p>
                    <p>Đăng xuất</p>
                </div>
            </div>
            <div class="show">
            <form action="" method="post" enctype="multipart/form-data">
        <p>Tên sản phẩm</p> <input type="text" name="name_sanpham">
        <p>Ảnh sản phẩm</p> <input type="file" name="img_sanpham">
        <p>Giá sản phẩm</p> <input type="text" name="price_sanpham">
        <p>Giá sale sản phẩm</p> <input type="text" name="pricesale_sanpham">
        <p>Chi tiết sản phẩm</p> <input type="text" name="detail_sanpham">
        <p>Chi tiết sản phẩm</p> <input type="text" name="id_ctsanpham">
        <p>Chi tiết sản phẩm</p> <input type="text" name="brand_sanpham">
        <p>Hang</p> <input type="text" name="brand">
        <p>Danh muc news</p> 
        <select name="id_danhmuc" id="">
            <option value="1">Nike</option>
            <option value="2">ADIDAS</option>
        </select> <br>
        <input type="submit" name="submit" value="submit">
        </form>
        <?php 
    include 'db.php';
    if (isset($_POST['submit'])) {
        $name_sanpham=$_POST['name_sanpham'];
       // $img_sanpham=$_POST['img_sanpham'];
        $price_sanpham=$_POST['price_sanpham'];
        $pricesale_sanpham=$_POST['pricesale_sanpham'];
        $detail_sanpham = $_POST['detail_sanpham'];
        $id_ctsanpham = $_POST['id_ctsanpham'];
        $brand_sanpham = $_POST['brand_sanpham'];
        $id_danhmuc = $_POST['id_danhmuc'];
       

        $name_img=$_FILES['img_sanpham']['name'];
        $tmp_img=$_FILES['img_sanpham']['tmp_name']; // ten tam thoi cua file
        $type_img=$_FILES['img_sanpham']['type'];    // loai file
        $size_img=$_FILES['img_sanpham']['size'];    // size file

        if ($type_img=="image/jpeg" || $type_img=="image/png") {
            if($size_img<720000){
                move_uploaded_file($tmp_img,"img/$name_img");
                // thêm dữ liệu vào bảng news
                $sqlInsert="insert into san_pham values(null,'$name_sanpham','$name_img',$price_sanpham,$pricesale_sanpham,'$detail_sanpham',$id_ctsanpham,'$brand_sanpham','$id_danhmuc')";
                $result= $connect->prepare($sqlInsert);
                if ($result->execute()) {
                    header("Location: showpro.php");
                }else{
                    echo "ko them duoc";
                }
            }else{
                echo "file quá lớn !";
            }
        } else {
           echo 'file ko dung dinh dang';
        }
    }
        ?>


            
 

            </div>

        </div>
    </div>
</body>

</html>