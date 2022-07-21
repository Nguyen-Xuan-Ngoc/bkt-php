<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body >
    <style>

</style>
        <center>
            <h3>Tìm kiếm</h3>
            <form action="tim.php" method="POST">
               <input type="text" name="search">
               <input type="submit" name="ok"value="timkiem">
            </form>
            <table align="center" border="1" style="border: 0px solid #000">
            <tr>
                <th>Thứ tự</th>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Số Trang</th>
            </tr>
            <?php
            if(isset($_POST["ok"])){
                $s = $_POST["search"];  
             }else{
             echo $s = false;
            }
            ?>    
            <?php
                 $con =mysqli_connect('localhost', 'root','');
                 if(!$con)
                     echo"Kết nối thất bại !!";
                 else{
                     $db = mysqli_select_db($con,"qlsach");
                 if(!$db)
                     echo"Sai CSDL";
                 }
                 $sql="SELECT * FROM sach WHERE Masach LIKE '%$s%'";
                 $result = mysqli_query($con, $sql);
                 while($row = mysqli_fetch_array($result)){
                    ?>
                 <tr>
                <td align="center"><?php echo $row["s_id"]?></td>
                <td><?php echo $row["Masach"]?></td>
                <td><?php echo $row["Tensach"]?></td>
                <td><?php echo $row["Sotrang"]?></td>
            </tr>
                <?php } ?>
                </table>
           
            
        <a href="them.php">Thêm nhân viên</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="danhsach.php">Danh Sách</a>
        </center>
    </body>
</html>