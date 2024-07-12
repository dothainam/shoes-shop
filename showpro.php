<?php 
    session_start();
   


?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
        .tong{
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
            gap:10px;
        }
        .pro{
            text-align: center;
            
        }
        .pro img{
            width: 40px;
            height: 30px;
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
                            <li><a href="">Show sản phẩm</a></li>
                            <li><a href="">Thêm sản phẩm</a></li>
                            
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
                <p><a href="admin.php">Trang chủ</a></p>
                <div class="qt">
                    
                    <p><?php if(isset($_SESSION['user'])){
        echo "Chào bạn ".$_SESSION['user'];
    }else{
        echo "Bạn chưa đăng nhập";
    } ?></p>
                    <p>Đăng xuất</p>
                </div>
            </div>
            <div class="show">
            <h2>Sản phẩm</h2>
            <div class ="tong">
            <div class ="pro"><h4>ID</h4></div>
            <div class ="pro"><h4>NAME</h4></div>
            <div class ="pro"><h4>ANH</h4></div>
            <div class ="pro"><h4>GIA</h4></div>
            <div class ="pro"><h4>CHI TIET</h4></div>
            <div class ="pro"><h4>ID DANH MUC</h4></div>
            <div class ="pro"><h4>Edit</h4></div>
            <div class ="pro"><h4>Delete</h4></div>
            </div>
            <?php

                    include 'db.php';
                    $sql = 'select * from san_pham';
                    $result = $connect->query($sql);
                    foreach ($result as $row) {
                        ?>
            <div class ="tong">
            <div class ="pro"><?php echo $row['id_sanpham'] ?></div>
            <div class ="pro"><?php echo $row['name_sanpham'] ?></div>
            <div class ="pro"><img src=<?php echo $row['img_sanpham'] ?>></div>
            <div class ="pro"><?php echo $row['price_sanpham'] ?></div>
            <div class ="pro"><?php echo $row['detail_sanpham'] ?></div>
            <div class ="pro"><?php echo $row['id_danhmuc'] ?></div>
            <div class ="pro"><i class="material-icons">edit</i></div>
            <div class ="pro"><i class="material-icons">delete</i></div>
            </div>
            <?php 

                    }
            ?>




            </div>

        </div>
    </div>
</body>

</html>