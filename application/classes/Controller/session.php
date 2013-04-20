<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Session extends All {

  
	public function action_index()
	{
            $sess = new Model_Session();
           // var_dump($sess->loadSess($this->curr_uid));
            $data['list']=$sess->loadSess($this->curr_uid);
            $data['uid'] =$this->curr_uid;
            $this->template->modul = View::factory('session-list',$data);
                     
        }
        
        
        public function action_create()
	{
            $session = new Model_Session();            
            if(isset($_POST['create']))
            {                
                $title = Arr::get($_POST, 'session', '');     //Добавить валидацию!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!             
                $session->createSess($this->uid,$title); 
                $this->redirect('/id'.$this->curr_uid.'/session/');
            }
           // $session->createSess($this->uid);  
            
            $this->template->modul = View::factory('session-create');
            
        }
        
        
        public function action_learning()
	{
                     $data['group_id']   =$this->request->param('group');
                   //  print $this->request->param('group');die;
                     $data['student_id'] =  Session::instance()->get('classid');
                     
                     $this->template->modul = View::factory('session-choose-semestr',$data);
        }
        
        
          public function action_answer()
	{
            
                $sess=new Model_Msession();
                     
                $ans_id =$this->request->param('id');
          //      $data['quest']= $sess->loadQuestion($ans_id);
                $data['ans']= $sess->getOneAns($ans_id);
                $data['quest']= $sess->getQuest($ans_id);
                $this->template->modul = View::factory('session-answer',$data);
        }
        
        
        public function action_question()
	{
            
                $sess=new Model_Msession();
                     
                $quest_id =$this->request->param('id');
                $data['quest']= $sess->loadQuestion($quest_id);
                $data['ans']= $sess->loadAns($quest_id);
                $data['group_id'] = $this->id_group;
                     
                $this->template->modul = View::factory('session-question',$data);
        }
        
        
        public function action_showall()
	{
                $data = array();


                if (isset($_POST['show']))
           {     
                $session= new Model_Msession();           
                $semestr = Arr::get($_POST, 'semestr', '');      
                $data['item']=$session->show_items($semestr);

           }
                 $this->template->modul = View::factory('vrasp',$data);
        }
        
        
        public function action_statement()
	{
            $session= new Model_Msession(); 
            $student= new Model_Classmate();  
            $itemm= new Model_Item();             
            $table=array();
            
            $sem=$this->request->param('id'); 
            $group_id=  $this->id_group;
                    
            $results=$session->load_semestr($sem,$group_id);
            $items=$itemm->show_items($sem,$group_id);
            $people=$student->ShowClassmates($group_id);    
         
                foreach ($people as $i=>$mas)   
            {
                  $i++;
                  $table[$i+1][1]=$mas['firstname'];
                  $count_cm=$i;
            }
             
              foreach ($items as $i=>$mas)   
            {
                  $i++;
                  $table[1][$i+1]=$mas->title;
                  $count_item=$i;
            }
             error_reporting(7);
     
             foreach ($results as $mas)
                 {
                $stud[$mas['firstname']][$mas['title']]=$mas['result'];                
                 }
            
            for ($i=2;$i<=$count_cm+1;$i++)
            {
                for($j=2;$j<=$count_item+1;$j++)
                {
                    $table[$i][$j] = $stud[$table[$i][1]][$table[1][$j]];
                }                
            }
             
             $data['lool']=$stud;         
             $data['tab']=$table;
             $data['row']=$count_cm+1;
             $data['column']=$count_item+1;
             $data['id_group']=$group_id;        
            
            $this->template->modul = View::factory('vsession',$data);
        }
        
        
        
        
        
        
       
        
	

}