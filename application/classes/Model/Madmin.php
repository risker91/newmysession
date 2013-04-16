<?php defined('SYSPATH') or die('No direct script access.');

class Model_Madmin
{

    
    
        public function add_results ($stud,$semestr,$pred)
   {        
              
    }
    
          public function get_predmet ($semestr)
   
           {   
              $items = ORM::factory('item')->where("semestr","=",$semestr)->find_all();
          return $items;
           }
           
              public function get_student ()
   
           {   
              $items = ORM::factory('classmate')->find_all();
          return $items;
           }
    
    

}