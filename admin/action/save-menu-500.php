<?php
$cn=new mysqli("localhost","root","","project1");
    for($i=1;$i<=500;$i++){
        $name="name".$i;
        $img="img".$i;
        $insert="INSERT INTO tbl_menu VALUES (null,'$name','$img',$i,'1')";
        $cn->query($insert);
    }
?>