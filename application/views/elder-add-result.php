
        
        
        <?
        if ($next!=True)
        {?>
<form method="POST">
    <select name="student">
<?
            
        foreach ($student as $i=>$mas)   {
          
            
          echo '<option value="'.$mas['id'].'">'.$mas['name'].' '.$mas['firstname'].'</option>';  
        }  
        
        ?>
 
</select>
    
         <select name="semestr">
         
         <option value="1">семестр 1</option>
         <option value="2">семестр 2</option>
         <option value="3">семестр 3</option>
         <option value="4">семестр 4</option>
         <option value="5">семестр 5</option>
         <option value="6">семестр 6</option>
         <option value="7">семестр 7</option>
         <option value="8">семестр 8</option>
         <option value="9">семестр 9</option>
         <option value="10">семестр 10</option>
         
         </select>
         
    <input type="submit" name="add">
    
    </form>

<?} else {
    print'<form method="POST">';
    print'<input id="num1"  type="text" value="'.$stud_id.'" name="id">';
    print'<input id="num1"  type="text" value="'.$semestr.'" name="semestr">';
    foreach ($items as $i=>$mas)
    {
        $i++;
            print'<input id="num1" type="text" value="'.$mas->id.'" name="pred'.$i.'">';
            print'<input  type="text" value="'.$mas->title.'" name="title">';
            
           
            print '<select name="res'.$i.'">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="зачет">зачет</option>
                </select><br>';
        
        
    } ?>
<input type="submit" name="aa" value="Оценить семестр">

</form>



<?}?>

</center>