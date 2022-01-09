<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
   $conn = mysqli_connect('localhost','root','','1951060679_kttv_bdkh');
    if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    $sql = "SELECT * FROM duan";
    $result = mysqli_query($conn,$sql);

    echo "<table>"; // start a table tag in the HTML


    $rows = [];
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr><td>" . $row['tenduan'] . "</td><td>" . $row['namthuchien'] . "</td><td>" . $row['linhvuc'] . "</td><td>" . $row['nhiemvu'] . "</td><td>" . $row['coquanthuchien'] . "</td></tr>";  //$row['index'] the index here is a field name
            }


    echo "</table>"; //Close the table in HTML


?>