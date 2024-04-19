<?php
include('action.php');
$db=new Action();
// $cn=new mysqli("localhost","root","","project1");
$id=$_POST['id'];
$id=intval($id);
$name=$_POST['name'];
$img=$_POST['txt-photo'];
$od=$_POST['od'];
$od=intval($od);
$status=$_POST['status'];
$status=intval($status);
$edit=$_POST['txt-edit'];
$edit=intval($edit);
// $sql="SELECT id FROM tbl_menu WHERE name='$name' AND id!='$edit'";
$dpl=$db->dpl_data("id","tbl_menu","name='".$name."' AND id!=".$edit."");
// $result=$db->cn->query($sql);
// $num=$result->num_rows;
$res['msg']=true;
$res['edit']=false;
$res['id']=intval($id)-1;
if($dpl==false){
    if($edit==0){
        // $sql="INSERT INTO tbl_menu VALUES (null,'$name','$img','$od','$status')";
        $tbl="tbl_menu";
        $val="null,'".$name."','".$img."',".$od.",".$status."";
        // $db->cn->query($sql);
        $db->save_data($tbl,$val);
        $res['id']=$db->cn->insert_id;
    }else{
        // $sql="UPDATE tbl_menu SET name='$name',img='$img',od='$od',status='$status' WHERE id='$edit'";
        // $db->cn->query($sql);
        $tbl="tbl_menu";
        $fld="name='".$name."',img='".$img."',od=".$od.",status=".$status."";
        $con="id=".$edit."";
        $db->update_data($tbl,$fld,$con);
        $res['edit']=true;
    }
    $res['msg']=false;
}
echo json_encode($res);
?>