<?php




print '<html>
<head>
  <title>Загрузка файлов на сервер</title>
</head>
<body>
      <h2><p><b> Форма для загрузки файлов </b></p></h2>
      <form  method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" name="ok" value="Загрузить"><br>
      </form>
</body>
</html>';





if(isset($_POST['ok']))
{
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{

file_open($_FILES["filename"]["tmp_name"]);
}
}


function file_open($path)
{
$fp = fopen($path, 'rt');

if ($fp) 
{
while (!feof($fp))
{
$mytext = fgets($fp, 999);
$word=trim($mytext);


print $word.'<br>';

}
}
else echo "Ошибка при открытии файла";
fclose($fp);

}










?>