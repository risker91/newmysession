<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

        private function char($str, $pos) 
        {
            return mb_substr($str,$pos-1,1,'UTF-8');
        }   
    
        private function check_word($word,$len, $mas)
        {
            $cmp=0;
            $count=1;
            
                    for ($i = 1; $i <= $len; $i++)
                    {                
                                for ($j = 1; $j <= (strlen($mas)/2)+1 ; $j++) 
                                {

                                    $char=$this->char($word, $i);
                                    $char_ptr=$this->char($mas, $j);
                                 //   print $char.'='.$char_ptr.' cmp='.$cmp.'<br>';
                                if($char==$char_ptr) {$cmp++;
                                                    // $mas=  str_replace($char_ptr, '', $mas, 1) ;
                                                     $mas=preg_replace('@'.$char_ptr.'@', '', $mas, 1);
                                                      break;}
                               }
                   }
                   
           if($cmp==$len) return TRUE; else return FALSE;
        }


        
	public function action_index()
	{
        
            print '<form method="POST"><input type="text" name="mas" ><input type="text" name="count" ><input type="submit" name="find" value="GO"></form>';
       
           //if($this->check_word('алдеи',5)) print 'алдеи<br>';
            
       if(isset($_POST['find'])) 
       {
                    $letter = Arr::get($_POST, 'mas', '');
                    $len=  Arr::get($_POST, 'count', '');                  
                    print $letter.'('.$len.')<br>';
                   // if( $len<0) return;
                    
                    $words = ORM::factory('word')->where("length", "=",$len)->find_all();
                    
                    foreach ($words as $t=>$val) 
                     {         
                    if($this->check_word($val->word,$len,$letter))  print $val->word.'<br>';   
                   // print '<br>';
                     }
                     
       }
  
        }
        
}