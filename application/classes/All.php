<?php defined('SYSPATH') or die('No direct script access.');

class All extends Controller_Template {
      public $template = 'basic';      
      public $time;
      public $uid;
      public $curr_uid;
      public $curr_sess;
      public $sess_info;


      public function before()
      {
              
           $this->time =date("d/m/Y H:i");
           $this->uid= Session::instance()->get('uid'); 
           $this->curr_uid=$this->request->param('id'); 
          
           
           
		 parent::before();
         if($this->auto_render)
          {
             $usr = new Model_User();
             
             $this->template->self = $this->uid;
             $slf['usr'] =  $usr->getUser($this->uid);
             $this->template->self_menu = View::factory('self-menu',$slf); //$data
             $this->template->modul = '';
             $this->template->usrinfo = '';
             //$this->template->auth = View::factory('form-auth');
             $session=  Session::instance();
             
             if ($session->get('uid')=='')
                 {
                 $session->set('uid', 0);                 
                 }
                 
             
                   
                      
                   $data['usr']=$usr->getUser($this->curr_uid);                   
                   $prof['curr_uid'] = $this->curr_uid;
                   $prof['usr'] = $data['usr'];
                   $this->template->profilemenu= View::factory('profile-menu',$prof);
                   
                
                   $this->template->usrinfo = View::factory('user-info',$data);
                            
                
             
         }
       }       
       
       
      
      
    }
