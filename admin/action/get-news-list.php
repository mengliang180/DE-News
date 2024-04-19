<?php
include('action.php');
$db=new Action();
$s=$_POST['s'];
$e=$_POST['e'];
$data=array();
$post_data=$db->get_data("id,title,status","tbl_news","id>0","id DESC","".$s.",".$e."");
if($post_data!=0){
   foreach($post_data as $row){
      $data[]=array("id"=>$row[0],"title"=>$row[1],"status"=>$row[2]);
   }
}
echo json_encode($data);
// $data=array();
// $s=$_POST['s'];
// $e=$_POST['e'];
// $sql="SELECT * FROM tbl_menu ORDER BY id DESC LIMIT $s,$e";
// $result=$cn->query($sql);
// if($result->num_rows>0){
//    while($row=$result->fetch_array()){
//     $data[]=array("id"=>$row[0],"name"=>$row[1],"img"=>$row[2],"od"=>$row[3],"status"=>$row[4]);
//    }
// }

?>