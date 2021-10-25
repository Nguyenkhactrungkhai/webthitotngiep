<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán hoa quả</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="menu">
            <img src="./images/nhom 2.png" alt="">
            <input type="text">
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Giới thiệu</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <p>DANH MỤC</p>
                <ul>
                    <li><a href="#">Trai cay My</a></li>
                    <li><a href="#">Trai cay Uc</a></li>
                    <li><a href="#">Trai cay NewZealand</a></li>
                    <li><a href="#">Trai cay Trung Quoc</a></li>
                    <li><a href="#">Trai cay Han Quoc</a></li>
                    <li><a href="#">Trai cay Chile</a></li>
                    <li><a href="#">Trai cay Nam Phi</a></li>
                    <li><a href="#">Trai cay Canada</a></li>
                </ul>
                <img src="./images/ads.png" width="120px" alt="">

            </div>
            <div class="right">
                <img src="./images/image_05.png" alt="">
                <img src="./images/image_06.png" alt="">
                <table border="1">
                    <tr>
                        <td>ma_trai_cay</td>
                        <td>ten_trai_cay</td>
                        <td>dia_chi</td>
                        <td>dienthoai</td>
                    </tr>
                    <?php 
                        $link = mysqli_connect("localhost","root","","webhoaqua");
                        $sql = "select * from hanghoaqua";
                        $run = mysqli_query($link, $sql);
                        while($row = mysqli_fetch_array($run)) {
                            echo "
                                <tr>
                                    <td>".$row['ma_trai_cay']."</td>
                                    <td>".$row['ten_trai_cay']."</td>
                                    <td>".$row['dia_chi']."</td>
                                    <td>".$row['dienthoai']."</td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
            <div class="clr"></div>
        </div>
        <div class="bottom">
            <table style="margin: auto; color: #fff;">
                    <td style="padding: 20px 20px 0 0">
                        <h4>Greeny House</h4>
                        <p>Trai cay ngon, giao hang tan noi </p>
                        <p>15A, Ta quang buu, Hai Ba Trung Ha Noi </p>
                        <p>SDT: 016655007366 </p>
                        <p>facebook.com/khai.trung.509/ </p>
                        <p>facebook.com/khai.trung.509/ </p>
                        <p>www.greenyhouse.com.vn </p>
                    </td> 
                    <td>
                        <h5>DANG KY NHAN TIN</h5>
                        <p>Dang ky nhan tin va nhan duoc voucher 50.000</p>
                        <input type="text" placeholder="Dia chi email cua ban">
                        <p>
                            <img style="margin-right: 10px;" src="./images/app-store.png" alt="">
                            <img src="./images/google-play.png" alt="">
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>