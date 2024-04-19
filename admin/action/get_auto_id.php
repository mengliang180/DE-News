<?php
include('action.php');
$db=new Action();
// $cn=new mysqli("localhost","root","","project1");
$tbl=array("tbl_menu","tbl_news");
$frm=$_POST['frm'];
// $sql="SELECT id FROM ".$tbl[$frm]." ORDER BY id DESC";
$data=$db->get_auto_id("id","$tbl[$frm]","id DESC");
$last_id=0;
// $rs=$cn->query($sql);
if($data!='0'){
   $last_id=$data;
}
// if($rs->num_rows>0){
//    $row=$rs->fetch_array();
//    $last_id=$row[0];
// }
$res['id']=$last_id;
echo json_encode($res);
?>