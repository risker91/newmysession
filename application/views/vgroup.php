




   
<?
  $tr='';
      
$text=null;
foreach ($group as $k=>$v)   {
    $asd=$k+1;
      
 
    
   $text.= '<div style="float:left;margin-left:15px" class="classmate"><p><a href="/classmate'.$v['id'].'">
       <img width="100" src="'.$v['avatar_url'].'"></p><p><font size="3">'.$v['firstname'].' '.$v['name'].'</font><a></p></div>';
   
}
?>
  <center> 

    <? print $text?>    

      
 </center>  