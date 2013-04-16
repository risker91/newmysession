<?if (!$step){?>
<head><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

	
<script>
    
   


$(document).ready(function(){
     
               var sem='';               
        
        
        $('.target').change(function() {
           
         sem = $(this).val();       
       
                
             $.ajax({
                type : "POST",
                data : ({semestr:sem}),
                
                url : "/ajax/getitems",
                dataType : "json",
                success: function(data)
                {
          
             
            
              $("#spec").empty();
              
              //$("#spec").append( $(data[0]));
              var len = data.length;
              for (var i=0;i<len;i++)
                  {
              //alert(data[0].item);
              $("#spec").append('<option value="'+data[i].id+'">'+ data[i].item+'</option>');
          }
                $("#spec").show();
                }
         });       
         }); 
});
    
    </script></head>
    
    
<select id="<?=$group_id?>" class="target" name="semestr">
    <option value="1">Семестр 1</option>
    <option value="2">Семестр 2</option>
    <option value="3">Семестр 3</option>
    <option value="4">Семестр 4</option>
    <option value="5">Семестр 5</option>
    <option value="6">Семестр 6</option>
    <option value="7">Семестр 7</option>
    <option value="8">Семестр 8</option>
    <option value="9">Семестр 9</option>
    <option value="10">Семестр 10</option>
  </select>
<center><form method="GET">
        
        выберите предмет: <select style="display:none"  class="done" id="spec" name="item_id" tabindex="2">

		
		</select>
        <br>Введите количество вопросов про придмету
        <p><input type="text" maxlength="2" name="count"></p>
<input type="submit" name="sendcount">
</center>
   </form>
    
    
    
    
    
    
    
    
    
    
    
    
   <?} else {?>
<form method="POST" action="">
<center><table>
    <tr><td>№</td>
        <td>вопросы</td>
       
        </tr>
       <?$count=$_GET['count'];
       for ($i=1;$i<=$count;$i++){
           print '<tr><td>'.$i.') </td>';
           print '<td><textarea cols="35" rows="5" name="quest'.$i.'"></textarea></td></tr>';           
       }
       ?>
    </table>
    <input type="submit" value="Добавить вопросы" name="add">
</form></center>












   <? } ?>
