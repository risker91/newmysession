<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><? print $title ?></title>
 
    <meta name="author" content="" />
    <meta name="keywords" content=""/>
 	<meta name="description" content=""/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />   
    <link rel="stylesheet" href="/dop/css/style.css" type="text/css" /> 
		
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
		<script type="text/javascript" src="/dop/js/general.js"></script>
                <script type="text/javascript" src="/dop/js/menu.js"></script>
		<script  type="text/javascript"  src="/dop/js/slide.js"></script>
                
                 <script src="http://malsup.github.com/jquery.form.js"></script> 




	</head>
	<body>    
           <div class="menu-float"><?=$menu?></div>    
	<div align="center" id="page">
          
	<div class="head">
	<div class="logo"><div id="example">
            	<p><img src="/dop/images/logo1.gif"></p>
            	<p><img src="/dop/images/logo2.gif"></p>
            	<p><img src="/dop/images/logo3.gif"></p>
              
        </div></div>
	<div class="menu">
	
	
	
	
	
<?=$topmenu?>
		
	</div>
		</div>
	

	<div align="center" class="midle">
<div id="news">
<img src="/dop/images/stick1.png" style="float:inherit;">
<?  if (isset($news['news'])) {print '<p>'.$news['news']?></p> 
<p style="text-align:right;"><u><?=$news['author']?></u> <br><?=$news['date']; ?></p><?} else print 'Новостей нет'?>




</div>
<div id="know"><img src="/dop/images/stick2.png" style="float:inherit;">
<p><? if(isset($know['know'])){print $know['know'];} else print 'Пусто'?></p>

 </div>
</div>	
<hr>

<div align="left" class="modul">

<?=$modul?>

</div>
	  
	
	</div>

       
            
     

	</body>

