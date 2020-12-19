<style>
    div.templatemo_news_box img{
        width: 200px; height: auto;
    }
</style>


<?php 
$tam = $obj->query("select * from news");
$data = $tam->fetchAll();

foreach ($data as $value) 
{
    ?>
<div class="templatemo_news_box">
    <h1><?php echo $value['tieude'] ?></h1>
    <img src="<?php echo $value['hinh'] ?>" alt="image" />
    <p><a href="news_chitiet.php?matin=<?php echo $value['matin'] ?>"><?php echo $value['tomtat'] ?></a></p>
    <div class="cleaner">&nbsp;</div>
</div>
<?php
}
?>

<a href="subpage.html"><img src="images/templatemo_ads.jpg" alt="ads" /></a>