<form style="text-align: center;" action='' method='POST'>
    <table style="margin: auto; padding: 60px;font-size: 24px;" cellpadding='0' cellspacing='0' border='0'>
        <tr>
            <td>
                Tên loại :
            </td>
            <td>
                <input type='text' name='txtTenloai' />
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
    </table>
    <input type='submit' name="save" value='Thêm' />
    <input type='submit' name="update" value='Cập nhật' />
    <input type='submit' name="delete" value='Xóa' />
    
</form>
<?php

if(isset($_POST['save'])){
    $tenloai = addslashes($_POST['txtTenloai']);
    $maloai = addslashes($_POST['txtMaloai']);
    if (!$tenloai || !$maloai)
    {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
        exit;
    }

    if(isset($_POST['txtTenloai'])){
        $tam = $obj->query("select * from loai where maloai='$maloai' limit 1");
        $data = $tam->fetch();
        if ($data['maloai'] == $maloai){
            echo '<script>alert("Mã loại đã tồn tại");javascript: history.go(-1);</script>';
            exit;
        }
        if ($data['tenloai'] == $tenloai){
            echo '<script>alert("Tên loại đã tồn tại");javascript: history.go(-1);</script>';
            exit;
        }
        if(isset($_POST['txtMaloai'])){
            
            $sql = "INSERT INTO loai VALUES ('$maloai', '$tenloai')";
            if (mysqli_query($connect, $sql)) {
                echo "Thêm loại thành công";
            } else {
               echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
           }
           
       }
   }
}

if(isset($_POST['update'])){
    $tenloai = addslashes($_POST['txtTenloai']);
    $maloai = addslashes($_POST['txtMaloai']);
    if (!$tenloai || !$maloai)
    {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin.");javascript: history.go(-1);</script>';
        exit;
    }
    if(isset($_POST['txtTenloai'])){
        if(isset($_POST['txtMaloai'])){
            $tam = $obj->query("select * from loai where maloai='$maloai' limit 1");
            $data = $tam->fetch();
            if ($data['maloai'] == $maloai){
                $sql = "UPDATE loai SET tenloai = '$tenloai' WHERE maloai = '$maloai'";              
                if (mysqli_query($connect, $sql)) {
                    echo "Sửa loại thành công";
                } else {
                    echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
                }
            }else{
                echo '<script>alert("Mã loại không tồn tại");javascript: history.go(-1);</script>';
                exit;
            }       
        }
    }
}

if(isset($_POST['delete'])){
    $tenloai = addslashes($_POST['txtTenloai']);
    $maloai = addslashes($_POST['txtMaloai']);
    if (!$maloai)
    {
        echo '<script>alert("Vui lòng nhập Mã loại để xóa.");javascript: history.go(-1);</script>';
        exit;
    }
    if(isset($_POST['txtMaloai'])){
        $maloai = addslashes($_POST['txtMaloai']);
        $sql = "DELETE FROM loai WHERE maloai = '$maloai'";
        if (mysqli_query($connect, $sql)) {
            echo "Xóa loại thành công";
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($connect);
        }         
    }
}

?>