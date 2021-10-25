<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web cà phê</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <img src="./images/logo_01.gif" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="cacdanhmuc">
            <img src="./images/logo_04.gif" alt="">
            <input type="text" placeholder="Nhập từ khóa...">
            <img src="./images/logo_06.gif" alt="">
        </div>
        <div class="layout">
            <div class="left">
                <img style="margin-top: 40px;" src="./images/logo_10.gif" alt="">
                <ul>
                    <li><a href="#">Hãng CAFE</a></li>
                    <li><a href="#">loại CAFE</a></li>
                    <li><a href="#">CAFE</a></li>
                    <li><a href="#">Khách hàng</a></li>
                    <li><a href="#">Hóa đơn</a></li>
                    <li><a href="#">Doanh nghiệp</a></li>
                    <li><a href="#">Thị trường</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
                <img style="margin-top: 15px;" src="./images/logo_23.gif" alt="">
            </div>
            <div class="mid">
                <img style="margin-top: 40px;" src="./images/khuyenmai_03.jpg" alt="">
                <table border="1" style="width: 100%; text-align:center">
                    <tr>
                        <th>Ma_cafe </th>
                        <th>Ten_cafe</th>
                        <th>Trong_luong</th>
                        <th>Don_gia</th>
                    </tr>
                    <?php 
                        $link = mysqli_connect("localhost","root","","webcaphe");
                        $sql = "select * from hangcafe";
                        $run = mysqli_query($link, $sql);
                        while($row = mysqli_fetch_array($run)) {
                            echo"
                            <tr>
                                <td class='test'>".$row['Ma_cafe']."</td>
                                <td class='test'>".$row['Ten_cafe']."</td>
                                <td class='test'>".$row['Trong_luong']."</td>
                                <td class='test'>".$row['Don_gia']."</td>
                            </tr>";
                        }
                    ?>
                </table>
            </div>
            <div class="right">
                <img style="margin-top: 40px" src="./images/logo_13.gif" alt="">
                <img src="./images/logo_22.gif" alt="">
            </div>
            <div class="clr"></div>
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="bottom">
            <table style="margin: auto;">
                <tr>
                    <td style="width: 500px; padding-left: 30px;">
                        Văn phòng: 92A Lê Thanh Nghị, Hai Bà Trưng – Hà Nội <br>
                        Email: dovalam@gmail.com <br>
                        Hotline: 1900.1008 <br>
                        MST: 018921.2654865123400 <br>
                    </td>
                    <td>
                        Trang web được thiết kế độc quyền bởi grapher PHOTO, nghiêm cấm sao chép, vi phạm bản quyền bằng mọi hình thức, mọi chi tiết xin liên hệ CNTQTM grapher PHOTO. Hotline: 1900.1008
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>