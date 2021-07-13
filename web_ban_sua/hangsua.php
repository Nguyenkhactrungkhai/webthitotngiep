<?php
require 'connect.php';
$hangsua = get_all_hangsua();
disconnect_db();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
    	<div class="top"><img src="images/hang_sua_01.gif" width="600" height="116"> </div>
        <div class="menu">
        	<a href="#"> Trang chủ  | Gioi thiệu  | Tin tức  | Dịch vụ  | Khách hàng  | Liên hệ  | </a>
         </div>
        <div class="left">
        	<ul>
                <li> <a href="#">Hàng sữa </a> </li>
                <li> <a href="#">Hàng sữa </a> </li>
                <li> <a href="#">Hàng sữa </a> </li>
                <li> <a href="#">Hàng sữa </a> </li>
                <li> <a href="#">Hàng sữa </a> </li>
            </ul>
          <div style="font-size:0"><img src="images/hang_sua_07.gif" width="108" height="76"><img src="images/hang_sua_08.gif" width="108" height="53"><img src="images/hang_sua_09.gif" width="108" height="61"><img src="images/hang_sua_10.gif" width="108" height="71"><img src="images/hang_sua_11.gif" width="108" height="104"> </div>
        </div>
        <div class="mid"> 
			<img style="margin-top: 13px;" src="images/hang_sua_04.gif" width="386" height="90">
            <h3> Bản tin trong ngày </h3>
   			<table class="hangsua" border="1">
            <tr>
                <td>ma_hang_sua </td>
                <td>ten_hang_sua</td>
                <td>dia_chi</td>
                <td>dienthoai</td>
            </tr>
            <?php foreach ($hangsua as $item){ ?>
            <tr>
                <td><?php echo $item['ma_hang_sua']; ?></td>
                <td><?php echo $item['ten_hang_sua']; ?></td>
                <td><?php echo $item['dia_chi']; ?></td>
                <td><?php echo $item['dienthoai']; ?></td>
            </tr>
            <?php } ?>
            </table>
       	</div>
        <div class="right"><img src="images/hs1.png" width="106" height="119"><img src="images/hs2.png" width="106" height="119"><img src="images/hs3.png" width="106" height="119"><img src="images/hs4.png" width="106" height="119"> </div>     
        <div class="clr"> </div>
        <div class="bottom"> 
        	<table style="margin: auto; height: 50px;"> 
            	<tr> 
                	<td style="width: 214px; color: #fff">Công ty sữa Vinamilk <br>
Website: www.vinamilk.com
 </td>
 					<td style="color: #fff;"> Điện thoại: (024)93124568 <br>
Fax (024)55674326
</td>
                </tr>
            </table>
       	</div>
     </div>                             
</body>
</html>