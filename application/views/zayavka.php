 <!doctype html>
<html>
  
  <head>
    <title>auth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <link rel="stylesheet" href="/assets/css/divshot-util.css">
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
    <center><div class="container-fluid">
      <div class="row-fluid">
        <div class="span8">
          <ul class="nav  nav-pills nav-stacked"></ul>
          <h1>Enter Your Info</h1>
        </div>
        <div class="span4"></div>
      </div>
     
            
  
                <form method="POST" class="form-vertical">      
        <div class="control-group">
          <label class="control-label" for="city">City</label>
          <div class="controls">
            <input type="text" name="city" id="city" class="input-large"> 
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="univer">University</label>
          <div class="controls">
            <input type="text" name="univer" id="univer" class="input-large"> 
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="fuc">Faculty</label>
          <div class="controls">
            <input type="text" name="fuc" id="fuc" class="input-large"> 
          </div>
        </div>
   
    
        <div class="control-group">
          <label class="control-label" for="spec">Specialization</label>
          <div class="controls">
            <input type="text" name="spec" id="spec" class="input-large"> 
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="year_in">Year create</label>
          <div class="controls">
            <select name="year_in">
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
            </select>
          </div>
        </div>
         
        <div class="control-group">
          <label class="control-label">Name</label>
          <div class="controls">
            <input type="text" name="name" class="input-large"> 
          </div>
   
      
        <div class="control-group">
          <label class="control-label" for="name">Firstname</label>
          <div class="controls">
            <input type="text" name="firstname" id="name" class="input-large"> 
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="firstname">Email</label>
          <div class="controls">
            <input type="text" name="warden" id="firstname" class="input-large"> 
          </div>
        </div>
        <input type ="submit" name="regnewgroup" class="btn btn-info" name="regnewgroup" value="Подать заявку">
        
  </form>    
    </div></center>
    <script src="https://app.divshot.com/js/bootstrap.min.js"></script>
  </body>

</html>