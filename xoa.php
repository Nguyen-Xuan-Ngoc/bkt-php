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