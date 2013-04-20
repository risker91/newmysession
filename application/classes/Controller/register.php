<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends All
{

  public $template = 'vregister';
	public function action_index()
	{                    
            
        }
        



            public function action_vk()                    
	{   
            $uid        = Arr::get($_GET, 'uid', '');
            $first_name = Arr::get($_GET, 'first_name', '');
            $last_name  = Arr::get($_GET, 'last_name', '');
            $photo      = Arr::get($_GET, 'photo', '');
            $photo_rec  = Arr::get($_GET, 'photo_rec', '');
            $hash       = Arr::get($_GET, 'hash', '');
            
            print $uid.'<br>'.$first_name.' <br>'.$last_name.'<br> <img src="'.$photo.'"> <br> <img src="'.$photo_rec.'"> <br>'.$hash;
             
           //uid, first_name, last_name, photo, photo_rec, hash
            //app_id+user_id+secret_key
            $app_id        = '3579300';
            $user_id    = $uid;
            $secret_key = '0R3zh9DtFJFVnAhpEvGw';
            echo '<br>';
            print $app_id.$user_id.$secret_key.'<br>';
            $val = md5($app_id.$user_id.$secret_key);
            print $hash.'=='.$val;
            
            if ($hash == $val) ;
        }
}
     