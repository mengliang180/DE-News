<?php
class Database{
      public $cn;
      function connection(){
        $this->cn=new mysqli("localhost","root","","project1");
      }
      protected function insert_data ($tbl,$val){
        $this->connection();
        $sql="INSERT INTO ".$tbl." VALUES  (".$val.")";
        $this->cn->query($sql);
      }
    //   function dublicate($fld,$tbl,$con){
    //     $sql="SELECT ".$fld." FROM ".$tbl." WHERE ".$con."";
    //     $this->cn->query($sql);
    //   }
      protected function edit_data ($tbl,$fld,$con){
        $this->connection();
        $sql="UPDATE ".$tbl." SET ".$fld."  WHERE ".$con."";
        $this->cn->query($sql);
      }
      protected function check_dpl_data ($fld,$tbl,$con){
        $this->connection();
        $sql="SELECT ".$fld." FROM ".$tbl." WHERE ".$con."";
        $result=$this->cn->query($sql);
        if($result->num_rows>0){
          return true;
        }else{
          return false;
        }
      }
      protected function fetch_all_data($fld,$tbl,$con,$od,$limit){
        $this->connection();
        $data=array();
        $sql="SELECT ".$fld."  FROM ".$tbl." WHERE ".$con." ORDER BY ".$od." LIMIT ".$limit."";
        $result=$this->cn->query($sql);
        $num=$result->num_rows;
        if($num>0){
          while($row=$result->fetch_array()){
            $data[]=$row;
          }
          return $data;
        }else {
          return 0;
        }
      }
      protected function fetch_one_record($fld,$tbl,$con){
        $this->connection();
        $sql="SELECT ".$fld." FROM ".$tbl." WHERE ".$con."";
        $result=$this->cn->query($sql);
        $num=$result->num_rows;
       if($num>0){
        $row=$result->fetch_array();
        return $row;
       }else{
        return '0';
       }
      }
      protected function fetch_auto_id($fld,$tbl,$od){
        $this->connection();
        $last_id=0;
        $sql="SELECT ".$fld." FROM ".$tbl." ORDER BY ".$od."";
        $result=$this->cn->query($sql);
        $num=$result->num_rows;
        if($num>0){
          $row=$result->fetch_array();
          $last_id=$row[0];
          return $last_id;
        }else {
          return '0';
        }
      }
      protected function count_all_data($tbl){
        $this->connection();
        $data_result=0;
        $sql="SELECT COUNT(*) AS total FROM ".$tbl."";
        $result=$this->cn->query($sql);
        $num=$result->num_rows;
        if($num>0){
          $row=$result->fetch_array();
          $data_result=$row['total'];
          return $data_result;
        }else{
          return '0';
        }
      }
      public function real_string($str) {
        $this->connection();
        return $this->cn->real_escape_string($str);
    }
      public function php_slug($string){
        $slug=trim($string);
        $slug=preg_replace("#(\p{p}|\p{c}|\p{s}|\p{z})+#u","-",$string);
        return $slug;
        }
}
?>