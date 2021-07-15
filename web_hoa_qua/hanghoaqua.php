<?php
require 'connect.php';
$hanghoaqua = get_all_hanghoaqua();
disconnect_db();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div class="container"> 
    	<div class="menu"> <img src="images/nhom 2.png" width="62" height="35" />
        <input type="text" />
        <ul> 
        	<li> <a href="index.php">TRANG CHỦ </a></li>
            <li> <a href="#">GIỚI THIỆU</a></li>
            <li> <a href="#">LIÊN HỆ</a></li>
            <li> <a href="#">GIỚI THIỆU </a></li>
        </ul>
        </div>
        <div class="content">
        	<div class="left"> 
            	<p>  DANH MỤC </p>
            	<ul> 
                	<li><a href="#"> Trai cay My</a></li>
                    <li><a href="#">  Trai cay Uc </a> </li>
                   	<li><a href="#"> Trai cay New Zealand </a> </li>
                    <li><a href="#">  Trai cay Trung Quoc</a></li>
                    <li><a href="#"> Trai cay Han Quoc</a></li>
                    <li><a href="#"> Trai cay Chi le</a> </li>
                    <li><a href="#">  Trai cay Nam Phi</a></li>
                    <li><a href="#"> Trai cay Canada</a> </li>
                </ul>
            	<img style="margin:11px 0;" src="images/image_07.png" width="120" height="415" />
            </div>
            <div class="right"><img src="images/index_main_bnr.png" width="337" height="150" /> 
                  <img style="margin-top:20px;" src="images/image_06.png" width="337" height="40" />
     				<table class="hanghoaqua" border="1">
                    <tr>
                        <td>ma_trai_cay   </td>
                        <td>ten_trai_cay</td>
                        <td>dia_chi</td>
                        <td>dienthoai</td>
                    </tr>
                    <?php foreach ($hanghoaqua as $item){ ?>
                    <tr>
                        <td><?php echo $item['ma_trai_cay']; ?></td>
                        <td><?php echo $item['ten_trai_cay']; ?></td>
                        <td><?php echo $item['dia_chi']; ?></td>
                        <td><?php echo $item['dienthoai']; ?></td>
                    </tr>
                    <?php } ?>
           		 </table>
             		
             </div>
			<div class="clr"> </div>
        </div>

        <div class="footer">
        	<table>
            	<tr> 
                	<td style="width:228px; padding: 13px;"> 
                    	<h4> Greeny House </h4>
                        <p> Trai cay ngon, giao hang tan noi </p>
                        <p> 15A, Ta quang buu, Hai Ba Trung Ha Noi </p>
                        <p> SDT: 016655007366 </p>
                        <p> facebook.com/khai.trung.509/ </p>
                        <p> Email: sadkjsfaks@gmail.com </p>
                        <p> www.greenyhouse.com.vn </p>
                    </td>
                   	<td> 
                    	<h4>ĐĂNG KÝ TIN NHẮN</h4>
                        <p>Dang ky nhan bn va duoc vourcher 50.000</p>
                        <p> <input style="width: 100%; height: 22px; margin:7px 0; border-radius: 6px; outline: none" type="text" placeholder="Dia chi email cua ban" /> </p>
                        <p><img style="margin-right: 10px;" src="images/app-store.png" width="72" height="24" /><img src="images/google-play.png" width="72" height="24" /></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>