<form action='' method='POST'>
    <fieldset>
        <legend>Đặt hàng</legend>
        <table style="margin: auto; font-size: 16px;" cellpadding='5' cellspacing='5' border='0'>
            <tr>
                <td>
                    Người nhận :
                </td>
                <td>
                    <input type='text' name='txtnhan' />
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ :
                </td>
                <td>
                    <input type='text' name='txtdc' />
                </td>
            </tr>
            <tr>
                <td>
                    Số điện thoại người nhận :
                </td>
                <td>
                    <input type='text' name='txtsdt' />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' name="dathang" value='Đặt hàng' />
                    <a href='cart.php' title='Quay lại'>Quay lại</a>
                </td>
            </tr>
        </table>

    </fieldset>
</form>

<?php 
if(isset($_POST['dathang'])){
    $nhan = addslashes($_POST['txtnhan']);
    $dc = addslashes($_POST['txtdc']);
    $sdt = addslashes($_POST['txtsdt']);
    $xn = false;
    $date = date("Y-m-d");
    if (!$nhan || !$dc || !$sdt)
    {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
        exit;
    }
    $email = $_SESSION['dangnhap'];
    $tam = $obj->query("select * from giohang where email ='$email' limit 1 ");
    $data = $tam->fetchAll();
    $i=0;
    foreach ($data as $value) 
    {
        $strds=$value['danhsach'];
        $dsSP = explode('/',$strds );
        $strsl=$value['soluong'];
        $dsSL = explode('/', $strsl);
    }
    $tongtien=0;
    foreach ($dsSP as $value){
        $tam2 = $obj->query("select * from sanpham where masp='$dsSP[$i]' ");
        $data2 = $tam2->fetch();
        $tongtien+= $data2['gia'] * $dsSL[$i];

        $i++;
    }
    $sql = "INSERT INTO donhang (madon, danhsach ,soluong,thanhtien,diachi, sdt,nguoinhan,xacnhan, ngaydat) VALUES (default ,'$strds', '$strsl', '$tongtien', '$dc', '$sdt', '$nhan', false, '$date')";
    if (mysqli_query($connect, $sql)) {
            $sql1 = "DELETE FROM giohang WHERE email='$email'";
            if (mysqli_query($connect, $sql1)) {
                echo "Xóa thành công";
            } else {
                echo "Lỗi: " . $sql1 . "<br>" . mysqli_error($connect);
            }
            echo '<script>alert("Đặt hàng thành công");javascript: history.go(-2);</script>';
          } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
          }



}


?>