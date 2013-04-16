<?php defined('SYSPATH') or die('No direct script access.');

class Model_Reg extends Kohana_ORM
{
    
   function AddGroup($city, $univer, $fuc, $spec, $number, $year_create, $email_warden, $name, $firstname)
           
    {
       $newgroup = $this;
       $newgroup->city = $city;
       $newgroup->univer = $univer;
       $newgroup->facultet = $fuc;
       $newgroup->spec = $spec;
       $newgroup->number = $number;
       $newgroup->year_create = $year_create;
       $newgroup->email_warden = $email_warden;
       $newgroup->name = $name;
       $newgroup->firstname = $firstname;
       
       $newgroup->save();
        
    }
    
    function ShowApps()
    {       
        $res = array();
        $apps = ORM::factory('reg')              
                ->find_all();   
       
        foreach ($apps as $n=>$mas )
            {
             $res[$n] = array   
                       (            "id"             =>    $mas->id, 
                                    "city"           =>    $mas->city, 
                                    "univer"         =>    $mas->univer,
                                    "faculty"        =>    $mas->facultet,
                                    "spec"           =>    $mas->spec,
                                    "year_create"    =>    $mas->year_create,
                                    "email_warden"   =>    $mas->email_warden,
                                    "name"           =>    $mas->name,
                                    "firstname"      =>    $mas->firstname
                       );          
            }
        return $res;
    
    }

}