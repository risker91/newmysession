<div class="span12"><a href="/id<?=$curr_uid?>/session/setting/<?=$sid?>">Меню</a>->Добавление вопроса    </div>

<form  method="post" enctype="multipart/form-data">
<center> <select class="item"  name="item">
        <option disabled selected="select">Выберите Предмет</option>  
    <? foreach ($items as $item) {
print '<option value="'.$item->id.'">'.$item->title.'</option>';
 }?>
</select>
    
    
<h2><p><b> Форма для загрузки файлов </b></p></h2>
      
      <input type="file" name="filename"><br> 
      <input type="submit" name="ok" value="Загрузить"><br>
      </form>
<? if(isset($quest)) print '<h1>Найдно вопросов: '.$quest.'</h1>';?>
</center>