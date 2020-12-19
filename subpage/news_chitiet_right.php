<?php
matin= $_GET['matin'];
$tam = $obj->query("select * from news where matin='$matin' ");
$data = $tam->fetch();
?>
<h1><?php echo $data['tieude'] ?></h1>
<div><img src="<?php echo $data['hinh'] ?>" alt="CSS Template" width="500" height="auto" /></div>

<ul style="font-size: 16px;">
    <li><?php echo $data['noidung'] ?></li>
</ul>


<div class="cleaner_with_height">&nbsp;</div>

<a href="index.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>
