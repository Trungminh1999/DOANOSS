<?php
$masp= $_GET['masp'];
$tam = $obj->query("select * from sanpham where masp='$masp' ");
$data = $tam->fetch();
?>
<h1><?php echo $data['tensp'] ?></h1>
<div class="image_panel"><img src="<?php echo $data['hinh'] ?>" alt="CSS Template" width="100" height="150" /></div>

<ul style="font-size: 16px;">
    <li><?php echo "Tên: " .$data['tensp'] ?></li>
    <li><?php echo "Giá: " .$data['gia']." VNĐ" ?></li>
    <li><?php echo "Số lượng: " .$data['soluong'] ?></li>
    <li><?php echo "Mã loại: " .$data['maloai'] ?></li>
</ul>

<br><br><br><br><br>
<h1>Các sản phẩm cùng loại</h1>
<?php 
	$maloai = $data['maloai'];
	$tam1 = $obj->query("select * from sanpham where maloai='$maloai' ");
	$data1 = $tam1->fetchAll();
	foreach ($data1 as $value) {
		?>  
			<ul>
				<li>
					<?php 
					if($value['masp'] == $data['masp']){

					}else{
						?>
						<a href="chitiet.php?masp=<?php echo $value['masp'] ?>"><?php echo $value['tensp']?></a><?php
					}

					 ?>

				</li>
			</ul>
		<?php
	}
	
?>

<div class="cleaner_with_height">&nbsp;</div>

<a href="index.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>