<?php
	if(isset($_SESSION['dangnhap'])){
    	$email = $_SESSION['dangnhap'];
    	?> 
    	<div style="font-size: 16px; text-align: center;">
    		<br><br><br>Xin chào <?php echo $email ?> bạn đã có tài khoản, vui lòng đăng xuất trước khi đăng ký mới
    	</div><?php
    	
    }else{
	if(isset($_POST['dangky'])){
		$id = 		addslashes($_POST['txtid']);
		$pw =  		addslashes($_POST['txtpass']);
		$pw = 		md5($pw);
		$name = 	addslashes($_POST['txthoten']);
		$dc =  		addslashes($_POST['txtdiachi']);
		$sdt =  	addslashes($_POST['txtsdt']);
		if (!$id || !$pw || !$name || !$dc || !$sdt)
	    {
	        echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
	        exit;
	    }
        if(isset($_POST['txtid'])){
        	
        	$tam = $obj->query("select * from khachhang where email='$id' limit 1");
        	$data = $tam->fetch();

        	if ($data['email'] == $id){
        		echo '<script>alert("Email đã tồn tại");javascript: history.go(-1);</script>';
		        exit;
		    }
		    if ($pw != md5($_POST['txtpass2'])){
        		echo '<script>alert("Nhập lại mật khẩu sai");javascript: history.go(-1);</script>';
		        exit;
		    }

		    $them = "INSERT INTO khachhang VALUES ('$id', '$pw', '$name', '$dc', '$sdt')";
			mysqli_query($connect,$them);
        }
    }
    	?> 
    <form action="" method="post">
	<fieldset>
            <legend>Đăng ký</legend>
				<table style="margin: auto; font-size: 16px;" cellpadding='5' cellspacing='5' border='0'>
					<tr>
						<td>Email :</td>
						<td><input type="text" name="txtid"></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="txtpass"></td>
					</tr>
					<tr>
						<td>Lặp lại password :</td>
						<td><input type="password" name="txtpass2"></td>
					</tr>
					<tr>
						<td>Họ tên :</td>
						<td><input type="text" name="txthoten"></td>
					</tr>
					<tr>
						<td>Địa chỉ :</td>
						<td><input type="text" name="txtdiachi"></td>
					</tr>
					<tr>
						<td>Số điện thoại :</td>
						<td><input type="text" name="txtsdt"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" name="dangky" value="Đăng ký"></td>
					</tr>

				</table>
	</fieldset>
</form>
    <?php
    }

?>




<div class="cleaner_with_height">&nbsp;</div>
<a href="index.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>