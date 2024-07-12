<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

        .tong {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 30px;
        }

        .show {
            padding: 20px 20px;
        }

        .tong {
            margin-top: 20px;
        }

        .cate {
            text-align: center;
        }
        i{
            color:black;
        }
    </style>
    <div class="container">
        <div class="b">
            <h2>Quản trị hệ thống</h2>

            <nav>
                <ul id="mainmenu">
                    <li><a href="showcate.php">Danh mục</a>
                        <ul class="submenu">
                            <li><a href="showcate.php">Show danh mục</a></li>
                            <li><a href="insertcate.php">Thêm danh mục</a></li>

                        </ul>
                    </li>

                    <li><a href="showpro.php">Sản phẩm</a></li>
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
                    <p>Xin chào : Đỗ Thái Nam</p>
                    <p>Đăng xuất</p>
                </div>
            </div>
            <div class="show">
                <h2>Danh mục sản phẩm</h2>
                <div class ="tong">
                <div class ="cate"><h4>ID</h4></div>
                <div class ="cate"><h4>Name</h4></div>
                <div class ="cate"><h4>Fix</h4></div>
                <div class ="cate"><h4>Delete</h4></div>
                </div>
                <?php
                    include 'db.php';
                    $sql = 'select * from danh_muc';
                    $result = $connect->query($sql);
                    foreach ($result as $row) {
                    ?>
                <div class="tong">
                   
                        <div class="cate">
                            <p><?php echo $row['id_danhmuc']; ?></p>
                        </div>
                        <div class="cate">
                            <p><?php echo $row['name_danhmuc']; ?></p>
                        </div>
                        <div class="cate">
                        <a href ="editcate.php?ID=<?php echo $row['id_danhmuc']?>"><i class="material-icons">edit</i></a>
                        </div>
                        <div class="cate">
                        <a href ="deletecate.php?IDX=<?php echo$row['id_danhmuc']?>"><i class="material-icons">delete</i></a>
                        </div>
                </div>
            <?php
                    }
            ?>



            </div>

        </div>
    </div>
</body>

</html>