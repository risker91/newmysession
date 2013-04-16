<?php defined('SYSPATH') or die('No direct script access.');

class Model_Invite extends Kohana_ORM
{
    
      protected $_primary_key = 'id';
      
      
    protected $_has_one = array(
            'user'    => array(
                   'model' => 'user',
                   'foreign_key' => 'id'
                   )
        );
    
    
    
       public function genInvite($length) //удалить со временем  аналог пассвордс
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
            
            
                 public function getInvites($group_id)
	{                        
         //  $res = $this->factory('invite')->with('user')->where("group_id","=",$group_id)->find_all();
                     $res = $this->factory('invite')->where("group_id","=",$group_id)->find_all();
          
                     foreach ($res as $i=>$dd){
                     $mas[$i]['id']=$dd->id;                         
                     $mas[$i]['firstname'] =$dd->firstname;
                     $mas[$i]['status'] =$dd->status;   
                     $mas[$i]['name'] =$dd->name; 
                     $mas[$i]['email'] =$dd->email; 
                     $mas[$i]['code'] =$dd->code; 
                     $mas[$i]['accept'] =$dd->accept; 
                     
                    
                     
                 //     $mas ("select"=>$buf_items)
                         
                     
                     
                //$res->user->find_all()
             //  $mas[$i]['active'] =$dd->user->active;                    
           ///   $mas[$i]['username'] =$dd->user->username;
               
           }
           
           
           
           
           return $mas;            
        }
        
                 public function setStatus($id, $firstname,$name, $email)
	{                        
           $res = $this->factory('invite',$id); 
          
           $res->status = 1;
           $res->firstname = $firstname;
           $res->name = $name;
           $res->email = $email;           
           $res->save();
           return true;            
        }
        
    
}