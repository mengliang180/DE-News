<?php
include('action.php');
$data=array();
$edit=$_POST['edit'];
$db=new Action();
$row=$db->get_one_record("id,od,location,menu_id,status,img,title,des","tbl_news","id=".$edit."");
if($row!='0'){
    $data=array("id"=>$row[0],"od"=>$row[1],"location"=>$row[2],"menu_id"=>$row[3],"status"=>$row[4],"img"=>$row[5],"title"=>$row[6],"des"=>$row[7]);
}
echo json_encode($data);
?>