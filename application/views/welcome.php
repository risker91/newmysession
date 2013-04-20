<!doctype html>
<html>
  
  <head>
    <title>index</title>
    
    
    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
   <link rel="stylesheet" href="/assets/css/divshot-util.css">
    <link rel="stylesheet" href="/dop/css/simple.css">
    <link rel="stylesheet" href="/dop/css/style.css">
    <link rel="stylesheet" href="/dop/css/bootstrap.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>


    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <style>
	input.ui-autocomplete-input {
		height: 25px !important;
		font-size: 12px !important;
	}
</style>

  </head>
  
  <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">My Session</a>
          <div class="navbar-content">
            <ul class="nav">
              <li >
                <a href="/welcome">Home</a> 
              </li>
              <li>
                <a href="#">About</a> 
              </li>
			   <li>
                <a href="/welcome/auth">Auth</a> 
              </li>
              <li>
                <a href="#">Contact</a> 
              </li>
              <li>
                <a href="/welcome/invite">Invite</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
       <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <ul class="nav  nav-pills nav-stacked"></ul>
          <div class="well">
            <p>
     <?=$auth?>
          </div>
        </div>
            <?=$con?>
      </div>
    </div>
    <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  </body>

</html>