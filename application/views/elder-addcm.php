<?if (!$step){?>
<center><form method="GET">Введите количество одногрупников не считая себя
        <p><input type="text" maxlength="2" name="count"></p>
<input type="submit" name="sendcount">
</center>
   </form>
    
    
    
    
    
    
    
    
    
    
    
    
   <?} else {?>
<form method="POST" action="">
<center><table>
    <tr><td>№</td>
        <td>Имя</td>
        <td>Фамилия</td>
        </tr>
       <?$count=$_GET['count'];
       for ($i=1;$i<=$count;$i++){
           print '<tr><td>'.$i.') </td>';
           print '<td><input type="text" name="cmname'.$i.'"></td>';
           print '<td><input type="text" name="cmfirstname'.$i.'"></td></tr>';           
       }
       ?>
    </table>
    <input type="submit" value="Зарегистрировать" name="regclass">
</form></center>












   <? } ?>
