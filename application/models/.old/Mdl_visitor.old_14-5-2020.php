<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mdl_visitor extends MY_Model{

    protected $_tb_visit = "tbl_visitor";
    
    

    public $today;
    public $yesterday;
    
    public $thisMonth;
    public $lastMonth;


    public $thisWeek;
    public $lastWeek;
    public $thisYear;
    public $lastYear;
    function __construct(){
        parent::__construct();

        
        $this->today = date("Y-m-d",time());
        $this->yesterday = date("Y-m-d",strtotime("-1 days"));

        $this->thisWeek = date("Y-m-d",strtotime("+1 weeks"));
        $this->lastWeek = date("Y-m-d",strtotime("-1 weeks"));

        $this->thisMonth = date("m",time());
        $this->lastMonth = date("m",strtotime("-1 months"));

        $this->thisYear = date("Y",time());
        $this->lastYear = date("Y",strtotime("-1 years"));


    }


    function visitorCount(){
        $this->visitorSave();
        $get = $this->db->get($this->_tb_visit);
        return $get;
    }



    function visitorSave(){
        $save_id = 0;
        $where = array(
            "v_ip" => $this->ip,
            "v_last_visit_date" => $this->today
        );
        $get = $this->db
                    ->where($where)
                    ->get($this->_tb_visit);
        $countMe = count($get->result());
        $v_data = array();
        if($countMe == 0):
           $v_data["v_ip"] = $this->ip; 
           $v_data["v_os"] = $this->os; 
           $v_data["v_browser"] = $this->browser; 
           $v_data["v_cur_visit_date"] = $this->today; 
           $v_data["v_last_visit_date"] = $this->today; 
           $v_data["v_year"] = $this->thisYear; 
           $v_data["v_month"] = $this->thisMonth; 
           $v_data["v_uniq_id"] = $this->randomChar(75); 
          $save_id = $this->SAVE($v_data,$this->_tb_visit);
        endif;
        return $save_id;
    }
    function visitorCountToday(){
       //-- will return today and yesterday 

        $get_today = $this->db
                        ->where(array("v_last_visit_date" => $this->today))
                        ->get($this->_tb_visit);
        $num_today = count($get_today->result());

        $get_yesterday = $this->db
                        ->where(array("v_last_visit_date" => $this->yesterday))
                        ->get($this->_tb_visit);
        $num_yesterday = count($get_yesterday->result());

        $r_data = array(
            "visit_today" => $num_today,
            "visit_yesterday" => $num_yesterday,
        );
        return $r_data;

    }

    function visitorCountMonth(){
        //-- will return this month and last month
        $get_curMonth = $this->db
                             ->where(array(
                                 "v_month" => $this->thisMonth,
                                 "v_year" => $this->thisYear
                             ))
                             ->get($this->_tb_visit);
        $num_curMonth = count($get_curMonth->result());
        $get_lastMonth = $this->db
                             ->where(array(
                                 "v_month" => $this->lastMonth,
                                 "v_year" => $this->thisYear
                             ))
                             ->get($this->_tb_visit);
        $num_lastMonth = count($get_lastMonth->result());

        $r_data = array(
            "visit_thisMonth" => $num_curMonth,
            "visit_lastMonth" => $num_lastMonth
        );
        return $r_data;

    }

    function visitorCountYear(){
        //-- return this year and last year
        $get_thisYear = $this->db
                             ->where(array(
                                 "v_year" => $this->thisYear
                             ))
                             ->get($this->_tb_visit);
        $num_thisYear = count($get_thisYear->result());

        $get_lastYear = $this->db
                             ->where(array(
                                 "v_year" => $this->lastYear
                             ))
                             ->get($this->_tb_visit);
        $num_lastYear = count($get_lastYear->result());

        $r_data = array(
            "visit_thisYear" => $num_thisYear,
            "visit_lastYear" => $num_lastYear

        );
        return $r_data;
    }

}//end of file
