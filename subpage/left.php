
        	<div class="templatemo_content_left_section">
            	<h1>Phân loại</h1>
                <ul>
                    <?php 
                    $tam = $obj->query("select * from loai");
                    $data = $tam->fetchAll();
                    foreach ($data as $value) 
                    {
                        ?>
                          <li><a href="theo_loai.php?maloai=<?php echo $value['maloai'] ?>"><?php echo $value['tenloai'] ?></a></li>
                        <?php    
                    }

                  ?>
                  
            	</ul>
            </div>
			<div class="templatemo_content_left_section">
            	<h1>Hot</h1>
                <ul>
                     <?php 
                    $tam = $obj->query("select * from sanpham order by soluong desc limit 0, 5");
                    $data = $tam->fetchAll();
                    foreach ($data as $value) 
                    {
                        ?>
                    <li><a href="chitiet.php?masp=<?php echo $value['masp'] ?>"><?php echo $value['tensp'] ?></a></li>
                   <?php
                    }
                   ?>
            	</ul>
            </div>
            
            <div class="templatemo_content_left_section">                
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
			</div>
        