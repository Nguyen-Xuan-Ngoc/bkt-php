<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <center>
            <h3>Danh sách hàng</h3>
            <table align="center" border="1" style="border: 0px solid #000">
            <tr>
                <th>Thứ tự</th>
                <th>Mã Sách</th>
                <th>Tên sách</th>
                <th>Số trang</th>
            </tr>
            <?php
             $con =mysqli_connect('localhost', 'root','');
             if(!$con)
                 echo"Kết nối thất bại !!";
             else{
                 $db = mysqli_select_db($con,"qlsach");
             if(!$db)
                 echo"Sai CSDL";
             }
             $sql="SELECT * FROM sach ORDER BY Tensach ASC";
             $items = mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($items)){
            ?>
            <tr>
                <td align="center"><?php echo $row["s_id"]?></td>
                <td><?php echo $row["Masach"]?></td>
                <td><?php echo $row["Tensach"]?></td>
                <td><?php echo $row["Sotrang"]?></td>
            </tr>
            <?php }
            ?>
        </table>
        <a href="them.php">Thêm sach</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="tim.php">Tìn kiếm</a>
        </center>
    </body>
</html>