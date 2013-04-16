<form method="POST">
    <select name="semestr">
  <option value="1">семестр 1</option>
  <option value="2">семестр 2</option>
  <option value="3">семестр 3</option>
  <option value="4">семестр 4</option>
  <option value="5">семестр 5</option>
  <option value="6">семестр 6</option>
  <option value="7">семестр 7</option>
</select>
     <input type="submit" value="Показать" name="show">
    
   <br>
<center> <?  
          if (isset($item)){  
              
              foreach ($item as $k=>$v)   {
               print $v->title.'<br>';
              }
              
              
              
              }
    ?>
    </center> 
    </form>