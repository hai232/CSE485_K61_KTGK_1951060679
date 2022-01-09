<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>textarea:focus, input:focus{
        outline: none;
    }</style>
    <title>KTTV BDKH</title>
    <div>Chương Trình dự án KTTV BDKH</div>
    <a type="button" class="btn btn-success" onclick="Submit()">Xác Nhận</a>
</head>

<body>
<?php

    echo "<table class='table table-bordered'>"; // start a table tag in the HTML
    echo'    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col">Tên dự án</th>
        <th scope="col">Thời gian</th>
        <th scope="col">Lĩnh vực</th>
        <th scope="col">Nhiệm vụ</th>
        <th scope="col">Cơ quan thực hiện</th>

        </tr>
        </thead>';

   echo '<tr> <td> <div name="foo" class="form-check">
                <input class="form-check-input" type="checkbox" name="foo" value="" id="flexCheckDefault">
                <label class="form-check-label" name="foo" for="flexCheckDefault">
                
                </label>
                </div>';
                echo "<td>" . '<input type="text" id="ten">' . "</td><td>" . '<input type="text" id="thoigian">' . "</td><td>" . '<input type="text" id="linhvuc">' . "</td><td>" . '<input type="text" id="nhiemvu">' . "</td><td>" . '<input type="text" id="coquan">' . "</td></tr>";  //$row['index'] the index here is a field name



    echo "</table>"; //Close the table in HTML


?>
</body>
<script language="JavaScript">
    function Submit(){
        $.ajax({
        url:"process_add.php",
        type:"POST",
        data:{ten:$("#ten").val() ,thoigian:$("#thoigian").val() ,linhvuc:$("#linhvuc").val() ,nhiemvu:$("#nhiemvu").val() ,coquan:$("#coquan").val() ,},
        success:function(data){
            window.location="/src"
        }
    })
    }
</script>
</html>


