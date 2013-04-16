<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends All
{
    
    public function action_index()
	{
        
        $data['group']=$this->request->param('group'); 
        
        
         $this->template->modul = View::factory('vadminpanel',$data);
    }
    
    
    
    
       public function action_ClassmatesAdd()
	{
           $buf=null;
           $func = new Model_Functions();
           $cm = new Model_Classmate();
           $user = new Model_MyUser();
           $id_group=  Session::instance()->get('mygroup'); 
           $data['step']=false;
           
           if (isset($_GET['sendcount']) AND ($_GET['count']!=0))
           {
               $data['step']=true;
           }
             
           if (isset($_POST['regclass']))
           {
               
               
               
                               
              
             
               
               for ($i=1;$i<=$_GET['count'];$i++){
                   $name= Arr::get($_POST, 'cmname'.$i, '');
                   $firstname=Arr::get($_POST, 'cmfirstname'.$i, '');
                   $login=$user->logins(6).'@lol.ru';
                   $pass=$user->logins(8);
                   $cm->AddClassmate($name, $firstname, $id_group,$login, $pass);     
                 
                   
                   $buf.= '<tr><td>'.$firstname.'</td><td>'.$name.'</td><td>'.$login.'</td><td>'.$pass.'</td><tr>';
                   
                   
                   
                  /* $info[] = array('name'=>$name, 
                                 'firstname'=>$firstname,
                                 'login'=>$login,
                                 'pass'=>$pass);
                   * 
                   */
                  
                   
         
                   
               }
               
               
              
                $table_up='<table><tr><td>Фамилия</td><td>Имя</td><td>Логин</td><td>Пароль</td><tr>';
                   
               
                         
               $user_info = Auth::instance()->get_user();
              
            
               $to=  $user_info->email;              
                $from = 'admin@groupstat.16mb.com';   
               $subject= 'test';               
               $message = $table_up.$buf.'</table>';
               // $name='Руслан';
               $func->SendEmail($to, $from, $subject, $message, TRUE);
              // Email::send($to, $from, $subject, $message, $html);
               
         
               Request::initial()->redirect('/group/');
               
                 
            
          

    
                
               
               
               
           }
            
            
           
           
           
           
           
           
           $this->template->modul = View::factory('adminclassmatesadd',$data);
           
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
      public function action_viewcm()
	{
         
          $view_cm = new Model_Classmate();
            $group=$this->request->param('group'); 
          
          $data['mate'] = $view_cm->view_classmates( $group);
          
          $this->template->modul = View::factory('vlistcm',$data);
    }
    
    
    
    
    
    
    
    
      public function action_AddItem()
	{
         $admin = new Model_Item();
          $group=$this->request->param('group'); 
         
          if (isset($_POST['newitem']))
       {           
         $title = Arr::get($_POST, 'title', '');
         $semestr = Arr::get($_POST, 'semestr', '');          
         $form = Arr::get($_POST, 'form', ''); 
         $prep = Arr::get($_POST, 'prep', '');
         $admin->add_item($title, $semestr, $prep, $group,$form);
       }
         
         $this->template->modul = View::factory('vadditem');        
          
    }
    
    
    
    
    
    
    
    
    public function action_AddResults()
	{
        $group=$this->request->param('group'); 
        $semestr = 0;
        $stud_id = 0;
        $data = array();
        
         $student = new Model_Classmate();
         $session= new Model_Msession();     
         $item= new Model_Item();   
         
         
         $data['next']=False;
         $data['student']=$student->view_classmates($group);
             
              
              
                   if (isset($_POST['add']))
       {     
                    
            $stud_id = Arr::get($_POST, 'student', '');
            $semestr = Arr::get($_POST, 'semestr', '');      
            $data['next']=True;
            $data['student']=$student->view_only_cm($stud_id);           
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
       
       
       
       
   
       
        $this->template->modul = View::factory('vaddresults',$data);
        }
        
        
        
         
    
}
