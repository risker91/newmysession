<ul class="semestr">
    <? for ($i=1;$i<=6;$i++){
print '<li><a href="/session/statement/'.$i.'">Семестр '.$i.'</a></li>';
    }?>
    </ul>

<br>
<table style="position:relative" width="1000"  border="4">
 <? 
  
    //error_reporting(7);
    for ($i=1;$i<=$row;$i++)
    {
       echo '<tr>'; 
        
            for ($j=1;$j<=$column;$j++)
           {
                print '<td>'.$tab[$i][$j].'</td>';               
           }
       echo '</tr>';        
    }
    ?> </table>