<?php

class Mdl_template extends MY_Model{

        
        
        protected $_tb_ar = "";
        protected $_tb_cat = "";
        protected $_tb_user = "users";
        protected $_tb_notic = "";
        protected $_tb_tmp = "tbl_template";

        public function __construct(){
            
            parent::__construct();
            //$this->load->model("Mdl_users");
           // $this->_tb_user = $this->Mdl_users->getTable();

        }


        function tmpList($where=false,$limit=false,$offset=false){

            $get = "";
            $j1 = "{$this->_tb_user}.id={$this->_tb_tmp}.tmp_user_id";
            if($where):
                $get = $this->db
                        ->join($this->_tb_user,$j1)
                        ->where($where)
                        ->order_by("{$this->_tb_tmp}.date_create","DESC")
                        ->get($this->_tb_tmp,$limit,$offset); 
                else:
                     $get = $this->db
                        ->join($this->_tb_user,$j1)
                        ->order_by("{$this->_tb_tmp}.date_create","DESC")
                        ->get($this->_tb_tmp,$limit,$offset); 
     
                endif;
            return $get;
        }
               
        function modSave(){
           $tmp_id = $this->getEl("tmp_id"); 
           $tmp_user_id = $this->getEl("tmp_user_id"); 
           $tmp_title = $this->getEl("tmp_title"); 
           $section_title = $this->getEl("sec_title"); 
           $section_body = $this->getEl("sec_body"); 
            
            
            $msg  = "";
           $tmp_data  = array(
               "tmp_name" => $tmp_title,
               "section_title" => $section_title,
               "section_body" => $section_body,
               "date_create" => $this->today_andTime,
               "date_update" => $this->today_andTime,
           );

           if(!$tmp_id):
                //---create new                
                $tmp_data["tmp_user_id"] = $this->user_id;
                $save = $this->SAVE($tmp_data,$this->_tb_tmp);
                $tmp_id = $save;
                $msg = "Success : data has been create on @{$tmp_id}";
                
           else:
                //-- update data
                unset($tmp_data["date_create"]);
                $save = $this->SAVE($tmp_data,$this->_tb_tmp,array("tmp_id" => $tmp_id));
                $msg = "Success : data has been updated on @{$tmp_id}";

            endif;

                $r_data = array(
                    "tmp_id" => $tmp_id,
                    "msg" => $msg
                );
                return $r_data;

        }

        function modDel($id){

            $this->db
                ->where($id)
                ->delete($this->_tb_tmp);
            $msg = "success item has been deleted";
            $r_data = array(
                "msg" => $msg
            );
            return $r_data;
        }

}//end of the file 
