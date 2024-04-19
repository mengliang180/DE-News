<?php
date_default_timezone_set("Asia/Phnom_Penh");
include('action.php');
$db=new Action();
// $res = array();
$id=$_POST['id'];
$date_post=date("Y/m/d");
$title=$_POST['title'];
$title=trim($title);
$title=$db->real_string($title);
$des=$_POST['des'];
$des=trim($des);
$des=$db->real_string($des);
$img=$_POST['txt-photo'];
$od=$_POST['od'];
$location=$_POST['location'];
$menu_id=$_POST['menu_id'];
$edit=$_POST['txt-edit'];
$title_link=$db->php_slug($title);
$user=2;
$view=3;
$status=$_POST['status'];
$dpl=$db->dpl_data("id","tbl_news","title='".$title."' AND id!=".$edit."");
$res['msg']=true;
$res['edit']=false;
$res['id']=intval($id)-1;
if($dpl==false){
    if($edit==0){
        $tbl="tbl_news";
        $val="null,'".$date_post."','".$title."','".$des."','".$img."',".$od.",".$location.",'".$menu_id."','".$title_link."',".$user.",".$view.",".$status."";
        $db->save_data($tbl,$val);
        $res['id']=$db->cn->insert_id;
    }else{
        $tbl="tbl_news";
        $fld="title='".$title."',des='".$des."',img='".$img."',od='".$od."',location='".$location."',menu_id='".$menu_id."',title_link='".$title_link."',status='".$status."',view='".$view."',user='".$user."'";
        $con="id='".$edit."'";
        $db->update_data($tbl,$fld,$con);
        $res['edit']=true;
    }
    $res['msg']=false;
}
echo json_encode($res);
?>