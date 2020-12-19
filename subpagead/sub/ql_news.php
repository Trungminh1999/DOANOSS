<form style="text-align: center;" action='' method='POST'>
  <table style="margin: auto;padding: 60px;font-size: 24px;" cellpadding='0' cellspacing='0' border='0'>
    <tr>
      <td>
        Tiêu đề :
      </td>
      <td>
        <input type='text' name='txttieude' />
      </td>
    </tr>
    <tr>
      <td>
        Hình :
      </td>
      <td>
        <input type='text' name='txthinh' />
      </td>
    </tr>
    <tr>
      <td>
       Tóm tắt :
     </td>
     <td>
      <input type='text' name='txttomtat' />
    </td>
  </tr>
  <tr>
    <td>
      Nội dung :
    </td>
    <td>
      <input type='text' name='txtnoidung' />
    </td>
  </tr>
  <tr>
    <td>
      Mã tin (Nếu cập nhật hoặc xóa) :
    </td>
    <td>
      <input type='text' name='txtid' />
    </td>
  </tr>
</table>
<input type='submit' name="save" value='Thêm' />
<input type='submit' name="update" value='Cập nhật' />
<input type='submit' name="delete" value='Xóa' />

</form>
<?php 
if(isset($_POST['save'])){
  $tieude = addslashes($_POST['txttieude']);
  $hinh = addslashes($_POST['txthinh']);
  $tomtat = addslashes($_POST['txttomtat']);
  $noidung = addslashes($_POST['txtnoidung']);

  if (!$tieude || !$hinh|| !$tomtat|| !$noidung)
  {
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
    exit;
  }
  if(isset($_POST['txttieude'])){
    if(isset($_POST['txthinh'])){
      if(isset($_POST['txttomtat'])){
        if(isset($_POST['txtnoidung'])){
          $sql = "INSERT INTO news (tieude, hinh, tomtat, noidung) VALUES ('$tieude', '$hinh', '$tomtat', '$noidung')";
          if (mysqli_query($connect, $sql)) {
            echo "Thêm news thành công";
          } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
          }
        }
      }
    }
  }
}

if(isset($_POST['update'])){
  $id = addslashes($_POST['txtid']);
  $id = $id + 0;
  $tieude = addslashes($_POST['txttieude']);
  $hinh = addslashes($_POST['txthinh']);
  $tomtat = addslashes($_POST['txttomtat']);
  $noidung = addslashes($_POST['txtnoidung']);

  if (!$tieude || !$hinh|| !$tomtat|| !$noidung|| !$id)
  {
    echo '<script>alert("Thông tin nhập không hợp lệ.");javascript: history.go(-1);</script>';
    exit;
  }
  $tam = $obj->query("select * from news where matin='$id' limit 1");
  $data = $tam->fetch();
  if(isset($_POST['txtid'])){
    if($data['matin']==$id){
      if(isset($_POST['txttieude'])){
        if(isset($_POST['txthinh'])){
          if(isset($_POST['txttomtat'])){
            if(isset($_POST['txtnoidung'])){
              $sql = "UPDATE news 
              SET tieude = '$tieude',
              hinh = '$hinh', 
              tomtat = '$tomtat',
              noidung = '$noidung' 
              where matin='$id' ";
              if (mysqli_query($connect, $sql)) {
                echo "Cập nhật news thành công";
              } else {
                echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
              }
            }
          }
        }
      }
    }else{
      echo '<script>alert("Mã tin không tồn tại");javascript: history.go(-1);</script>';
      exit;
    }
  }
}

if(isset($_POST['delete'])){
  $id = addslashes($_POST['txtid']);
  if (!$id)
  {
    echo '<script>alert("Vui lòng nhập Mãn tin để xóa.");javascript: history.go(-1);</script>';
    exit;
  }
  if(isset($_POST['txtid'])){
    $tam = $obj->query("select * from news where matin='$id' limit 1");
    $data = $tam->fetch();
    if ($data['matin'] == $id){
      $sql = "DELETE FROM news WHERE matin = '$id'";
      if (mysqli_query($connect, $sql)) {
        echo "Xóa news thành công";
      } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
      }
    }else{
      echo '<script>alert("Mã tin không tồn tại");javascript: history.go(-1);</script>';
      exit;
    }
  }
}

?>