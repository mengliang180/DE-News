<?php
include('action.php');
$db=new Action();
// $cn=new mysqli("localhost","root","","project1");
$tbl=array("tbl_menu","tbl_news");
$frm=$_POST['frm'];
// $sql="SELECT COUNT(*) AS total FROM ".$tbl[$frm]." ";
$res['total']=$db->count_data("$tbl[$frm]");
// $result=$cn->query($sql);
//    $row=$result->fetch_array();
//    $res['total']=$row[0];
echo json_encode($res);
?>