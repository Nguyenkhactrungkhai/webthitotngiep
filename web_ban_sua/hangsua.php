<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán sữa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <img src="./images/hang_sua_01.gif" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Tin tức </a></li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Khách hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="left">
            <ul>
                <li><a href="#">Hãng sữa</a></li>
                <li><a href="#">Loại sữa</a></li>
                <li><a href="#">Sữa</a></li>
                <li><a href="#">Khách hàng</a></li>
                <li><a href="#">Hóa đơn</a></li>
            </ul>
            <div>
                <img src="./images/hang_sua_07.gif" alt="">
                <img src="./images/hang_sua_08.gif" alt="">
                <img src="./images/hang_sua_09.gif" alt="">
                <img src="./images/hang_sua_10.gif" alt="">
                <img src="./images/hang_sua_11.gif" alt="">
            </div>
        </div>
        <div class="mid">
            <img style="margin-top: 12px;" src="./images/hang_sua_04.gif" alt="">
            <h3 style="color: #1562b1">THÔNG TIN HÃNG SỮA</h3>
            <table border="1">
                <tr>
					<th>Ma_hang_sua </th>
					<th>Ten_hang_sua</th>
					<th>Dia_chi</th>
					<th>Dien_thoai</th>
                </tr>
				<?php 
					$link = mysqli_connect("localhost", "root", "" , "webbansua");
					$sql = "select * from hangsua";
					$run = mysqli_query($link, $sql);
					while($row = mysqli_fetch_array($run)) {
						echo "
							<tr>
								<td> ".$row['Ma_hang_sua']." </td>
								<td> ".$row['Ten_hang_sua']." </td>
								<td> ".$row['Dia_chi']." </td>
								<td> ".$row['Dien_thoai']." </td>			
							</tr>
						";
					}
				?>
            </table>
        </div>
        <div class="right">
            <img src="./images/hs1.png" alt="">
            <img src="./images/hs2.png" alt="">
            <img src="./images/hs3.png" alt="">
            <img src="./images/hs4.png" alt="">
        </div>
        <div class="clr"></div>
        <div class="bottom">
            <table>
                <tr>
                    <td style="width: 213px;">Công ty sữa Vinamilk <br>
                        Website: www.vinamilk.com
                    </td>
                    <td>
                        Điện thoại: (024)93124568 <br>
                        Fax (024)55674326
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>