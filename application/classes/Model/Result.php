<?php defined('SYSPATH') or die('No direct script access.');

class Model_Result extends Kohana_ORM
{

   protected $_belongs_to = array(
 'classmate' => array( 'model'=> 'classmate', 'foreign_key' => 'id'),
 'item' => array('model'=> 'item', 'foreign_key' => 'id')
 );
   
   
   
   
   public function GetResults($id_group)
         {
    $rez= DB::select('results.result')
                    ->from('classmates')                   
                    ->join('results')->on('classmates.id', '=', 'results.id_student')
                    ->join('items')->on('items.id', '=', 'results.id_predmet')                                     
                    ->where('classmates.group_id','=',$id_group) 
                    ->where('items.form','=',"экзамен") 
                    ->execute()
                    ->as_array();  
    return $rez;
        }
    
}
