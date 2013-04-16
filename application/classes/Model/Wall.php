<?php defined('SYSPATH') or die('No direct script access.');

class Model_Wall
{

    
              public function getIdWall($group_id)
                      {
                       $res = ORM::factory('nwall')->where("group_id", "=", $group_id)->find_all();
                     //  print_r($res);die;
                         foreach ($res as $v) {
                             $count=$v->id;      
                         }
                        
                       return $count;
                       
                  
                      }

    
    
              public function AddPost($mesg, $classmate, $group_id)
            {
                  $msg = new Model_Msgwall();
                  $cm  = new Model_Classmate();
                
                $msg->msg           =  $mesg;
                $msg->group_id       = $group_id;
                $msg->classmate_id  =  $classmate;
                $msg->time          =  date("H:i d-m-y");
                $msg->save();   
                
                $inf =$cm->getStudent($classmate);
                $rs=array('msg'=>$mesg,'avatar'=>$inf['avatar_url'], 'name'=>$inf['name']);
                
                return $rs;
                
          
            }
    
        
            
            
             
            
             public function showWall($group_id)
             {                
               $rez= DB::select('msgwalls.time','classmates.avatar_url', 'classmates.name','msgwalls.msg')               
                    ->from('classmates')                   
                    ->join('msgwalls')->on('classmates.id', '=', 'msgwalls.classmate_id')                                                    
                    ->join('groups')->on('groups.id', '=', 'msgwalls.group_id')      
                    ->where('groups.id','=',$group_id) 
                    ->order_by('msgwalls.id','DESC')                 
                    ->execute()
                    ->as_array(); 
                 
                 
                return $rez;
                 
             }
            
            public function showAction($group_id)
            {                
                  $res = ORM::factory('wall')->where("group_id","=",$group_id)->find_all();     
                  $mas = null;
                  foreach ($res as $k => $v) {
                      
                     
                      $mas[$k+1]['action'] = $v->action;
                      $mas[$k+1]['time'] = $v->time;                     
                  }
         
          return $mas; 
                
            }
    
    
}
