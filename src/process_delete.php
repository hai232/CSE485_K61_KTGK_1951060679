<?php
    $maduan =  $_POST['maduan'];
    

   $conn = mysqli_connect('localhost','root','','1951060679_kttv_bdkh');
    if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    };

    for ($i=0; $i < count($maduan) ; $i++) { 
        $ma = $maduan[$i];
        $sql = "DELETE FROM duan WHERE maduan = '$ma'";
        mysqli_query($conn,$sql);
    }
    mysqli_close($conn);

    
?>