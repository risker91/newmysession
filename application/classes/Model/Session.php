<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Session extends ORM {

    public function createSess($uid, $title) {
        $this->create_user = $uid;
        $this->descr = $title;
        $this->save();

        $s = mysql_insert_id();

        $follow = new Model_Follower();
        $follow->user_id = $uid;
        $follow->session_id = $s;
        $follow->save();
    }

    
    public function enter_in($uid,$sid) {
        $follow = new Model_Follower();
        
        $follow->user_id    = $uid;
        $follow->session_id = $sid;
        $follow->save();
        return true;
    }
    
    
    public function is_sub($uid, $type, $target) {
       $res = $this->getSub($uid, $type, $target);
       if($res>0) return true;
       return false;
    }
    
    public function is_follow($uid,$sid) {
        $res = ORM::factory('follower')->where("user_id", "=", $uid)->and_where("session_id", "=", $sid)->count_all();
        if($res>0) return true;
        
        return false;
    }
    
   public function is_admin($uid,$sid) {
        $res = $this->where("create_user", "=", $uid)->where("id", "=", $sid)->count_all();
        if($res>0) return true;
        
        return false;
    }
    
      public function getSub($uid, $type, $target) {
          $id=0;
          $sub = ORM::factory('sub')->where("uid", "=", $uid)->and_where("type", "=", $type)->and_where("target", "=", $target)->find_all();
          foreach ($sub as $v) {
              $id = $v->id;
          }
          return $id;
      }

    public function deleteSub($id) {
        $sub = ORM::factory('sub',$id);
        $sub->delete();       
        
    }
    
    public function addSub($uid,$type,$target) {
        
        $sub = new Model_Sub();
        
        $sub->uid   = $uid;
        $sub->type  = $type;
        $sub->target   = $target;
        $sub->save();
        return true;
    }
   

    public function loadSess($uid) {

        $res = DB::select('sessions.id', 'sessions.descr', 'sessions.create_user')
                ->from('sessions')
                ->join('followers')->on('sessions.id', '=', 'followers.session_id')
                ->join('users')->on('users.id', '=', 'followers.user_id')
                ->where('users.id', '=', $uid)
                ->execute()
                ->as_array();
      //  $len =  sizeof($res);
     // error_reporting(7);
       // print count($res);die;
        for ($i = 0; $i < count($res); $i++)
        {
            
            $n = $res[$i]['id'];
            $res[$i]['count_followers'] = $this->getCountFollowers($n);
            $res[$i]['count_items'] = $this->getCountItems($n); 
            $res[$i]['name_create_user'] = $this->getCreateUser($res[$i]['create_user']); 
            
        }    
        
        
        return $res;
    }
    
     public function getFollowers($sid)
        {
         $res = DB::select('users.id','users.first_name','users.last_name', 'users.avatar_big')
                ->from('users')
                 ->join('followers')->on('followers.user_id','=','users.id')
                 ->where("followers.session_id", "=", $sid)  //Тест вида фоловеров
                 ->execute()
                 ->as_array();
        
         return $res;
         
        }
        
        public function getSession($sid)
        {
            $res = ORM::factory('session',$sid)->as_array();
            
            return $res;
            
        }

                public function getCountFollowers($sid)
        {
            return ORM::factory('follower')->where("session_id", "=", $sid)->count_all();
        }
        
    public function getCountItems($sid)
        {
            return ORM::factory('item')->where("session_id", "=", $sid)->count_all();
        }     
  
    public function getCreateUser($uid)
        {
            return ORM::factory('user',$uid)->as_array();
            
            
            
        }   
        
}