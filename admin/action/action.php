<?php
include('Database.php');
class Action extends Database{
      public function save_data($tbl,$val){
        return $this->insert_data($tbl,$val);
      }
      public function update_data($tbl,$fld,$con){
        return $this->edit_data($tbl,$fld,$con);
      }
      public function dpl_data($fld,$tbl,$con){
        return $this->check_dpl_data($fld,$tbl,$con);
      }
      public function get_data($fld,$tbl,$con,$od,$limit){
        return $this->fetch_all_data($fld,$tbl,$con,$od,$limit);
      }
      public function get_one_record($fld,$tbl,$con){
        return $this->fetch_one_record($fld,$tbl,$con);
      }
      public function get_auto_id($fld,$tbl,$od){
        return $this->fetch_auto_id($fld,$tbl,$od);
      }
      public function count_data($tbl){
        return $this->count_all_data($tbl);
      }

}
?>