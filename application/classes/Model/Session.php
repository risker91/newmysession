<?php defined('SYSPATH') or die('No direct script access.');

class Model_Session extends ORM
{
    public function createSess($uid,$title)
    {
        $this->create_user  = $uid;
        $this->descr        = $title;
        $this->save();
        
        $s =mysql_insert_id();
        
        $follow = new Model_Follower();        
        $follow->user_id        = $uid;
        $follow->session_id     = $s;
        $follow->save();
    }
    
     public function loadSess($uid)
    {
         
         $res= DB::select('sessions.id', 'sessions.descr')
                    ->from('sessions')
                    ->join('followers')->on('sessions.id', '=', 'followers.session_id')
                    ->join('users')->on('users.id', '=', 'followers.user_id')               
                    ->where('users.id','=',$uid)                  
                    ->execute()
                    ->as_array(); 
         return $res;
         
    }
 
    
}