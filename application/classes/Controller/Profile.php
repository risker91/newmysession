<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends All
{
     public function action_index()
	{
         if($this->uid <= 0) $this->redirect('/');
         $usr = new Model_User();
         $uid = $this->request->param('id');         
         $data['usr']=$usr->getUser($uid);
         
         $this->template->modul = View::factory('wall');
         
        }
    
    
    
}