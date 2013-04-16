<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Invite extends Controller {
    

    

                public function action_index()
                    {
                    if (isset($_POST['invite_on'])) {
                        
                        $code = Arr::get($_POST, 'code', '');                       
                        
                        $res = ORM::factory('Invite')->where("status","=","0")->where("code", "=", $code)->count_all();
                        
                        if($res==1) {                            
                             $epty = 'not_empty';
                                        $val = Validation::factory($_POST);
                                        $val->rule('email', $epty)  
                                            ->rule('name', $epty)
                                            ->rule('firstname', $epty) ;
                        
                       if($val->check())
                        {         
                         $user = new Model_MyUser();  
                         $cm = new Model_Classmate();
                         $inv = new Model_Invite();
                           
                           
                           
                        $name = Arr::get($_POST, 'name', '');
                        $firstname = Arr::get($_POST, 'firstname', '');
                        $email = Arr::get($_POST, 'email', '');
                        $sql= ORM::factory('invite')->where("code", "=", $code)->find()->as_array();
                        $id_group = $sql['group_id'];
                        $id = $sql['id'];                   
                        //$user_id=$cm->AddClassmate($name, $firstname, $id_group,$login, $pass,$email); 
                         $inv->setStatus($id,$firstname,$name, $email);
                   
                   
                    $to=  $email;              
                    $from = 'isit_project@mail.ru';   
                    $subject= 'Заявка принята';               
                    $message = 'Теперь нужно ждать пока админ вас одобрит ';
                    Email::send($to, $from, $subject, $message, TRUE);
                   
                   
                   
                   
                         $this->redirect('/welcome/');
                        }
                            
                        }
                        else {
                            
                                $this->redirect('/welcome/error/invite');
                           
                        }
                        
                        
                    }                  
                    }
    
    }
