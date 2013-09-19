<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends All
{

 public function action_index()
	{
     $this->redirect('/');
     
        }
        
        public function action_app()
	{
          $uid   = Arr::get($_POST, 'login', '');
          $pass  = Arr::get($_POST, 'pass', '');
          
          $ntu = new Model_Testuser();
          $ntu->AddUser($login, $pass);
          die;
            
        }
        

    public function action_vk()
	{
        $uid  = Arr::get($_GET, 'uid', '');

            if(Session::instance()->get('uid')<=0)
              {
                
                        if(!$this->check_user($uid))
                         {
                         
                            $first_name = Arr::get($_GET, 'first_name', '');
                            $last_name  = Arr::get($_GET, 'last_name', '');
                            $photo      = Arr::get($_GET, 'photo', '');
                            $photo_rec  = Arr::get($_GET, 'photo_rec', '');
                            $hash       = Arr::get($_GET, 'hash', '');

                            $app_id     = '3579300';
                            $user_id    = $uid;
                            $secret_key = '0R3zh9DtFJFVnAhpEvGw';


                            $val = md5($app_id.$user_id.$secret_key);    
                            if ($hash == $val) 
                            {
                                $user = new Model_User();
                               $user->RegUser($uid, $first_name, $last_name, $photo, $photo_rec, $hash);

                               Session::instance()->set('uid', $uid);
                               $this->redirect('/id'.$uid);  /** редирект на страницу его*/
                            }
                       


                          }
                           else
                           {
                               Session::instance()->set('uid',$uid );
                               $this->redirect('/id'.$uid);
                           }
                        
                    }
 else { $this->redirect('/id'.$uid);}
           
         
        }
        
        
        
        private function check_user($uid)
              {
                  $usr = ORM::factory('user',$uid)->as_array();


                  if($usr['id']!='') return TRUE; else return FALSE;

              }
        
     public function action_out()
          {   
          Session::instance()->set('uid',0);
          $this->redirect('/');
          }
        
        
     
        
        
       
        
}
     