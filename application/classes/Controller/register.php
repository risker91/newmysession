<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends All
{

  public $template = 'vregister';
	public function action_index()
	{        
            
          $this->template->modul = view::factory('vregister');        
            
            
          
          if (isset($_POST['reg_on'])){
              
            $user = new Model_MyUser();   
              
          $login = Arr::get($_POST, 'username');
          $pass = Arr::get($_POST, 'password');
          $email = Arr::get($_POST, 'email'); 
          
             //ORM::factory('user')->create_user($_POST, array('username', 'email', 'password'));
          
        if ($user->reg($login, $pass, $email))
        {              
          $this->template->name='Yes';
          $this->request->redirect('/');
         }
       
          
        // $user = ORM::factory('user')
	//	->create_user($_POST, array('username', 'email', 'password')) // Регистрируем пользователя
	//	->add('roles', ORM::factory('role', array('name' => 'login')));  // Добавляем роль login
 
	


          
          
            
        }
        
}
}
     