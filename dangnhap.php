<?php 
    session_start();
 
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
        body{
            font-family: "montserrat", sans-serif;
        }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        align-items: center;
        
    }
    .log{
        width: 500px;
        height: 500px;
        background-color: lightslategray;
        text-align: center;
        margin: auto;
    }
    .log input{
        margin: 10px 0px;
    }
    
    h3{
        padding: 20px 0px;
    }
    .log .c{
        margin: 10px 0px;
    }
    .t{
        width: 230px;
        height: 30px;
        border-radius: 10px;
    }
    .b{
        width: 100px;
        height: 30px;
        border-radius: 10px;
    }
    .b:hover{
        background-color: #f97e6c;
    }


    </style>
    <div class ="container">
    <div class = "log">
    <h3>Nhập tài khoản của bạn</h3>
    <form method="post">
        <p class ="c"> Tên đăng nhập </p><input type="text" name ="user" class ="t">
        <p class ="c"> Mật khẩu </p><input type="password" name ="pass" class ="t"><br>
        <p class ="for"><a href=""> Quên mật khẩu</a></p>
        <input type="submit" value ="Đăng nhập" name ="log" class ="b">
    </form>
    </div>
    <?php 
        include 'db.php';
    if(isset($_POST['log'])){
        $user = $_POST['user'];
        $pass = sha1($_POST['pass']);
        $sql ="select * from acc where user ='$user' and pass ='$pass'";
        $result = $connect -> query($sql);
        if($result -> rowCount()== 1){
            $_SESSION['user'] = $user;
            header("location: showpro.php");

        }else{
            echo "Không đăng nhập được";
        }
    }



    ?>
    </div>
</body>
</html>