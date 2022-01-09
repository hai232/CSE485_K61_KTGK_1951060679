<?php
    $ten =  $_POST['ten'];
    $thoigian =  $_POST['thoigian'];
    $linhvuc =  $_POST['linhvuc'];
    $nhiemvu =  $_POST['nhiemvu'];
    $coquan =  $_POST['coquan'];

   $conn = mysqli_connect('localhost','root','','1951060679_kttv_bdkh');
    if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    };

    $sql = "INSERT INTO duan ( tenduan, namthuchien, linhvuc, nhiemvu, coquanthuchien) VALUES
    ('$ten', '$thoigian', '$linhvuc', '$nhiemvu', '$coquan')";
    
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    
?>