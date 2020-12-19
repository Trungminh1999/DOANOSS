<?php  
$tam = $obj->query("select * from donhang");
$data = $tam->fetchAll();

foreach ($data as $value) 
{
	?>
	<div class="templatemo_news_box">
		<div>
			<?php echo $value['madon'] ?>
			&nbsp;&nbsp;&nbsp;
			<a href="">ssss</a>
			&nbsp;&nbsp;&nbsp;
		</div>
		<!-- <p><a href="news_chitiet.php?matin=<?php echo $value['matin'] ?>"><?php echo $value['tomtat'] ?></a></p> -->
		<div class="cleaner">&nbsp;</div>
	</div>
	<?php
}
?>