<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Elder extends All
{
    
    
    
    
     public function before()
      {
            
         $id_group=$this->request->param('group'); 
           
           
		 parent::before();
         if($this->auto_render)
         {
             $mygroup = Session::instance()->get('mygroup');
          if($mygroup!=$id_group){
               //Request::initial()->redirect('error/');
               
               }; 
              
          }   
         }
         
      
    
    
        
    public function action_AddOurNews()
	{
            if (isset($_POST['addnews']))
              {                    
                $news = new Model_News();                
                $content = Arr::get($_POST, 'news', '');                
                $news->addNews($this->id_group, $content, $this->time);
              }
        
        
         $this->template->modul = View::factory('elder-addnews');
    }
    
    
    public function action_index()
	{
        
        $data['group']=$this->request->param('group'); 
        
        
         $this->template->modul = View::factory('elder-panel',$data);
    }
    
    
      public function action_AddQuestions()
	{ 
         
          $addquest  =   new Model_Item();         
          
          $data['group_id']  = $this->request->param('group'); 
          $data['step']      = FALSE;
         
                
          if (isset($_GET['sendcount']) AND ($_GET['count']!=0))
           {
               $data['step']=true;
           }
           
           if (isset($_POST['add']))
           {
               $item_id = Arr::get($_GET, 'item_id', '');
               $val = Validation::factory($_POST);
              
                            for ($i=1;$i<=$_GET['count'];$i++)

                            {   
                                     $question = Arr::get($_POST, 'quest'.$i, '');  
                                     $val->rule('quest'.$i, 'min_length', array(':value', 6));               

                                     if($val->check())
                                         {
                                           $addquest->AddQuestions($item_id, $question);                
                                         }                
                            }
               $this->redirect('/elder/');               
            }
        
        
         $this->template->modul = View::factory('elder-addquestions',$data);
    }
    
     public function action_GenerateInvite()
	{
         $data= null;
         $inv = new Model_Invite();
         $group_id=Session::instance()->get('mygroup');
         $data['invites']= $inv->getInvites($group_id);      
         
         $this->template->modul = View::factory('elder-invite',$data);         
          
         if (isset($_POST['acc']))
               {
              // $firstname=Arr::get($_POST, 'acc', '');
               $user = new Model_MyUser();  
               $cm = new Model_Classmate();
               
               $id=Arr::get($_POST, 'acc', '');  
               
               
               $inv = ORM::factory('invite', $id);               
               $firstname = $inv->firstname;
               $name = $inv->name;
               $email = $inv->email;
               $group_id = $inv->group_id;
               
               $login = $user->logins(6);
               $pass  = $user->logins(8);
               $sex   = $cm->sex($name, $firstname);
               
               
                    $to=  $email;              
                    $from = 'isit_project@mail.ru';   
                    $subject= 'Админ одобрил';               
                    $message = 'Ваш логин:'.$login.'  и пароль:'.$pass;
                    Email::send($to, $from, $subject, $message, TRUE);
                   
                    $cm->AddClassmate($name, $firstname, $group_id,$login, $pass, $email, $sex); 
                    $inv->accept=1;
                    $inv->save();
                    $this->redirect('elder/generateinvite');
                 }
          
          
          
          if (isset($_POST['generate']))
              {
                $count=Arr::get($_POST, 'invite', '');
          
                for ($i = 0; $i < $count; $i++)
                {
                    
                    $invite = new Model_Invite();
                    $invite->code=$invite->genInvite(12);
                    $invite->group_id= Session::instance()->get('mygroup'); 
                    $invite->status= 0;
                    $invite->firstname= '-';
                    $invite->accept= 0;
                    $invite->save();
                }
          }
          
          
          
          
        }

    
    
    
    
    
      public function action_AddItem()
                {
                 $admin = new Model_Item();
                  $group=$this->id_group; 

                  if (isset($_POST['newitem']))
               {           
                 $title = Arr::get($_POST, 'title', '');
                 $semestr = Arr::get($_POST, 'semestr', '');          
                 $form = Arr::get($_POST, 'form', ''); 
                 $prep = Arr::get($_POST, 'prep', '');
                 $admin->add_item($title, $semestr, $prep, $group,$form);
                 
                 $action ='Добавлен предмет '.$title.' в '.$semestr.' семестр';                
                 $this->goLog($action, $this->time, $this->id_group);
               }

                 $this->template->modul = View::factory('elder-additem');        

            }
    
    
    
    
    
    
    
    
    public function action_AddResults()
	{
        $group=$this->id_group;
        $semestr = 0;
        $stud_id = 0;
        $data = array();
        
         $student = new Model_Classmate();
         $session= new Model_Msession();     
         $item= new Model_Item();   
         
         
         $data['next']=False;
         $data['student']=$student->ShowClassmates($group);
             
              
              
                   if (isset($_POST['add']))
       {     
                    
            $stud_id = Arr::get($_POST, 'student', '');
            $semestr = Arr::get($_POST, 'semestr', '');      
            $data['next']=True;
            $data['student']=$student->ShowOnlyCm($stud_id);           
            $data['items']= $item->show_items($semestr,$group);
            $data['semestr']=$semestr;
            $data['stud_id']=$stud_id;
            
           } 
      
            
       
       
       
                             if (isset($_POST['aa']))
       {                                                
                   
                                 
                    $semestr = Arr::get($_POST, 'semestr', '');   
                    $stud_id = Arr::get($_POST, 'id', '');   
                                 
                    foreach ($item->show_items($semestr,$group) as $i=>$v)   
                {
                    $i++;                         
                    $id_item = Arr::get($_POST, 'pred'.$i, '');   
                    $res = Arr::get($_POST, 'res'.$i, '');   
                    $session->add_result($stud_id, $id_item, $res);
                }
            
       }
       
       
       
       
   
       
        $this->template->modul = View::factory('elder-add-result',$data);
        }
        
        
        
         
    
}
