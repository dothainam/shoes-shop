



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
        .show {
            padding: 20px 20px;
        }
        .tong {
            margin-top: 20px;
        }
        form input{
            margin: 10px 0px;
            padding:10px;
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
                <p><a href="admin.php">Trang chủ</a></p>
                <div class="qt">
                    <p>Xin chào : Đỗ Thái Nam</p>
                    <p>Đăng xuất</p>
                </div>
            </div>
            <div class="show">
            <h2>Thêm danh mục</h2>
                <div class ="tong">
            <form action="" method ="post" enctype="multipart/form-data">
                <h4>Name</h4><input type="text" name ="name_danhmuc" required><br>
                <input type="submit" value ="Thêm" name ="submit">
            </form>
            <?php 
            include 'db.php';
            if(isset($_POST['submit'])){
                $name_danhmuc = $_POST['name_danhmuc'];
                $sql_insert = "insert into danh_muc values(null,'$name_danhmuc')";
                $result = $connect -> prepare($sql_insert);
                if($result->execute()){
                    header('Location: showcate.php');
                }else{
                    echo "Khong them duoc san pham";
                }
            }
            
            
            
            ?>




            </div>
            </div>

        </div>
    </div>
</body>

</html>