<?php

class Mdl_cat extends MY_Model{

        
        
        protected $_tb_cat = "tbl_cat";
        protected $_tb_user = "users";

        public function __construct(){
            
            parent::__construct();
        }


        function all(){
            $get = $this->db->get($this->_tb_cat);
            return $get;
        }

        function find($where){
            $get = $this->db
                        ->where($where)
                        ->get($this->_tb_cat);
            return $get;
        }
        
        function getCat($where=false,$limit=false,$offset=false){
            $j1 = "{$this->_tb_user}.id={$this->_tb_cat}.user_id";
            $get = "";
            if($where):
                $get = $this->db
                            ->join($this->_tb_user,$j1)
                            ->where($where)
                            ->order_by("cat_date_create","DESC")
                            ->get($this->_tb_cat,$limit,$offset);
            else:
                $get = $this->db
                            ->join($this->_tb_user,$j1)
                            ->order_by("cat_date_create","DESC")
                            ->get($this->_tb_cat,$limit,$offset);
            endif;
           return $get; 
        }

        function catAdminSave(){
            $cat_id = $this->getEl("cat_id");
            $cat_user_id = $this->getEl("cat_user_id");
            if(!$cat_user_id):
                $cat_user_id = $this->user_id;
            endif;

            //-- checkbox
            $c_pub = $this->getEl("c_pub");
            !($c_pub)?$c_pub = 0:$c_pub = 2;
            $c_allow_change = $this->getEl("c_allow_change");
            !($c_allow_change)?$c_allow_change = 0:$c_allow_change = 2;

            $cat_section = $this->getEl("cat_section");
            $cat_title = $this->getEl("cat_title");
            $cat_des = $this->getEl("cat_des");
            $cat_uri = $this->getEl("cat_uri");

            $cat_data = array(
                "user_id" => $cat_user_id,
                "cat_title" => $cat_title,
                "cat_section" => $cat_section,
                "cat_des" => $cat_des,
                "cat_show_public" => $c_pub,
                "allow_user_change" => $c_allow_change,
                "cat_uri" => $cat_uri
            );

            $msg = "";
            if(!$cat_id):
                //-- create new
                $cat_id = $this->SAVE($cat_data,$this->_tb_cat);
                $msg = "Success : data has been created @{$cat_id}";
            else:
            $cat_data["cat_date_update"] = $this->today_andTime;
            $this->SAVE($cat_data,$this->_tb_cat,array("cat_id" => $cat_id));
            $msg = "Success : data has been updated @{$cat_id}";
                //-- update 
            endif;

            $r_data = array(
                "msg" => $msg,
                "cat_id" => $cat_id
            );
            return $r_data;

        }

        function catAdminDel($where){
            $this->DEL($where,$this->_tb_cat);

        }

}//end of the file 
