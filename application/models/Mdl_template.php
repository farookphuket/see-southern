<?php

class Mdl_template extends MY_Model{

        
        
        protected $_tb_ar = "";
        protected $_tb_cat = "";
        protected $_tb_user = "";
        protected $_tb_notic = "";
        protected $_tb_tmp = "tbl_template";

        public function __construct(){
            
            parent::__construct();

        }

        function getNotice($where=false,$limit=false,$offset=false){
            $get = 0;
            if($where):
                $get = $this->db
                            ->where($where)
                            ->order_by("notice_date","desc")
                            ->limit($limit,$offset)
                            ->get($this->_tb_notic);
            else:
                $get = $this->db 
                        ->order_by("notice_date","desc")
                        ->limit($limit,$offset)
                        ->get($this->_tb_notic);
            endif;
            
            return $get;
        }
        //---------------------
        

}//end of the file 
