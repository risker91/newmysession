<?php defined('SYSPATH') or die('No direct script access.');

class Model_Adminius
{

    
    
        public function AcceptNewGroup ($id)
   {        
            $func = new Model_Functions();
            $user = new Model_MyUser();
            
            $newgroup = ORM::factory('reg',$id);
            
            
            
            $city = new Model_City();            
            $city->city = $newgroup->city;
            $city->save();
            $count=mysql_insert_id();
            
            
            $univer = new Model_Univer();           
            $univer->univer = $newgroup->univer;
            $univer->city_id= $count;
            $univer->save();   
            $count=mysql_insert_id();
            
            $faculty = new Model_Facultet();           
            $faculty->facultet = $newgroup->facultet;
            $faculty->univer_id= $count;
            $faculty->save();
            $count=mysql_insert_id();
            
            $spec = new Model_Spec();           
            $spec->spec = $newgroup->spec;
            $spec->fac_id= $count;
            $spec->save();
            $count=mysql_insert_id();
            
            $group = new Model_Group();
            $group->spec_id = $count;
            $group->year_in = $newgroup->year_create;
            $group->public = 1;
            $group->save();            
            $count=mysql_insert_id();
            
            $group = new Model_Classmate();
            $group->name = $newgroup->name;
            $group->firstname = $newgroup->firstname;
            $group->group_id = $count;
            $group->year = $newgroup->year_create;          
            $group->save();
            $profile_id=mysql_insert_id();
            
            
            
           $info = $user->reg($newgroup->email_warden,$profile_id);
            
             $to=  $newgroup->email_warden;              
             $from = 'isit_project@mail.ru';   
             $subject= 'Ваша заявка рассмотрена и подтверждена';               
              $message = 'Вы успешно зарегистрированны, теперь можете войти на сайт<br>логин: '.$info['login'].'    пароль:'.$info['pass'];
               // $name='Руслан';
              // $func->SendEmail($to, $from, $subject, $message, TRUE);
              
              //$mailer = Email::connect();
              //$mailer->send($message);
              Email::send($to, $from, $subject, $message, $html = true);
                    
            
            
            $del = ORM::factory('reg',$id);
            $del->delete();
            
            
            return true;
              
    }
    

           
    
    

}