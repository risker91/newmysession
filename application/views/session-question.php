<p style="text-align:center;font-size:20px;"><?=$quest;?></p>

<br>
<center>Answers</center>
<center><div  class="row">

<?
  foreach ($ans as $i=>$mas)   {
      $i++;
     // <a href="/group'.$group_id.'/session/answer/'.$mas->id.'">Answer </a>
   
      print '<div class="span4" style="display:block;height:200px"><div class="well" >
    <h4><a href="/session/answer/'.$mas->id.'">Answer '.$i.'</a></h4>
    <p>'.$mas->desc.'...<a href="/session/answer/'.$mas->id.'">=></a></p>
</div></div>';
      
   /*   print '
<div style="margin:10px;padding:5px;float:left;width:250px;Height:150px;background-color:#f5deb3">          
<p><h4><a href="/group'.$group_id.'/session/answer/'.$mas->id.'">Answer №'.$i.'</a></h4></p>
<p >'.$mas->desc.'... <a href="/group'.$group_id.'/session/answer/'.$mas->id.'">=></a></p></div>';
     
    * 
    */ 
  }
?></center>
</div>