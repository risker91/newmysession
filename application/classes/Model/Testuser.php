<?php defined('SYSPATH') or die('No direct script access.');

class Model_Testuser extends ORM
{
  public function AddUser($login,$pass){
        $this->login = $login;
        $this->pass = $pass;
        $this->save();
        
        
    }
    
}