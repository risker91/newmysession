<?php defined('SYSPATH') or die('No direct script access.');

class Model_Item extends Kohana_ORM
{
    
    
    
                    protected $_belongs_to = array(
                'groups'    => array(
                'model'         => 'group',
                'foreign_key' => 'id',
                )
                );
    

        protected $_has_many = array
        (
        'classmates' => array
        (
        'model' => 'classmate',
        'foreign_key' => 'id',
        'through' => 'results',
        'far_key' => 'id'),
            
            
             'results'    => array(
                   'model'         => 'result',
                   'foreign_key' => 'id_predmet',
               )
            
            
         
                );
        
        
        
        public function count_item_all($id_group){
            $rez = ORM::factory('item')->where("group_id","=",$id_group)->count_all();
            return $rez;          
         }
         
            public function count_item_ekz($id_group){
            $rez = ORM::factory('item')->where("group_id","=",$id_group)->where("form","=",'экзамен')->count_all();
            return $rez;          
         }
         
              public function count_item_ekz_semestr($id_group,$semestr){
            $rez = ORM::factory('item')->where("group_id","=",$id_group)
                                       ->where("form","=",'экзамен')
                                       ->where("semestr","=",$semestr)
                                       ->count_all();
            return $rez;          
         }
        
        
          function  show_items($semestr,$group_id)
    {
          $items = ORM::factory('item')
                 
                  ->where("group_id","=",$group_id)
                   ->where("semestr","=",$semestr)
                  ->find_all();
          return $items;
        
    }
    
    
    
              function  getItemsCourse($group_id, $course)
    {
          
                  if ($course==1) {$one=1;$two=2;} 
                  if ($course==2) {$one=3;$two=4;} 
                  if ($course==3) {$one=5;$two=6;} 
                  if ($course==4) {$one=7;$two=8;} 
                  if ($course==5) {$one=9;$two=10;} 
                  if ($course==6) {$one=11;$two=12;} 
                  
                  $list='12';
                 // print $one;die;
         $items = ORM::factory('item')  
                                        ->where("group_id","=",$group_id)
                                        ->where('semestr','=',$one) 
                                        ->or_where('semestr','=',$two) 
                                        ->find_all()
                                        ->as_array();
         
         
                             //   var_dump($items);die;
       
          
          
        /*    DB::select('title,id')   
                   ->where("group_id","=",$group_id)
                    ->where('semestr','=',$one)  
                   ->where('semestr','=',$one)  
                    ->execute()
                    ->as_array();    * 
         */
           
          return $items;
        
    }
    
    
        public function add_item ($title,$semestr,$prep,$group, $form)
   {        
         $item = new Model_Item();     
        
         
         $item->group_id = $group;  
         $item->title = $title;   
         $item->form = $form;  
         $item->prepod = $prep;  
         $item->semestr = $semestr;           
         
         $item->save();              
    }
    
    
         public function AddQuestions ($item_id, $question)
     {  
             $quest = new Model_Question();
             
             $quest->item_id = $item_id;
             $quest->question = $question;
             $quest->save(); 

     }
     
     
     
      function  show_questions($item_id)
    {
          $item = ORM::factory('question')->where("item_id","=",$item_id)->find_all();
          return $item;        
    }
    
    
      function  show_answers($quest_id)
    {
          $ans = ORM::factory('answer')->where("question_id","=",$quest_id)->find_all();
          return $ans;        
    }
    
     function  AddAnswer($quest_id, $answerOMG , $author_id)
        
        {
         $answer =  new Model_Answer();
         
         $answer->question_id = $quest_id;
         $answer->desc = substr($answerOMG,0,200);
         $answer->answer = $answerOMG;
         $answer->author_id = $author_id;
         $answer->save();                 
        }
        
        
        
    function idquest($id){
        $q = ORM::factory('question',$id);
        
          return $q->question;; 
        
    }
        
        
         
     
   

}
