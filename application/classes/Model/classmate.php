<?php defined('SYSPATH') or die('No direct script access.');

class Model_Classmate extends Kohana_ORM
{
  
    
    protected $_has_one = array(
            'user'    => array(
                   'model' => 'user',
                   'foreign_key' => 'profile_id'
                   ),
        'tests'    => array(
                   'model' => 'test',
                   'foreign_key' => 'test_id'
                   )
            );
  
    

    
            protected $_belongs_to = array(
                'groups'    => array(
                'model'         => 'group',
                'foreign_key' => 'id',
                ),
           
                
                  'user' => array(
                   'model' => 'user',
                   'foreign_key' => 'id')
                );
    
 
    
    protected $_has_many = array(
       'items'       => array(
                   'model' => 'item',
                   'foreign_key' => 'id_student',
                   'through'      => 'results', 
                   'far_key'      => 'id_predmet',   
                   ),
        
        
          'results'    => array(
                   'model'         => 'result',
                   'foreign_key' => 'id_student',
               ),
        'wall'    => array(
                   'model'         => 'wall',
                   'foreign_key' => 'classmate_id',
               )
          );
    
    
  /*  Public function active_student($id_group)
    {
       $rez= DB::select('COUNT(classmates.id)')
               
                    ->from('classmates')                   
                    ->join('users')->on('classmates.id', '=', 'users.id')                                                    
                    ->where('classmates.group_id','=',$id_group) 
                    ->where('users.logins','>=',1) 
                    ->execute()
               ->as_array();
       return $rez;
        
    }
   * 
   */
    
    
    public function GetCountStudent($id_group)
    {
       $rez = ORM::factory('classmate')
                             ->select(COUNT('id'))
                             ->where("group_id","=",$id_group)
                             ->count_all();
       return $rez;
                             
    }
    
    public function GPA($sum,$item_count,$student_count)
         {
          $rez=1;
        //$sum/($item_count*$student_count);
          return $rez;
        
         }






 public function sex($name, $firstname)
	{  
          
 $male='бвгджзйклмнпрстфхцчшщ';
 $female='ауоыиэяюёе';
 $sex=0;
 
 $name=  trim($name);
 $firstname=  trim($firstname);
 $name_e = substr($name,strlen($name)-2); 
 $firstname_e = substr($firstname,strlen($firstname)-1);
 
 //print $name_e.'===='.$firstname;die;
 

 error_reporting(7);
 for ($i=1;$i<=strlen($male);$i++)
 {
 if ($name_e==$male[$i]) $sex=$sex+2;
 if ($firstname_e==$male[$i]) $sex++;
 }


  for ($i=0;$i<=strlen($female);$i++)
 {
 if ($name_e==$female[$i]) {$sex=$sex-2;}
 if ($firstname_e==$female[$i]) {$sex=$sex-1;}
 }

 if($sex>0) $sex=1; else $sex=0;
 
 return $sex;
            
        }




    
    
     public function ShowClassmates($group_id)
	{                        
          // $res = $this->factory('classmate')->with('user')->where("active","=",1)->find_all();
      
    $res= DB::select('classmates.firstname','classmates.name','classmates.id','classmates.avatar_url')
                    ->from('classmates')
                    ->join('users')->on('classmates.id', '=', 'users.profile_id')                 
                    ->where('users.active','=',1) 
                    ->execute()
                    ->as_array();  
           
           
          
          // var_dump($res);die;
          
      //     foreach ($res as $v) {
        //       print $v->user->name;
               
        //   }
           
         //  print_r($res);die;
                       
           return $res;            
        }
        
   
        
        
  
                       

        
  
        
        
        
         public function ShowOnlyCm($id)
	{
                        
           $mate = ORM::factory('classmate')->where("id","=",$id)->find_all();
                       
            return $mate;
            
        }
    
        
        
         public function AddClassmate($name,$firstname,$group_id,$login,$pass,$email, $sex)
	{
                        
           $classmate = new Model_Classmate(); 
           $user = new Model_MyUser();
           $role = new Model_Rolesuser();
           
           
           
           $classmate->name=$name;
           $classmate->firstname=$firstname;
           $classmate->male=$sex; //1=male 0=female
           $classmate->group_id=$group_id;
             if ($sex==1) $classmate->avatar_url = '/dop/images/avatars/no_avatar_m.gif'; 
                    else $classmate->avatar_url = '/dop/images/avatars/no_avatar_f.gif';
           $classmate->save();
           
           
           $profile=mysql_insert_id();  
           $user->username = $login;           
           $user->profile_id = $profile;           
           $user->password = Auth::instance()->hash_password($pass);
           $user->email =$email;
           $user->active = 1;
           $user->save();  
           
           $id_user=mysql_insert_id();
           $role->user_id = $id_user;
           $role->role_id = 1;  //роль пользователя по умолчанию  просто 1 пользователь
           $role->save();
          //  print $profile;die;
           return $profile;
            
        }
        
       public function getAvatar($id)
       {
           $res =  ORM::factory('classmate',$id);
           
           return $res->avatar_url;
       }
        
         public function getStudent($id)
       {
           $res =  ORM::factory('classmate',$id)->as_array();
          
          
           return $res;
       }
    
    
    
   
    
    

   
    
}

