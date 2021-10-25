<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web máy ảnh</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="top">
            <img src="./images/image1_02.gif" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Bảo hành</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="cacdanhmuc">    
            <img src="./images/search.gif" alt="">
        </div>
        <div class="content">
            <div class="left">
                <img style="margin-top: 40px;" src="./images/phanloai_03.gif" alt="">
                <ul>
                    <li><a href="#"><img src="./images/phanloai_05.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_06.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_07.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_08.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_10.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_12.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_13.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_14.gif" alt=""></a></li>
                    <li><a href="#"><img src="./images/phanloai_17.gif" alt=""></a></li>
                </ul>
                <img style="margin-top: 30px;" src="./images/logo_23.gif" width="230" alt="">
            </div>
            <div class="mid">
                <img src="./images/khuyenmai_03.jpg" style="margin: 50px 0 0 30px;" alt="">
                <table border="1" style="text-align: center; width: 100%;">
                    <tr>
                        <th>ma_may_anh </th>
                        <th>ten_may_anh</th>
                        <th>dia_chi</th>
                        <th>dien_thoai</th>
                    </tr>
                    <?php 
                        $link = mysqli_connect("localhost", "root","","webmayanh");
                        $sql = "select * from hangmayanh";
                        $run = mysqli_query($link, $sql);
                        while($row = mysqli_fetch_array($run)) {
                            echo "
                                <tr>
                                    <td>".$row['ma_may_anh']."</td>
                                    <td>".$row['ten_may_anh']."</td>
                                    <td>".$row['ten_may_anh']."</td>
                                    <td>".$row['dien_thoai']."</td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
            <div class="right">
                <img src="./images/image1_20.gif" alt="">
          
            </div>
            <div class="clr"></div>
        </div>
        <div class="submenu">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Khiếu nại</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="footer">
            <table>
                <tr>
                    <td style="width:480px; padding: 10px 0 0 20px; ">
                        Văn phòng: 92A Lê Thanh Nghị, Hai Bà Trưng – Hà Nội <br>
                        Email: dovalam@gmail.com <br>
                        Hotline: 1900.1008 <br>
                        MST: 018921.2654865123400 <br>
                    </td>
                    <td>
                        Trang web được thiết kế độc quyền bởi grapher PHOTO, nghiêm cấm sao chép, 
                        vi phạm bản quyền bằng mọi hình thức, mọi chi tiết xin liên hệ CNTQTM grapher 
                        PHOTO. Hotline: 1900.1008
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>