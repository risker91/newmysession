<?php defined('SYSPATH') or die('No direct script access.');

class All extends Controller_Template {
       public $template = 'main-group';
      public $user_role = '1' ; //user = user 
      public $time;
      public $id_group;


      public function before()
      {
          //    $pas = Auth::instance();
      	//print $pas->hash_password('111111');
      //die;
      
           $this->time =date("d/m/Y H:i");
           $this->id_group= Session::instance()->get('mygroup'); 
          
           
           
		 parent::before();
         if($this->auto_render)
          {
             
             
             $session=  Session::instance();
                     
             
             if ($session->get('mygroup')==''){
                 $session->set('mygroup', 0);                 
             }
             
            
             
             
             $news = new Model_News();
             $know = new Model_Know();
             $auth = Auth::instance();
             
             
            
            $this->template->modul = '';            
            $this->template->name = '';
            $this->template->menu ='';
                   
            $this->template->name_modul = '';
            $this->template->adminiusmenu ='';
            $this->template->title = $session->get('mygroup'); 
            
            
            
            
            $data['id_group'] =  $this->id_group;            
            $data['abbr'] =  'MySession';          
            $this->template->topmenu = View::factory('topmenu',$data);
            
            
            
            
            $this->template->log_in = null;
            $this->template->id_group =  $this->id_group;
           
            $this->template->mes = '';
            $this->template->news = $news->show_news($this->id_group);           
            
            
            
            
                            
                            
             
             if ($auth->logged_in())
             {
                 $data['elder']=false;
                 if ($auth->logged_in('elder')) 
                     {
                     $data['elder']=TRUE;                     
                     }
                
                     
                
                 
                 $data['id_group']=  Session::instance()->get('mygroup');
                 $data['self']=  Session::instance()->get('classid');
               //  $this->template->menu = View::factory('vfloat-cabinet',$data);
                 $this->template->topmenu = View::factory('topmenu',$data);
                
                          
               
             }
             else
             {                        
                   //$this->redirect('/error/302');
             }
             
             
                
          }
       }       
       
       
       public  function getExp($filename) {
          return substr(strrchr($filename, '.'), 1);
        }
       
       
       public function goLog($action, $time, $group_id)
       {
           $wall = new Model_Wall();
           $wall->saveAction($action, $time, $group_id);  
           
       }
    }
