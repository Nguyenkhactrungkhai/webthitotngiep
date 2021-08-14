<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container"> 
    	<div class="top"> <img src="images/logo_01.gif" width="1000" height="127"></div>
        <div class="menu"> 
        <ul>
        	<li> <a href="index.php">  Trang chủ </a> </li>
            <li> <a href="#">  Trang chủ </a> </li>
            <li> <a href="#">  Trang chủ </a> </li>
            <li> <a href="#">  Trang chủ </a> </li>
        </ul>
        </div>
        <div class="cacdanhmuc">
      		<img src="images/logo_04.gif" width="229" height="49"> <input type="text" placeholder="Nhập từ khóa..."></input>
            <img src="images/logo_06.gif" width="55" height="49"> 
        </div>
        <div class="content"> 
        	<div class="left"> 
            	<div class="leftMenu"> 
                <img style="margin-top:44px" src="images/logo_10.gif" width="225" height="64">
                <ul> 
                	<li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                    <li><a href="#">HÃNG CAFE </a></li>
                </ul>
                </div>
                <img style="margin-top: 20px" src="images/logo_23.gif" width="225" height="270">
            </div>
            <div class="mid">
            	<img style="margin: 50px 24px 0;"th src="images/khuyenmai_03.jpg" width="575" height="97">
              	<table class="hangcaphe" border="1">
                    <tr>
                        <th>ma_cafe  </th>
                        <th>ten_cafe</th>
                        <th>ten_cafe</th>
                        <th>don_gia</th>
                    </tr>
                    <?php
                    $connect = mysqli_connect("localhost", 'root', "" , "webcaphe");
                    $sql = "select * from hangcaphe";
                    $run = mysqli_query($connect, $sql);
                    while($row=mysqli_fetch_array($run)) {
                        echo "
                            <tr>
                                <td>".$row['ma_cafe']."</td>
                                <td>".$row['ten_cafe']."</td>
                                <td>".$row['ten_cafe']."</td>
                                <td>".$row['don_gia']."</td>
                            </tr>" ;} ?>
           		 </table>
            </div>
            <div class="right"><img style="margin-top:50px" src="images/logo_13.gif" width="151" height="321"><img src="images/logo_22.gif" width="151" height="379"></div>
            <div class="clr"> </div>
        </div>
        
        <div class="fotter">	
            <div class="fotter_menu">  <a href="#"> Trang chủ | Gioi thieu | Sản phẩm | Liên hệ </a>  </div>
        	<div class="footer_content">
            	<table>
            		<tr>
                    	<td style="padding: 10px 0 0 20px;; width:409px"> Văn phòng: 92A Lê Thanh Nghị, Hai Bà Trưng – Hà Nội <br>
                        Email: dovalam@gmail.com <br>
                        Hotline: 1900.1008 <br>
                        MST: 018921.2654865123400 <br>
						</td>
                        <td valign="top" style="padding-top:10px;"> Trang web được thiết kế độc quyền bởi grapher PHOTO, nghiêm cấm sao chép, vi phạm bản quyền bằng mọi hình thức, mọi chi tiết xin liên hệ CNTQTM grapher PHOTO. Hotline: 1900.1008</td>
                    </tr>
            	</table>
            </div>
         </div>
    </div> 
</body>
</html>
