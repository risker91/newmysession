<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM
{
 
    public function RegUser($uid, $first_name,$last_name,$photo, $photo_rec, $hash)
    {
        $this->id = $uid;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->avatar_big = $photo;
        $this->avatar_small = $photo_rec;
        $this->hash = $hash;
        
        $this->save();
        return mysql_insert_id();
    }
    
    
    public function getUser($uid)
        {
            return ORM::factory('user',$uid)->as_array();           
            
        }   
    
}