<?php
    if(empty($_POST["Tuoi"])){
        echo "Xin vui lòng nhập tuổi <br>";
        echo "<a href='index.html'>BACK</a>";
    }
    else{
        echo "THÀNH CÔNG! BẠN ".$_POST["Tuoi"]." TUỔI <br>";
        echo "<a href='index.html'>Tính tiếp</a>";
    }
?>