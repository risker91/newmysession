<center><form method="POST">сколько инвайтов?
        <p><input type="text" maxlength="2" name="invite"></p>
<input type="submit" value="Generate" name="generate">
</center>
   </form><br>
    <center><h2>Высланные инвайты</h2><br>
        <table width="50%">
           
           <center><tr><td>Code</td><td>Status</td><td>FirstName</td><td>Name</td><td>Accept</td></tr></center>
          
            <?
          // print_r($invites);
            
             
            foreach ($invites as $val) {
             // print $val;
               
              
           //  print_r($val->user);
               // print $val->username.'<=<br>';
                
               
                if($val['status']==0) $st='Waiting'; else $st='Activated';
               if($val['accept']==0) $ac=' <button type="submit" name="acc" value="'.$val['id'].'">accept</button>'; else $ac='Success';
             
                
    echo ' <form method="POST"><tr><td>'.$val['code'].'</td><td>'.$st.'</td><td>'.$val['firstname'].'</td><td>'.$val['name'].'</td><td>'.$ac.'</td></tr></form>';
                
            }
            
            ?>
            
            
          <!--  <tr><td>asd25435gfg45</td><td>Waiting</td><td>-</td><td> <button value="accept">accept</button></td></tr>
            <tr><td>fsdf3445gfg45</td><td>Activated</td><td>Sabirov</td><td>Success</td></tr>
            !-->
           
            </table>
          