<style>
    div.templatemo_product_box img{
        width: 100px; height: 120px;
    }
</style>

<?php
	$search = $_GET['search'];
    $tam = $obj->query("select * from sanpham where tensp like '%".$_GET['search']."%'");
	$data = $tam->fetchAll();
 	foreach ($data as $value) 
	{
		?>
			<div class="templatemo_product_box">
				<h1><?php echo $value['tensp'] ?></h1>
				<img src="<?php echo $value['hinh'] ?>" alt="image" />
				<div class="product_info">
					<h3><?php echo number_format($value['gia']) ?> VNĐ</h3>
					<div class="buy_now_button"><a href="cart.php">Thêm vào</a></div>
					<div class="detail_button"><a href="chitiet.php?masp=<?php echo $value['masp'] ?>">Detail</a></div>
				</div>
				<div class="cleaner">&nbsp;</div>
			</div>
		<?php
	}
        
         
?>