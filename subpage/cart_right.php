<h1>Giỏ hàng </h1>
<style>
	div.templatemo_news_box img{
		width: 200px; height: auto;
	}
</style>


<?php 
if(isset($_SESSION['dangnhap'])){
	$email = $_SESSION['dangnhap'];
	$tam = $obj->query("select * from giohang where email ='$email' limit 1 ");
	$data = $tam->fetchAll();
	$i=0;
	foreach ($data as $value) 
	{
		$dsSP = explode('/',$value['danhsach'] );
		$dsSL = explode('/',$value['soluong'] );
	}
	if(empty($dsSP)){
		echo "Không có sản phẩm trong giỏ hàng";
	}else{
		foreach ($dsSP as $value){
		?>
		<div class="templatemo_news_box">
			<table style="font-size: 12px;width:600px" cellpadding='5' cellspacing='5' border='0'>
				<tr>
					<td style="text-align: left;width:370px">
						<?php 
						$tam = $obj->query("select * from sanpham where masp='$dsSP[$i]' ");
						$data = $tam->fetch();
						?> <a href="chitiet.php?masp=<?php echo $data['masp'] ?>"><?php echo $data['tensp']?></a><?php
						?>
					</td>
					<td style="text-align: right;width:30px">
						<?php echo  $dsSL[$i]; ?>
					</td>
					<td style="text-align: left;width:100px">
						<?php 
						echo $data['gia'].' VNĐ';
						?>
					</td>
					<td style="text-align: left;width:100px">
						<?php 
						echo $data['gia']*$dsSL[$i].' VNĐ';
						?>
					</td>
				</tr>
			</table>

			<?php $i++; ?>
			<div class="cleaner">&nbsp;</div>
		</div>
		<?php
	}
		?> 
		<br><div style="float: right;font-size: 24px;"><a href="thanh_toan.php"> Đặt hàng</a></div>
		<?php
	}
	
}


?>

<div class="cleaner_with_height">&nbsp;</div>

<a href="index.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>