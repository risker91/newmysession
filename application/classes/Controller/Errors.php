<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Errors extends Controller_Template {

  public $template = 'errors';
	public function action_index()
	{
  $id_error=$this->request->param('error'); 
            
  
  switch ($id_error)
  {
  
            case 1: 
               
                $data['logined']= Auth::instance()->logged_in();                    
                $data['urlgroup']= '/group'.Session::instance()->get('mygroup');
                $this->template->error=View::factory('block',$data);
                break;
            
            case 777: 
               
                //$data['logined']= Auth::instance()->logged_in();                    
                //$data['urlgroup']= '/group'.Session::instance()->get('mygroup');
                $data['text'] = 'Вы не зарегистрированы в системе к сожалению вы не сможете использовать данный ресурс <a href="/auth/">Войти</a>';
                $this->template->error=View::factory('error-all',$data);
                break;
            
            
            case 2: 
               
                    $data['text'] = 'вы заполнили не все поля вернитесь и е <a href="'.$_SERVER['HTTP_REFERER'].'">допишите</a>';
                $this->template->error=View::factory('error-all',$data);
                break;
            
            default: $this->template->error=View::factory('404');
                break;
  } 
            
        }
}
        