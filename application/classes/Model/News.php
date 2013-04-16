<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends Kohana_ORM
{
     protected $_belongs_to = array(
                'groups'    => array(
                'model'         => 'group',
                'foreign_key' => 'id',
                )
                );
    
    
    
    function show_news($group_id)
    {
        $res='';
         $news = ORM::factory('news')
                 ->where("visible","=",1)
                 ->where("group_id","=",$group_id)
                 ->find_all();         
         
         foreach ($news as $mas){
            
             $res['date']=$mas->time;
             $res['news']=$mas->content;  
          
         }
                return $res;        
    }
    
    function addNews($group_id,$news,$time)
        {
            $this->group_id     =   $group_id;
            $this->content      =   $news;
            $this->time         =   $time; 
            $this->visible      =   1;
            
            $this->save();
        }
    
    
    
    
}
  
    