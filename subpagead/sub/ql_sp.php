<form style="text-align: center;" action='' method='POST'>
    <table style="margin: auto;padding: 60px;font-size: 24px;" cellpadding='0' cellspacing='0' border='0'>
        <tr>
            <td>
                Tên sản phẩm :
            </td>
            <td>
                <input type='text' name='txtTensp' />
            </td>
        </tr>
        <tr>
            <td>
                Mã sản phẩm :
            </td>
            <td>
                <input type='text' name='txtMasp' />
            </td>
        </tr>
        <tr>
            <td>
             Giá :
         </td>
         <td>
            <input type='text' name='txtGia' />
        </td>
    </tr>
    <tr>
        <td>
            Link ảnh :
        </td>
        <td>
            <input type='text' name='txthinh' />
        </td>
    </tr>
    <tr>
        <td>
            Mã loại :
        </td>
        <td>
            <input type='text' name='txtMaloai' />
        </td>
    </tr>
    <tr>
        <td>
            Số lượng :
        </td>
        <td>
            <input type='text' name='txtsoluong' />
        </td>
    </tr>
</table>
<input type='submit' name="save" value='Thêm' />
<input type='submit' name="update" value='Cập nhật' />
<input type='submit' name="delete" value='Xóa' />

</form>
<?php 
if(isset($_POST['save'])){
    $tensp = addslashes($_POST['txtTensp']);
    $masp = addslashes($_POST['txtMasp']);
    $gia = addslashes($_POST['txtGia']);
    $hinh = addslashes($_POST['txthinh']);
    $loai = addslashes($_POST['txtMaloai']);
    $sl = addslashes($_POST['txtsoluong']);

    if (!$tensp || !$masp|| !$gia|| !$hinh|| !$loai|| !$sl)
    {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
        exit;
    }
    if(isset($_POST['txtTensp'])){
        if(isset($_POST['txtMasp'])){
            $tam = $obj->query("select * from sanpham where masp='$masp' limit 1");
            $data = $tam->fetch();
            if ($data['masp'] == $masp){
                echo '<script>alert("Mã sản phẩm đã tồn tại");javascript: history.go(-1);</script>';
                exit;
            }
            if(isset($_POST['txtGia'])){
                if(isset($_POST['txthinh'])){
                    if(isset($_POST['txtMaloai'])){
                        if(isset($_POST['txtsoluong']))
                        {
                            $sql = "INSERT INTO sanpham VALUES ('$masp', '$tensp', '$gia', '$hinh', '$loai', '$sl')";
                            if (mysqli_query($connect, $sql)) {
                              echo "Thêm sản phẩn thành công";
                          } else {
                              echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
                          }

                      }
                  }
              }
          }
      }
  }
}

if(isset($_POST['update'])){
    $tensp = addslashes($_POST['txtTensp']);
    $masp = addslashes($_POST['txtMasp']);
    $gia = addslashes($_POST['txtGia']);
    $hinh = addslashes($_POST['txthinh']);
    $loai = addslashes($_POST['txtMaloai']);
    $sl = addslashes($_POST['txtsoluong']);
    if (!$tensp || !$masp|| !$gia|| !$hinh|| !$loai|| !$sl)
    {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
        exit;
    }
    if(isset($_POST['txtTensp'])){
        if(isset($_POST['txtMasp'])){
            $tam = $obj->query("select * from sanpham where masp='$masp' limit 1");
            $data = $tam->fetch();
            if ($data['masp'] == $masp){
                if(isset($_POST['txtGia'])){
                    if(isset($_POST['txthinh'])){
                        if(isset($_POST['txtMaloai'])){
                            if(isset($_POST['txtsoluong']))
                            {
                                $sql = "UPDATE sanpham 
                                SET tensp = '$tensp',
                                gia = '$gia', 
                                hinh = '$hinh',
                                maloai = '$loai', 
                                soluong = '$sl' 
                                WHERE masp = '$masp'";

                                if (mysqli_query($connect, $sql)) {
                                  echo "Sửa sản phẩn thành công";
                              } else {
                                  echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
                              }

                          }
                      }
                  }
              }
          }else{
            echo '<script>alert("Mã sản phẩm không tồn tại");javascript: history.go(-1);</script>';
            exit;
        }
    }
}
}

if(isset($_POST['delete'])){
    $masp = addslashes($_POST['txtMasp']);
    if (!$masp)
    {
        echo '<script>alert("Vui lòng nhập Mã sản phẩm để xóa.");javascript: history.go(-1);</script>';
        exit;
    }
    if(isset($_POST['txtMasp'])){
        $tam = $obj->query("select * from sanpham where masp='$masp' limit 1");
        $data = $tam->fetch();
        if ($data['masp'] == $masp){
            $sql = "DELETE FROM sanpham WHERE masp = '$masp'";
            if (mysqli_query($connect, $sql)) {
              echo "Xóa sản phẩn thành công";
          } else {
              echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
          }
      }else{
        echo '<script>alert("Mã sản phẩm không tồn tại");javascript: history.go(-1);</script>';
        exit;
    }
}
}
mysqli_close($connect);

?>