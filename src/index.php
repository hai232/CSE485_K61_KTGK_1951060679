<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>KTTV BDKH</title>
    <div>Chương Trình dự án KTTV BDKH</div>
    <a href="add.php" type="button" class="btn btn-success">Thêm</a>
    <button type="button" class="btn btn-primary" onclick="edit()">Sửa</button>
    <button type="button" class="btn btn-danger" onclick="delet()">Xóa</button>
    <button type="button" class="btn btn-info" onclick="view()">Xem</button>
</head>

<body>
<?php
   $conn = mysqli_connect('localhost','root','','1951060679_kttv_bdkh');
    if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    $sql = "SELECT * FROM duan";
    $result = mysqli_query($conn,$sql);

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

    $rows = [];
            while($row = mysqli_fetch_array($result))
            {   echo '<tr> <td> <div name="foo" class="form-check">
                <input class="form-check-input" type="checkbox" name="foo" value="'.$row['maduan'].'" id="flexCheckDefault">
                <label class="form-check-label" name="foo" for="flexCheckDefault">
                
                </label>
                </div>';
                echo "<td>" . $row['tenduan'] . "</td><td>" . $row['namthuchien'] . "</td><td>" . $row['linhvuc'] . "</td><td>" . $row['nhiemvu'] . "</td><td>" . $row['coquanthuchien'] . "</td></tr>";  //$row['index'] the index here is a field name
            }


    echo "</table>"; //Close the table in HTML

    mysqli_close($conn);
?>
</body>
<script language="JavaScript">
    data = [];
    function add(){

    }
    function edit(){
        
    }
    function delet(){
        data = [...document.querySelectorAll('.form-check-input:checked')].map(e => e.value);
        $.ajax({
        url:"process_delete.php",
        type:"POST",
        data:{maduan : data},
        success:function(data){
            window.location="/src"
        }
        })
    }
    function view(){
        
    }
</script>
</html>


