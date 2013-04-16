<?php defined('SYSPATH') or die('No direct script access.');

class Model_Msession
{
    
  
    
     function  add_result($id_student,$id_item,$res)
    {
         $result= new Model_Result();
         
         
         $result->id_predmet=$id_item;
         $result->id_student=$id_student;
         $result->result=$res;
         $result->save();        
    }
    
    public function view_results()
	{                        
           $mate = ORM::factory('result')->find_all();
                       
            return $mate;
            
        }
        
            public function load_semestr($sem,$group)
	{                        
              // $rez= array(); 
          
            
           
 // $rez = DB::query(Database::SELECT, 'SELECT c.firstname,i.title,r.result FROM classmates c JOIN results r ON c.id=r.id_student JOIN items i ON i.id=r.id_predmet')->execute();
       
         
           
           
          $rez= DB::select('classmates.firstname','items.title','results.result')
                    ->from('groups')
                    ->join('classmates')->on('classmates.group_id', '=', 'groups.id')
                    ->join('results')->on('classmates.id', '=', 'results.id_student')
                    ->join('items')->on('items.id', '=', 'results.id_predmet')
                    ->where('items.semestr','=',$sem)                    
                    ->where('groups.id','=',$group) 
                    ->execute()
                    ->as_array();  
          
          
          /*
     $count_sql = '(c.firstname,i.title,r.result FROM classmates c JOIN results r ON c.id=r.id_student JOIN items i ON i.id=r.id_predmet;';
    ORM::factory('reestr')
    ->select('id', DB::expr($count_sql), 'title', 'address', 'phones')
    ->find_all();
           
           
           
           /* $rez = ORM::factory('classmate')
          ->join('results')->on('classmates.id', '=', 'results.id_student')
          ->join('items')->on('items.id_item', '=', 'results.id_predmet')
          ->where('items.semestr','=','6')    
           ->find_all();
          

           
        /* $query = 'SELECT   c.firstname, i.title, r.result  FROM classmates c JOIN results r ON  c.id = r.id_student
             JOIN items i ON i.id_item = r.id_predmet
WHERE i.semestr=6;';
         $rez = DB::query(Database::SELECT, $query)->execute();
     */      
               // $rez= array();
                  
                
                
              /* РЕШЕНИЕ ЕСЛИ ЧЕ  
                $id=10;
                   $cm =ORM::factory('classmate',$id);
                   $item =ORM::factory('item');
                   $rs =ORM::factory('result', array('id_student' => $cm));$lol= $cm->firstname;               
                  foreach ($cm->items->find_all() as $i=>$v){
                      foreach ($rs->where("id_predmet","=",$v->id)->find_all() as $it)
                  $rez[$lol][$v->title] = $it->result;
                  }
                   
                   
                  
                    
                    
                
           /*    
                
                */
                   // $rez=$cm->results->find_all();
                    
                    // $ab = ORM::factory('result', array('id_student' => $cm)); 

            return $rez;
            
        }
        
        public function getQuest($ans_id)
        {
              $res= DB::select('questions.question')
                    ->from('questions')
                    ->join('answers')->on('questions.id', '=', 'answers.question_id')                 
                    ->where('answers.id','=',$ans_id) 
                      ->limit(1)
                    ->execute()
                    ->as_array();  
          
            return $res[0]['question'];
        }


        
        public function loadQuestion($id)
        {
            $result = ORM::factory('question',$id);
            
            return $result->question;
        }
        
        public function getOneAns($id)
        {
             $result = ORM::factory('answer',$id)->as_array();            
            return $result;
        }
        public function loadAns($id)
        {
            $result = ORM::factory('answer')->Where('question_id','=',$id)->find_all();
            
            return $result;
        }
    
    
    
    
}