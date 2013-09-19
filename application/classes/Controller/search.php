<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends All
{

 public function action_index()
	{
    
     $type   =   Arr::get($_GET, 'type', '');
     $obj    =   Arr::get($_GET, 'obj', '');
     
     print $type.' '.$obj;
     
     $this->template->modul = View::factory('search');
     
             
        }
        
}