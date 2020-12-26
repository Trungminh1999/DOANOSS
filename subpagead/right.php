<?php 
if(isset($_GET['qlsp'])){
	$chucnang = $_GET['qlsp'];
	include 'sub/ql_sp.php';
}
if(isset($_GET['qlloai'])){
	$chucnang = $_GET['qlloai'];
	include 'sub/ql_loai.php';
}
if(isset($_GET['qlkh'])){
	$chucnang = $_GET['qlkh'];
	include 'sub/ql_kh.php';
}
if(isset($_GET['qlnews'])){
	$chucnang = $_GET['qlnews'];
	include 'sub/ql_news.php';
}
if(isset($_GET['qldh'])){
	$chucnang = $_GET['qldh'];
	include 'sub/ql_dh.php';
}
?>