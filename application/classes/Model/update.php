<?php defined('SYSPATH') or die('No direct script access.');

class Model_Update extends Kohana_ORM
{
  
    
    public function getAction($group_id)
            {                
                  $res = ORM::factory('update')->where("group_id","=",$group_id)->find_all();     
                  $mas = null;
                  foreach ($res as $k => $v) {                 
                     
                      $mas[$k+1]['action'] = $v->action;
                      $mas[$k+1]['time'] = $v->time;                     
                  }
         
          return $mas;                 
            }
            
                public function saveAction($action, $group_id)
            {
                $this->group_id =  $group_id;
                $this->action   =  $action;
                $this->time     =  date("H:i d-m-y");
                $this->save();   
                return TRUE;
            }
    
    
}