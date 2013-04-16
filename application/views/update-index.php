      <center>  <div style="width:1000px;"> <h1><?=$name_modul?></h1>
      
     
     <div  style="position: relative;width:70%"> 

         
         
          <br><div class="wall" style="display: block;text-align: left;">
          
<?
//print_r($update);die;
error_reporting(7);
for ($i=1;$i<=$count;$i++){
 //   print '<div><div ><img width="70" src="'.$wall[$i]['avatar_url'].'"></div><p style="float:left;">'.$wall[$i]['msg'].'</p></div><hr>';
    echo '<table><tr><td style="padding:10px;background-color:white;">'.$update[$i]['action'].'</td></tr></table><br>';

}


?>
        </div></div>
      </center>
 