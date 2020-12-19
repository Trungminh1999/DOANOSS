<form style="text-align: center;" action='' method='POST'>
  <table style="margin: auto;padding: 60px;font-size: 24px;" cellpadding='0' cellspacing='0' border='0'>
    <tr>
      <td>
        Email :
      </td>
      <td>
        <input type='text' name='txtemail' />
      </td>
    </tr>
    <tr>
      <td>
        Mật khẩu :
      </td>
      <td>
        <input type='text' name='txtpass' />
      </td>
    </tr>
    <tr>
      <td>
       Tên khách hàng :
     </td>
     <td>
      <input type='text' name='txtten' />
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
      Sđt :
    </td>
    <td>
      <input type='text' name='txtsdt' />
    </td>
  </tr>
</table>
<input type='submit' name="save" value='Thêm' />
<input type='submit' name="update" value='Cập nhật' />
<input type='submit' name="delete" value='Xóa' />

</form>
<?php 
if(isset($_POST['save'])){
  $id = addslashes($_POST['txtemail']);
  $pw =  md5($_POST['txtpass']);
  $name = addslashes($_POST['txtten']);
  $dc = addslashes($_POST['txtdc']);
  $sdt = addslashes($_POST['txtsdt']);

  if (!$id || !$pw|| !$name|| !$dc|| !$sdt)
  {
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
    exit;
  }
  if(isset($_POST['txtemail'])){
    $tam = $obj->query("select * from khachhang where email='$id' limit 1");
    $data = $tam->fetch();
    if ($data['email'] == $id){
      echo '<script>alert("Email đã tồn tại");javascript: history.go(-1);</script>';
      exit;
    }
    if(isset($_POST['txtpass'])){
      if(isset($_POST['txtten'])){
        if(isset($_POST['txtdc'])){
          if(isset($_POST['txtsdt'])){
            $sql = "INSERT INTO khachhang VALUES ('$id', '$pw', '$name', '$dc', '$sdt')";
            if (mysqli_query($connect, $sql)) {
              echo "Thêm tài khoản thành công";
            } else {
              echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
            }
          }
        }
      }
    }
  }
}

if(isset($_POST['update'])){
  $id = addslashes($_POST['txtemail']);
  $pw =  md5($_POST['txtpass']);
  $name = addslashes($_POST['txtten']);
  $dc = addslashes($_POST['txtdc']);
  $sdt = addslashes($_POST['txtsdt']);

  if (!$id || !$pw|| !$name|| !$dc|| !$sdt)
  {
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
    exit;
  }
  $tam = $obj->query("select * from khachhang where email='$id' limit 1");
  $data = $tam->fetchAll();
  if(empty($data)){
    echo '<script>alert("Email chưa đăng ký");javascript: history.go(-1);</script>';
    exit;
  }
  foreach ($data as $value) {
    $sql = "UPDATE khachhang 
             SET matkhau = '$pw',
             tenkh = '$name', 
             diachi = '$dc',
             sdt = '$sdt'
             WHERE email = '$id'";
             if (mysqli_query($connect, $sql)) {
               echo "Sửa tài khoản thành công";
             } else {
               echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
             }
  }
  
}

if(isset($_POST['delete'])){
  $id = addslashes($_POST['txtemail']);
  if (!$id)
  {
    echo '<script>alert("Vui lòng nhập Email để xóa.");javascript: history.go(-1);</script>';
    exit;
  }
  if(isset($_POST['txtemail'])){
    $tam = $obj->query("select * from khachhang where email='$id' limit 1");
    $data = $tam->fetch();
    if ($data['email'] == $id){
      $sql = "DELETE FROM khachhang WHERE email = '$id'";
      if (mysqli_query($connect, $sql)) {
        echo "Xóa tài khoản thành công";
      } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
      }
    }else{
      echo '<script>alert("Email không tồn tại");javascript: history.go(-1);</script>';
      exit;
    }
  }
}

?>