<?php
   $conn = mysqli_connect('localhost','root','','1951060679_kttv_bdkh');
    if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    $sql = "SELECT * FROM duan";
    $result = mysqli_query($conn,$sql);

    

    mysqli_close($conn);
?>