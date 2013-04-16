<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Settings extends All
{
    
    
	public function action_index()
	{
              $data = array();
                $info=Auth::instance()->get_user();
                $cm_inf = ORM::factory('classmate',$info->profile_id)->as_array();
                
                $data['username']   =$info->username;    
                  
                $data['email']      =$info->email;
                $data['male']      =$cm_inf['male'];
                
           
                
                $this->template->modul = view::factory ('settings', $data);
        }
        
         public function action_ChangeSex()
         {
             
         }
        
        
         
         public function action_ChangeAvatar()
             {
          if($_POST['chgavatar']){   
             Upload::$default_directory = $_SERVER['DOCUMENT_ROOT'].'/dop/images/avatars/';             
             $types=array('jpg','jpeg','Jpg','Jpeg','png' );
             $size_='2M';
             
                $validation = Validation::factory($_FILES)
                    ->rule('filename', 'Upload::valid')
                    ->rule('filename', 'Upload::type', array(':value', $types))                     
                    ->rule('filename', 'Upload::size', array(':value', $size_));
            
                          if($validation->check())
                              {
             $file_exp = $this->getExp($_FILES['filename']['name']);             
             $fullname = $_FILES['filename']['name'].'.'.$file_exp;
             
              Upload::save($_FILES['filename'],$fullname);
              
              $upload_avatar = new Model_Classmate();
              
              $this->redirect($_SERVER['HTTP_REFERER']);
                          }
                              
             
          }
             }
         
         
          public function action_ChangeLogin()
             {
                            
                            $cm=new Model_Classmate();
                            
                            if (isset($_POST['chglogin']))
                                {
                                    $newlogin = Arr::get($_POST, 'login', '');
                                    $user_id = Session::instance()->get('classid');
                                    if($newlogin!='') $cm->ChangeLogin($user_id, $newlogin);
                                    $this->redirect($_SERVER['HTTP_REFERER']);
                                }                       
              }
              
                 public function action_ChangeEmail()
                 {
                            
                            $cm=new Model_Classmate();
                            
                            if (isset($_POST['chgemail']))
                                {
                                    $newemail = Arr::get($_POST, 'email', '');
                                    $user_id = Session::instance()->get('classid');
                                    $cm->ChangeEmail($user_id, $newemail);
                                    $this->redirect($_SERVER['HTTP_REFERER']);
                                }                       
                }
                
                
                
       public function action_ChangePassword()
                 {
                            
                            $cm=new Model_Classmate();
                            
                            if (isset($_POST['chgpass']))
                                {
                                    $newpass = Arr::get($_POST, 'newpass', '');
                                    $repass  = Arr::get($_POST, 'repass', '');
                                    $oldpass = Arr::get($_POST, 'oldpass', '');
                                    
                                    
                                    
                                    
                                    $user_id = Session::instance()->get('classid');
                                    $cm->ChangePassword($user_id, $oldpass, $newpass, $repass);
                                    $this->redirect($_SERVER['HTTP_REFERER']);
                                }                       
                }
    
    
    
    
    
}