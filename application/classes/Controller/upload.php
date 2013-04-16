<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Upload extends All
{

	public function action_index()
	{
                   
         $group = new Model_Mgroup();
                
                 $data['mess'] = 'yes';
                  
                
                
                $this->template->modul = view::factory ('vupload', $data);
                
                
                if(isset($_POST['send'])){ 
                Upload::save($_FILES['file']); 
                print 'Yes';
                }
            
            
            
            
            
        }
        
        
}