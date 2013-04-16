         <!doctype html>
<html>
  
  <head>
    <title>auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
   <link rel="stylesheet" href="https://app.divshot.com/css/divshot-util.css">
    <link rel="stylesheet" href="/dop/css/simple.css">
    <link rel="stylesheet" href="/dop/css/bootstrap.css">
    <script src="https://app.divshot.com/js/jquery.min.js"></script>
  </head>
  
  <body>
     <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">My Session</a>
          <div class="navbar-content">
            <ul class="nav">
              <li class="active">
                <a href="/">Home</a> 
              </li>
              <li>
                <a href="#">About</a> 
              </li>
			   <li>
                <a href="/auth">Auth</a> 
              </li>
              <li>
                <a href="#">Contact</a> 
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
              <b>Tip:</b>To use the site you need to log in.</p>
          </div>
        </div>
        <div class="span9">
          <form method="POST" action="/auth/" class="form-vertical">
            <div class="control-group">
              <label class="control-label" for="login">Login or Email:</label>
              <div class="controls">
                <input  type="text" name="login" id="login" class="input-large"> 
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="paswd">Password:</label>
              <div class="controls">
                <input type="password" name="pass" id="paswd" class="input-large"> 
              </div>
            </div>
         
          <input type="submit" name="auth_on" class="btn btn-success" value="Auth">
            </form>
        </div>
      </div>
    </div>
    <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  </body>

</html>