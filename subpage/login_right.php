<?php

if(isset($_SESSION['dangnhap'])){
    $email = $_SESSION['dangnhap'];
    
    ?>
    <form action='logout.php' method='POST'>
        <h1>Thông tin <?php echo $email ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input style="text-align: right;" type='submit' name="dangxuat" value='Đăng xuất' />
    </form>
        </h1>
<html>
<head>
<script type="text/javascript">
<!--
function delayer(){
    window.location = "index.php"
}
//-->
</script>
</head>
<body onLoad="setTimeout('delayer()', 3)">
</body>
</html>
    <?php

}else{
    if(isset($_POST['dangnhap'])){
        $username = $_POST['txtUsername'];
        $password = md5($_POST['txtPassword']);
        $tam = $obj->query("select * from khachhang where email='$username' and matkhau='$password' limit 1");
        $data = $tam->fetch();
        if($data['email']==$username && $data['matkhau'] == $password){
            $_SESSION['dangnhap']=$username;
            echo '<script>alert("Đăng nhập thành công.");</script>';
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng. Làm ơn đăng nhập lại.");</script>';
        }
    }
    ?> 
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">
        <!--
        function delayer(){
            window.location = "index.php"
        }
        //-->
        </script>
    </head>
    <body onLoad="setTimeout('delayer()', 100)">
        <form action='dangnhap.php' method='POST'>
            <fieldset>
                <legend>Đăng nhập</legend>
                <table style="margin: auto; font-size: 16px;" cellpadding='5' cellspacing='5' border='0'>
                    <tr>
                        <td>
                            Tên đăng nhập :
                        </td>
                        <td>
                            <input type='text' name='txtUsername' />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu :
                        </td>
                        <td>
                            <input type='password' name='txtPassword' />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type='submit' name="dangnhap" value='Đăng nhập' />
                            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
                        </td>
                    </tr>
                </table>

            </fieldset>
        </form>
    </body>
    </html>
    <?php
}

?>


<!-- ----------  chân trang-------------- -->
<div class="cleaner_with_height">&nbsp;</div>
<a href="index.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>