<?php
    include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yuki Yugioh Shop</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
	<div id="templatemo_menu">
     <?php 
     include 'subpage/menu.php';
     ?>   
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
        <?php 
        include 'subpage/header.php';
        ?>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
            <?php
            include 'subpage/left.php';
            ?>
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
            <?php
            include 'subpage/right.php';
            ?>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
	       <a href="index.php">Home</a> | <a href="search.php?search=&ok=Tìm">Search</a> | <a href="https://www.facebook.com/yugiohtanhoa">Facebook</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="Lienhe.php">Contact Us</a><br />
        Copyright © 2024 <a href="https://www.facebook.com/yugiohtanhoa"><strong>Yuki Yugioh Shop</strong></a> | Designed by <a href="http://www.templatemo.com" target="_parent" title="free css templates">Free CSS Templates</a>	</div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1537803263099738"
  logged_in_greeting="Xin chào bạn đến với Yuki Yugioh Shop."
  logged_out_greeting="Xin chào bạn đến với Yuki Yugioh Shop.">
      </div>
</body>
</html>