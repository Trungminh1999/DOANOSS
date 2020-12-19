
<?php 
if (session_id() === '')
    session_start();
if(isset($_SESSION['dangnhap'])){
    ?> 
    <ul>
        <li><a href="index.php" class="current">Trang chủ</a></li>
        <li><a href="dangnhap.php">Tài khoản</a></li>
        <li><a href="news.php">Tin tức</a></li>
        <li><a href="Lienhe.php">Liên hệ</a></li>   
        <li><a href="cart.php">Giỏ hàng</a></li>
        <div align="right">
            <form action="search.php" method="GET">
                Tìm kiếm: <input type="text" name="search" />
                <input type="submit" name="ok" value="Tìm" />
            </form>
        </div>
    </ul>
    <?php
}else{
    ?> 
    <ul>
        <li><a href="index.php" class="current">Trang chủ</a></li>
        <li><a href="dangnhap.php">Đăng nhập</a></li>
        <li><a href="dangky.php">Đăng ký</a></li>
        <li><a href="news.php">Tin tức</a></li>
        <li><a href="Lienhe.php">Liên hệ</a></li>   
        <div align="right">
            <form action="search.php" method="GET">
                Tìm kiếm: <input type="text" name="search" />
                <input type="submit" name="ok" value="Tìm" />
            </form>
        </div>
    </ul>
    <?php
}
?>




