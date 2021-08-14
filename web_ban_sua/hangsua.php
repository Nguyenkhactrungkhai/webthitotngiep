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
			<table border="1">
				<tr>
					<th>ma_hang_sua</th>
					<th>ten_hang_sua</th>
					<th>dia_chi</th>
					<th>dienthoai</th>
				</tr>
			<?php 
			$link = mysqli_connect("localhost", "root", "", "webbansua");
			$sql="select * from hangsua";
			$run = mysqli_query($link,$sql);
			while($row=mysqli_fetch_array($run))
			{
			echo "
				<tr style= 'text-align: center'> 
					<td> ".$row['ma_hang_sua']." </td>
					<td> ".$row['ten_hang_sua']." </td>
					<td> ".$row['dia_chi']."  </td>
					<td> ".$row['dienthoai']." </td>
				</tr>" ;} ?>
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