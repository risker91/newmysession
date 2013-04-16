<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Risk extends All {


       public function before()
      {
		 parent::before();
          if($this->auto_render)
                {            
                   $id_group=$this->request->param('group'); 
                   $fac = ORM::factory('group',$id_group)->as_array();
                   $auth =  Auth::instance();

                  if (!$auth->logged_in()) 
                   {
                      $this->redirect('error/777');
                   }
                     if (($fac['public']==0) AND  ($id_group!=0))                             
                                      {
                                          if  ($session->get('mygroup')!=$id_group)
                                            { 
                                                if (!Auth::instance()->logged_in('admin'))
                                                   { 
                                                     $this->redirect('error/1');
                                                   } 
                                            }
                                     } 
               }
         }
             
    
    
	public function action_index()
	{
          $walls = new Model_Wall();
          $cm    = new Model_Classmate(); 
           
          $data['wall']= $walls->showWall($this->id_group);
          $data['count_wall'] = count($data['wall']);
          $data['name_modul'] = 'Wall';
          
          $this->template->modul = View::factory('risk',$data);
        }
	
        
           public function action_yeah()
            { 
               $this->template->modul = 'Главная страница';            
            }
} 