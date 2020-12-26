<?php

if(isset($_SESSION['dangnhap'])){
    $email = $_SESSION['dangnhap'];
    $tam = $obj->query("select * from khachhang where email='$email' limit 1");
    $data = $tam->fetch();
    ?>
    <form action='logout.php' method='POST' >
        <h1>Thông tin <?php echo $data['tenkh'] ?>
        <input style="float: right;" type='submit' name="dangxuat" value='Đăng xuất' /></h1>
    </form>
    <form style="font-size: 16px;" method='POST'>
        <br><div style="margin-left: 60px;">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $email ?></div>
        <br><div style="margin-left: 60px;">Mật khẩu: <input style="float: right; padding-right: 90px;margin-right: 30%;" type='password' name='txtpass' ></div>
        <br><div style="margin-left: 60px;">Nhập lại mật khẩu: <input style="float: right; padding-right: 90px;margin-right: 30%;" type='password' name='txtpass2' ></div>
        <br><div style="margin-left: 60px;">Tên: <input style="float: right; padding-right: 90px;margin-right: 30%;" type='text' name='txtname' ></div>
        <br><div style="margin-left: 60px;">Địa chỉ: <input style="float: right; padding-right: 90px;margin-right: 30%;" type='text' name='txtdc' ></div>
        <br><div style="margin-left: 60px;">Sđt: <input style="float: right; padding-right: 90px;margin-right: 30%;" type='text' name='txtsdt' ></div>
        <br><input style="float: right;" type='submit' name="luu" value='Lưu' />
    </form>

    <?php 
    if(isset($_POST['luu'])){
        $pw =  md5($_POST['txtpass']);
        $pw2 =  md5($_POST['txtpass2']);
        $name = addslashes($_POST['txtname']);
        $dc = addslashes($_POST['txtdc']);
        $sdt = addslashes($_POST['txtsdt']);

        if (!$pw || !$pw2|| !$name|| !$dc|| !$sdt)
        {
            echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
            exit;
        }
        if ($pw != $pw2)
        {
            echo '<script>alert("Nhập lại mật khẩu không đúng.");javascript: history.go(-1);</script>';
            exit;
        }
        $sql = "UPDATE khachhang 
                            SET matkhau = '$pw',
                            tenkh = '$name', 
                            diachi = '$dc',
                            sdt = '$sdt'  
                            WHERE email = '$email'";
                            if (mysqli_query($connect, $sql)) {
                              echo "Lưu thông tin thành công";
                            } else {
                                echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
                                }
                            }
?>
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
        <meta http-equiv="refresh" content="15;url=index.php">
    </head>
    <body>
        <form action='login.php' method='POST'>
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