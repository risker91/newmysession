<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adminius extends All
{
    public $template = 'adminiuspanel';
       
       
        
    public function action_index()
	
            
        {    
        $apps = new Model_Reg();
        
        //подгрузка модулей вида
         $data['adminiusmenu']= View::factory('adminiusmenu');
         
      
         //рендер    
         $this->template = View::factory('adminiuspanel',$data);
        }
        
       
        public function action_Apps()
        {    
            $aa = new Model_Adminius();
            
        $apps = new Model_Reg();
       $data['apps']=$apps->ShowApps();
         
         
            $this->template->adminiusmenu = View::factory('apps',$data);
        }
        
        
          public function action_AcceptGroup()
        {    
              $new = new Model_Adminius();
              
               $id=$this->request->param('reggroup');  
               
              $new->AcceptNewGroup($id);
          
        }
    
}