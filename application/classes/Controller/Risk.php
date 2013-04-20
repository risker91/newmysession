<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Risk extends All {


       public function before()
      {
		 parent::before();
          if($this->auto_render)
                {            
 
              
              
              
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