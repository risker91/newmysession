<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends All
{

    public $template = 'vauth';




    public function action_index()
	{
          
            
            
             $auth = Auth::instance();  
             $req = Request::initial();           
            
                    if ($auth->logged_in())
                    {
                      //Request::factory('/', array('follow' => TRUE));
                        $this->redirect('/');

                    }
            
           if (isset($_POST['auth_on']))
           {  
              
              $login = Arr::get($_POST, 'login', '');
              $pass = Arr::get($_POST, 'pass', '');
          
                        if ($auth->login($login,$pass))
                        {              
                            $classmate= new Model_MyUser();
                            $session = Session::instance();
                            
                            $info=$classmate->GetUserInfo($login);
                                        
                                          foreach ($info as $v)
                                        {

                                            $session->set('mygroup',$v->classmates->group_id);
                                            $session->set('classid', $v->classmates->id);

                                        }
                              //  Request::initial()->redirect('/group'.$session->get('mygroup'));
                               // Request::factory('/group'.$session->get('mygroup'), array('follow' => TRUE));;
                                        $this->redirect('/group'.$session->get('mygroup'));
                           
  //print 'джигурда'; die;
                        }
                        else
                        {
                          

                        }
      
         
          }
        
              $this->template->modul = View::factory('vauth');;
        }
        
        
        
     public function action_out()
	{   $req = Request::initial();            
            $auth = Auth::instance();              
            $auth->logout();
            Session::instance()->set('mygroup',0);
            
           $this->redirect('/');
           
            
        }
        
        
     
        
        
       
        
}
     