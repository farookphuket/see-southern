<?php 

    class Seo extends MY_Controller{


        protected $_tb_seo = "seo";

        public $o_put;

        function __construct(){
            parent::__construct();

        }

        function index(){
            $url = site_url("seo/u/{$this->user_id}");
            if($this->user_is_admin()):
                $url = site_url("seo/admin");
            endif;
            redirect($url);
        }

        //---mod
        function modListKey($seg=1){
            //---call by ajax
            $get = $this->Mdl_seo->getAll()->result();
            $this->o_put["get_key"] = $get;
            $this->output->set_output(json_encode($this->o_put));
        }
        
        //----admin 17-5-19 ---///
        function admin(){
            
            $this->data["subview"] = "admin/seo/index";
            $tmp = "_ADMIN_TMP";
            $this->load->view($tmp,$this->data);
        }

    }