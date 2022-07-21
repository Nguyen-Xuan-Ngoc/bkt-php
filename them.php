<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <center>
        <body>
            <h3>Thêm nhân viên</h3>
            <form action="them.php" method="POST">
                <table width="280" border="1">
                    <tr>
                        <td width="120">Ma sach:</td>
                        <td width="144"><input type="text" name="ms"></td>
                    </tr>
                    <tr>
                        <td>Tên sach:</td>
                        <td><input type="text" name="ts"></td>
                    </tr>
                    <tr>
                        <td>so trang:</td>
                        <td><input type="text" name="st"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" ><input type="submit" 
                        name="luu" value ="lưu">
                        <input type="submit" 
                        name="xoa" value ="xoa">
                    </td>
                    </tr>
                </table>
            </form>
            <?php
            if(isset($_POST["luu"]))
            {
                $mahang = $_POST["ms"];
                $tenhang = $_POST["ts"];
                $soluong = $_POST["st"];
                $con = mysqli_connect('localhost', 'root','');
                if(!$con)
                    echo"Kết nối thất bại !!";
                else{
                    $db = mysqli_select_db($con,"qlsach");
                if(!$db)
                    echo"Sai CSDL";
                }
                $sql="INSERT INTO sach(Masach, Tensach, Sotrang) VALUES('$mahang', 
                '$tenhang', '$soluong')";
                mysqli_query($con,$sql);
               
            }
            ?>
            <?php
            if(isset($_POST["xoa"]))
            {
                $mahang = $_POST["ms"];
                
                $con = mysqli_connect('localhost', 'root','');
                if(!$con)
                    echo"Kết nối thất bại !!";
                else{
                    $db = mysqli_select_db($con,"qlsach");
                if(!$db)
                    echo"Sai CSDL";
                }
                $sql="delete from sach where Masach = '$mahang'";
                mysqli_query($con,$sql);
               
            }
            ?>
            <a href="danhsach.php">Danh Sách</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="tim.php">Tìm Kiếm</a>
            
        </body>
    </center>
</html>