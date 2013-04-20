<?php defined('SYSPATH') or die('No direct script access.');

class All extends Controller_Template {
      public $template = 'main';      
      public $time;
      public $uid;
      public $curr_uid;


      public function before()
      {
              
           $this->time =date("d/m/Y H:i");
           $this->uid= Session::instance()->get('uid'); 
           $this->curr_uid=$this->request->param('id'); 
          
           
           
		 parent::before();
         if($this->auto_render)
          {
             $this->template->modul = '';
             $session=  Session::instance();
             
             if ($session->get('uid')=='')
                 {
                 $session->set('uid', 0);                 
                 }
                 
             if($this->uid > 0) 
                 
                {
                   $usr = new Model_User();
                      
                   $data['usr']=$usr->getUser($this->curr_uid);
                   
                   $prof['uid'] = $this->curr_uid;
                   if ($this->curr_uid==$this->uid) $prof['is_self'] = TRUE; else $prof['is_self'] = FALSE;
                   $data['profilemenu']= View::factory('profile-menu',$prof);
                   
                   $this->template->usrinfo = View::factory('usr-info',$data);
                   $mas['self'] = $this->uid;
                   $this->template->topmenu = View::factory('topmenu',$mas);                  
                }
                else 
                {
                    $this->template->auth = View::factory('form-auth');
                }
             
         }
       }       
       
       
      
      
    }
