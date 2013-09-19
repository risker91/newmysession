<div  class="span10"  style="margin-left: 5px;">    
    <button onclick="location.href='/id<?=$curr_uid?>/session/vision/<?=$curr_sess?>'"  style="width:100%;height:40px;margin-left: 5px;background-color: #fde910;border: 0px;" 
            style=""  class="btn btn-large btn-block " type="button">Назад</button>
</div>
<div  class="span10"  style="margin-left: 5px;">


<table style="width:45%"  class="table table-condensed">
     
  
<?
foreach ($followers as $i => $follower) {
     print'   <a href="/id'.$follower['id'].'"><div style="position:relative;display:inline-block;padding:10px;"><div><img src="'.$follower['avatar_big'].'"></div><div style="text-align:center;">'.$follower['last_name'].' '.$follower['first_name'].'</div></div></a>';
    
    
}


?>
</table>
         </div>