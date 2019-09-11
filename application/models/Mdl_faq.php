<?php 


class Mdl_faq extends MY_Model{

    protected $_tb_faq = "tbl_faq";
    protected $_tb_ans = "tbl_faq_answer";

    public function __construct(){
        parent:: __construct();
    }

    //-------
    function getFaq($where=false,$limit=false,$offset=false){

        $faq_id = 0;
        
        if($where):
            $get = $this->db
                        ->where($where)
                        ->limit($limit,$offset)
                        ->order_by("faq_date","DESC")
                        ->get($this->_tb_faq);
            
            
        else:
            //$get = $this->getTB($this->_tb_faq,null,$limit,$offset);
            $get = $this->db
                        ->limit($limit,$offset)
                        ->order_by("faq_date","DESC")
                        ->get($this->_tb_faq);
                        
        endif;

        return $get;

    }



    //---
    function numFaqAns($faq_id){
        
        $where_ans = array("faq_id" => $faq_id);
        $get_ans = $this->getTB($this->_tb_ans,$where_ans)->result();
        $num_ans = count($get_ans);
        
        //set faq_data to update
        $faq_data = array("faq_has_ans" => $num_ans);
        $this->saveTB($this->_tb_faq,$faq_data,array("faq_id" => $faq_id));
    }

    //---getAns
    function getAns($where){
        $get = $this->db
                    ->order_by("ans_date","ANS")
                    ->where($where)
                    ->get($this->_tb_ans);
        return $get;
    }
    //---------saveAns
    function saveAns($data,$where=false){
        $save = "";
        $ans_id = "";
        
        if($where):
            $save = $this->saveTB($this->_tb_ans,$data,$where);
            $ans_id = $where["ans_id"];
        else:
            $save = $this->saveTB($this->_tb_ans,$data);
            $ans_id = $save;
        endif;
        return $ans_id;
    }

    //--------save data to faq
    function saveFaq($data,$where=false){

        $f_id = $where["faq_id"];
        if(!$where):
            //insert
            $save = $this->saveTB($this->_tb_faq,$data);
            $f_id = $save;
        else:
            //update
            $save = $this->saveTB($this->_tb_faq,$data,$where);
            $f_id = $where["faq_id"];
        endif;
        return $f_id;
    }
    //------------delFaq will also delete the answer 
    //--that related to the faq_id 
    function delFaq($id){
        $where = array("faq_id" => $id);
        $this->delTB($this->_tb_ans,$where);
        $this->delTB($this->_tb_faq,$where);
        return true;
    }

}//-------end of file