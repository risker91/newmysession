<?php defined('SYSPATH') or die('No direct script access.');

class Model_MyUser extends Kohana_ORM
{
    
    
     protected $_belongs_to = array(
                'classmates'    => array(
                'model'         => 'classmate',
                'foreign_key' => 'profile_id'));
    
    
    protected $_table_name = 'users';
    protected $_primary_key = 'id';
    
    
    
    
    
                public function logins($length) //удалить со временем  аналог пассвордс
            {  
                    $i=1;
                    $word='';
            $symbols = "QWERTYUIPASDFGHJKZXCVBNM"."qwertyuipasdfghjkzxcvbnm"."12345689"; 
            while($i<=$length) {  
            $word .= $symbols[mt_rand(0, strlen($symbols)-4)]; 
            $i++;  
            } 
            return $word;  
            } 
            
            
            
             public function GenPaswd($length) 
            {  
                    $i=1;
                    $word='';
            $symbols = "QWERTYUIPASDFGHJKZXCVBNM"."qwertyuipasdfghjkzxcvbnm"."12345689"; 
            while($i<=$length) {  
            $word .= $symbols[mt_rand(0, strlen($symbols)-4)]; 
            $i++;  
            } 
            return $word;  
            } 


    public function GetUserInfo($login)
	{
            $fac = ORM::factory('myuser')->where("username","=",$login)->find_all();         
         
          return $fac;  
           
       }
    
    
    
    
    
   public function reg($email,$profile_id)
	{
            $auth = Auth::instance();
            $user = new Model_MyUser();
            $role = new Model_RolesUser();
            
             
            
            
         
         $user->username = $this->GenPaswd(6);   
         $pass = $this->GenPaswd(8);
           
           
           
      
	//$user = ORM::factory('user')		
		//->add('roles', ORM::factory('role', array('name' => 'login', )));  // Добавляем роль login
    
           
           
           
      
            $user->password = $auth->hash_password($pass);
            $user->email = $email;
            $user->profile_id = $profile_id;
            $user->save();   
                                   
         
           $id=mysql_insert_id();      
           
           
           
         /* $role->user_id = $id;
          $role->role_id = '1';  //роль пользователя по умолчанию  просто1 пользователь           
          $role->save();
          * 
          */
           $r[1]=1;
           $r[2]=4;
                $query = DB::insert('roles_users', array('user_id', 'role_id'));
                for ($i=1;$i<=2;$i++)
                {
                    $query->values(array($id, $r[$i]));
                }
                $query->execute();
          
     
        
          
          
          
          
          $mas['login'] = $user->username;
          $mas['pass'] = $pass;
          $mas['id'] = $id;
           
         
            
            return $mas;
            
        }
        
        
    
}

