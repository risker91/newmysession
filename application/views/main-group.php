<!doctype html>
<html>
  
  <head>
    <title><? print $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <link rel="stylesheet" href="/assets/css/divshot-util.css">
    <link rel="stylesheet" href="/dop/css/simple.css">
    <link rel="stylesheet" href="/dop/css/bootstrap.css">
  
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>

                <script type="text/javascript" src="/dop/js/menu.js"></script>
	
	 <link rel="stylesheet" href="/dop/css/style.css" type="text/css" /> 
	 
	 

  </head>
  
  <body>
  
   
	  
	  
<?=$topmenu?>


    <div class="container">
     
      <div class="row main-features">
        <div class="span6">
          <div class="well">
            <h1>Our news</h1>
           <?  error_reporting(7)?>
            <?=$news["news"];?>
          </div>
        </div>
        <div class="span6">
          <div class="well">
            <h1>Need to know</h1>
         <?=$news["news"]?>
          </div>
        </div>
      </div>


        
      <div class="row">
        <div class="span3"></div>
        <div class="span6">
     
	 
	 
        </div>
        <div class="span3"></div>
      </div>
      <div>
        <p><?=$modul?></p>
      </div>
      <div class="container"></div>
    </div>
    
  </body>

</html>