<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Files extends All {
    
    

                public function action_index()
                {
                    
                     $this->template->modul = View::factory('files');
                    
                }
                
                      public function action_download()
                {
                          

//$fname=$_GET['fname']; 
//$type=$_GET['type']; 
 $id_f=$this->request->param('id'); 
 
 $res = ORM::factory('file',$id_f);
 
$desc=$res->descr; 
$fname=$res->name;
$type=$res->type;
$path = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$type.'/'.$fname;

if (file_exists($path)) {
$fsize=filesize($path); 
  
Header("HTTP/1.1 200 OK"); 
Header("Connection: close"); 
Header("Content-Type: application/octet-stream"); 
Header("Accept-Ranges: bytes"); 
Header("Content-Disposition: Attachment; filename=".$desc); 
Header("Content-Length: ".$fsize); 
  
// Открыть файл для чтения и отдавать его частями 
$f=fopen($path,'r'); 
while (!feof($f)) { 
  // Если соединение оборвано, то остановить скрипт 
  if (connection_aborted()) { 
    fclose($f); 
    break; 
  } 
  echo fread($f,10000); 
  // Пазуа в 1 секунду. Скорость отдачи 10000 байт/сек 
  sleep(1); 
} 
fclose($f); 

}
else
{  $this->redirect($_SERVER['HTTP_REFERER']);}

     
       }
                
                
                      public function action_upload()
                {
                    
                  
                         
                          
                        if(isset($_POST['upload'])){
                            
                            $file = new Model_File();
                            
                         $author=  Session::instance()->get('classid'); 
                         $type= Arr::get($_POST, 'type', '');              
                         $desc=$_FILES['filename']['name']; 
                         $item= Arr::get($_POST, 'item', '');
                         $file_size = $_FILES['filename']['size'];
                         
                         
                         $types= array();
                         $size_= array();
                          Upload::$default_directory = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$type.'/';   
             switch ($type) 
                  {                 
                    case 'job':       $types=array('doc', 'docx', 'pdf', 'jpg', 'png', '7z', 'zip', 'rar', 'txt' ); $size_='5M'; break;
                    case 'lesson':    $types=array('doc', 'docx', 'pdf', 'jpg', 'png', '7z', 'zip', 'rar', 'txt' ); $size_='5M'; break;
                    case 'other':     $types=array('doc', 'docx', 'pdf', 'jpg', 'png', '7z', 'zip', 'rar', 'txt' ); $size_='5M'; break;
                    case 'performed': $types=array('doc', 'docx', 'pdf', 'jpg', 'png', '7z', 'zip', 'rar', 'txt', 'exe' ); $size_='5M'; break;                     
                  }
                          $validation = Validation::factory($_FILES)
                    ->rule('filename', 'Upload::valid')
                    ->rule('filename', 'Upload::type', array(':value', $types))                     
                    ->rule('filename', 'Upload::size', array(':value', $size_));
            
                          if(!$validation->check())
                    throw new ORM_Validation_Exception('user', $validation);
                          
                          
             
                         
             $file_exp = $this->getExp($_FILES['filename']['name']);
             $file_name = $file->genName();
             $fullname = $file_name.'.'.$file_exp;
              
             
             
              Upload::save($_FILES['filename'],$fullname);
              $file->addFile($author, $type, $item, $desc, $file_size, $fullname);
              
              $this->redirect($_SERVER['HTTP_REFERER']);
                          
                          
                          
                
                 
                    
                }
                $this->template->modul = View::factory('files-upload');
                }
              
    
    
    
    
    
}