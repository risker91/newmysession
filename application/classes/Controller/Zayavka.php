<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Zayavka extends All {
    
    
  public $template = 'zayavka';
	public function action_addzayavka()
	{
            $newgroup = new Model_reg();
            
            
            
            if(isset($_POST['regnewgroup']))
                {
                
                    
                    
                    $val = Validation::factory($_POST);
                    $epty = 'not_empty';
                                        $val->rule('city', $epty)
                                            ->rule('univer', $epty)
                                            ->rule('fuc', $epty)
                                            ->rule('spec', $epty)
                                            ->rule('number', $epty)
                                            ->rule('year_in', $epty)
                                            ->rule('warden', $epty)  
                                            ->rule('name', $epty)
                                            ->rule('firstname', $epty) ;
                    
                    
					
				//	print $city.'<br>'.$univer.'<br>'.$fuc.'<br>'.$spec.'<br>'.$year_create.'<br>'.$name.'<br>'.$firstname;
				//	die;
					
					
                    
                    if($val->check())
                        {   
                        $city = Arr::get($_POST, 'city', '');             
                        $univer = Arr::get($_POST, 'univer', '');  
                        $fuc = Arr::get($_POST, 'fuc', ''); 
                        $spec = Arr::get($_POST, 'spec', ''); 
                        $number = Arr::get($_POST, 'number', ''); 
                        $year_create = Arr::get($_POST, 'year_in', '');   
                        $email_warden = Arr::get($_POST, 'warden', '');   
                        $name = Arr::get($_POST, 'name', ''); 
                        $firstname = Arr::get($_POST, 'firstname', ''); 
                            $newgroup->AddGroup($city, $univer, $fuc, $spec, $number, $year_create, $email_warden,$name,$firstname);
                            
                        }
                        else
                        {
                            $this->redirect('/error/2');
                        
                        }
                    
                    $this->redirect('/');
                    
               }
            
                
        }
	


} 
