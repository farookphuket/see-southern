<?php

class MY_Model extends CI_Model{
    
    protected $_table_name = '';
    protected $_order_by = '';


    //last edit on Tue 13 June 2017
    // Add $_tb_name
    protected $_tb_name;
    

    //--add Fri 20 Apr 2018
    public $ip;
    public $os;
    public $browser;




    public $user_name;
    public $user_id;

    public $today;
    //-----
    function __construct(){
        parent::__construct();

        $this->user_name = $this->getUserName();
        $this->user_id = $this->getUserId();
        $this->today = date("Y-m-d",time());
    }//end of construct

    function getUserName(){
      return $this->session->userdata("user_name");
    }

    function getUserId(){
      return $this->session->userdata("user_id");
    }
    
    function getEl($el,$option=false){
      return $this->input->post($el,$option);
    } 
    
    //---this method has create on Fri 20 Apr.2018
    //--getIP
    function getIP(){
        $this->ip = $this->input->ip_address();
        return $this->ip;
    }

    //--getOS
    function getOS(){
        $this->os = $this->agent->platform();
        return $this->os;
    }

    function user_is_login(){
        return $this->session->userdata("is_login");
    }

   function user_is_admin(){
        return $this->session->userdata("is_admin");
    }

    function user_is_mod(){
        return $this->session->userdata("moderate");
    }

    
    

    //--getBrowser
    function getBrowser(){
        $browser = $this->agent->browser();
        $version = $this->agent->version();
        $data = "Browser {$browser} version {$version}";
        $this->browser = $data;
        return $this->browser;
    }


    //----randomChar
    function randomChar($length=false){
        if(!$length):
            $length = 10;
        endif;
        $permitted_chars = '123456789ABJREESMMRSDSFFSFTYUGGFCDE25KKYMBMBUOPPREDFGHJMNPQRSTUVWXYZ';
        // Output: 54esmdr0qf
        $random = substr(str_shuffle($permitted_chars), 0, $length);
        return $random;
    }

   
    /* GLOBAL Method 14-Sep-2019 */
    function SAVE($data,$tb,$where=false){
      $save = 0;
      $id = 0;
      if($where):
          $id = $where;
          $save = $this->db
                        ->where($where)
                        ->set($data)
                        ->update($tb);
      else:
        $save = $this->db
                      ->set($data)
                      ->insert($tb);
        $id = $this->db->insert_id();
      endif;
      return $id;
    }
    

    function GET($tb,$where=false){
      $get = 0;
      if($where):
        $get = $this->db
                    ->where($where)
                    ->get($tb);
      else:
        $get = $this->db->get($tb);
      endif;
      return $get;
    }

//---------------------------------
//---End of get user info fri 20 apr 2018
//--------------------------------

function getTB($tb,$id=false,$limit=false,$offset=false)
{
    
    //$get = 0;
    if($id):
        $get = $this->db
                    ->where($id)
                    ->get($tb,$limit,$offset);
    else:
        $get = $this->db
                    ->get($tb,$limit,$offset);     
    endif;
    return $get;
}


function saveTB($tb,$data,$id=false)
{
    $save = 0;
    $a_id = 0;
    if($id):
        $save = $this->db
                    ->where($id)
                    ->set($data)
                    ->update($tb);
        $a_id = $id;
    else:
        $save = $this->db
                    ->set($data)
                    ->insert($tb);
        $a_id = $this->db->insert_id();
    endif;

    return $a_id;
}
function delTB($tb,$id=false,$del_table=false)
{
    $del = 0;
    if($del_table && $id == false):
        $del = $this->db->empty_table($tb);
        $del = 1;
    else:
        $del = $this->db 
                ->where($id)
                ->delete($tb);
        $del = 1;
    endif;
    
    return $del;
}
///////////////////////////////////
////////////////    end of method getTB saveTB delTB
////////////////////////


function getTable(){
    return $this->_table_name;
}

function DEL($where,$tb){
    $this->db
            ->where($where)
            ->delete($tb);
}



}//end of MY_Model class
