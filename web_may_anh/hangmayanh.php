<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container"> 
    	<div class="top"> <img src="images/image1_02.gif" width="1000" height="126"></div>
        <div class="menu"> 
        <ul>
        	<li> <a href="index.php"><img src="images/h_trangchu.gif" width="282" height="58"></a> </li>
            <li> <a href="#"><img src="images/h_gioi thieu.gif" width="220" height="58"></a> </li>
            <li> <a href="index.php"><img src="images/h_bao hanh.gif" width="220" height="58"></a> </li>
            <li> <a href="index.php"><img src="images/h_lienhe.gif" width="278" height="58"> </a></a> 
		</li>
        </ul>
        </div>
        <div class="cacdanhmuc">
      		<img src="images/search.gif" width="945" height="49">
        </div>
        <div class="content"> 
        	<div class="left"> 
            	<div class="leftMenu"> 
                <img style="margin-top: 50px;" src="images/phanloai_03.gif" width="231" height="67">
                <ul> 
                	<li><a href="hangcaphe.php"><img src="images/phanloai_05.gif" width="231" height="38"></a></li>
                    <li><a href="#"><img src="images/phanloai_06.gif" width="231" height="41"> </a></li>
                    <li><a href="#"><img src="images/phanloai_07.gif" width="231" height="38"></a></li>
                    <li><a href="#"><img src="images/phanloai_08.gif" width="231" height="42"></a></li>
                    <li><a href="#"><img src="images/phanloai_10.gif" width="231" height="36"> </a></li>
                    <li><a href="#"><img src="images/phanloai_12.gif" width="231" height="37"></a></li>
                    <li><a href="#"><img src="images/phanloai_13.gif" width="231" height="42"> </a></li>
                    <li><a href="#"><img src="images/phanloai_14.jpg" width="231" height="56"></a></li>
                    <li><a href="#"><img src="images/phanloai_17.jpg" width="231" height="57"></a></li>
                </ul>
                </div>
               		<img style="margin-top: 35px;" src="images/liên hệ.jpg" width="231" height="268">
            </div>
            <div class="mid">
            	<img style="margin: 50px 24px 0;" src="images/khuyenmai_03.jpg" width="575" height="97">
         		<table class="hangmayanh" border="1">
                    <tr>
                        <td>ma_may_anh   </td>
                        <td>ten_may_anh</td>
                        <td>dia_chi</td>
                        <td>dien_thoai</td>
                    </tr>
                    <?php 
                        $link = mysqli_connect("localhost","root","","webmayanh");
                        $sql = "select * from hangmayanh";
                        $run = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_array($run)) {
                            echo "<tr>
                                <td>".$row["ma_may_anh"]."</td>
                                <td>".$row["ten_may_anh"]."</td>
                                <td>".$row["dia_chi"]."</td>
                                <td>".$row["dien_thoai"]."</td>
                            </tr>";
                        }
                    ?>
           		 </table>
				 
            </div>
            <div class="right"><img style="margin-top:50px" src="images/image1_20.gif" width="151" height="533"></div>
            <div class="clr"> </div>
        </div>
        
        <div class="fotter">	
            <div class="fotter_menu">  <a href="#"> Trang chủ | Gioi thieu | Sản phẩm | Liên hệ </a> </div>
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

