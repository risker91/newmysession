<?php defined('SYSPATH') or die('No direct script access.');

class Model_Group extends Kohana_ORM


{

                protected $_belongs_to = array(
                'specs'    => array(
                'model'         => 'spec',
                'foreign_key' => 'id'),
                    
                'news'    => array(
                'model'         => 'news',
                'foreign_key' => 'id'
                )
                    
                    
                );
                
                  
    
    
    
        function get_year($id)
    {
         $fac = ORM::factory('group')->where("spec_id","=",$id)->find_all();         
         
          return $fac;  
       
    }
    
    
    function only_year($year)
    {
         $rez= DB::select('univers.univer','specs.spec','groups.year_in','groups.id')
                    ->from('groups')
                    ->join('specs')->on('groups.spec_id', '=', 'specs.id')
                    ->join('facultets')->on('facultets.id', '=', 'specs.fac_id')
                    ->join('univers')->on('facultets.univer_id', '=', 'univers.id')
                    ->where('groups.year_in','=',$year)                    
                    ->execute()
                    ->as_array();  
        
         return $rez;        
    }
    
    function GetSpecYear($year)
    {
        $group = ORM::factory('group')->where("year_in","=",$year)->find_all();
        
        return $group;

    }
    
    
    
    
    
}