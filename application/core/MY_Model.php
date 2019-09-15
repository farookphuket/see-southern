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

    //-----
    function __construct(){
        parent::__construct();

        $this->user_name = $this->getUserName();
        $this->user_id = $this->getUserId();
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

/*

    //--comment out as no longer require
    public function get($id=null,$single=false,$limit=null,$offset=null){

        if($id != null):
            $method = 'row';
        elseif($single == true):
            $method = 'row';
        else:
            $method = 'result';
        endif;
        if(!count($this->db->order_by($this->_order_by))):
            $this->db->order_by($this->_order_by);
        endif;
     return $this->db->get($this->_table_name,$limit,$offset)->$method();
    }//end of get function
    
    public function get_by($where,$single=false ){

         $this->db->where($where);
         return $this->get(null,$single);
    }//end of get_by function
    

    */

    /*
    comment out as no use on Sun 6 May 2018
    //add this line on the Mon-29-May-2017
    function getMe($tb,$id=false,$limit=false,$offset=false){
        $get = false;
        if(!$id):
            $get = $this->db
                        ->get($tb,$limit,$offset);
        else:
            $get = $this->db
                        ->where($id)
                        ->get($tb,$limit,$offset);
        endif;        

        return $get;
    }//end of getMe

    //--not use
    public function save($data,$id=null){
        if($id != null):
        //the id has pass in get to edit
        $this->db
                ->where($id)
                ->set($data)
                ->update($this->_table_name);
        $id = $id;
        else:
        //no id set will be insert
        $this->db
            ->set($data)
            ->insert($this->_table_name);
        $id = $this->db->insert_id();
        endif;
    return $id;
   }//end of save function
    public function del($id){
        if(!$id):
            return false;
        endif;
        $this->db
                ->where($id)
                ->limit(1)
                ->delete($this->_table_name);    
       return true;
   }//end of del function

   */


}//end of MY_Model class
