<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">

   <title>?TITLE?</title>
<link rel="stylesheet" type="text/css" href="/assets/step/css/ui-lightness/jquery-ui-1.8.2.custom.css" />  
<link rel="stylesheet" type="text/css" href="/assets/step/css/style.css" />  


   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   
   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" type="text/css" href="/assets/content/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="/assets/content/css/bootstrap-responsive.css">
   <link rel="stylesheet" type="text/css" href="/assets/content/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="/assets/content/css/bootmetro-tiles.css">
   <link rel="stylesheet" type="text/css" href="/assets/content/css/bootmetro-charms.css">
   <link rel="stylesheet" type="text/css" href="/assets/content/css/metro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="/assets/content/css/icomoon.css">

   <!--  these two css are to use only for documentation -->
   <link rel="stylesheet" type="text/css" href="/assets/content/css/demo.css">
   <link rel="stylesheet" type="text/css" href="/assets/scripts/google-code-prettify/prettify.css" >
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

   <!-- Le fav and touch icons -->
   <link rel="shortcut icon" href="content/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="content/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="content/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="content/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="content/ico/apple-touch-icon-57-precomposed.png">
  
   <!-- All JavaScript at the bottom, except for Modernizr and Respond.
      Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
      For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
   <script src="/assets/scripts/modernizr-2.6.1.min.js"></script>

   
   <style>
       #slider-wrap{ /* Оболочка слайдера и кнопок */
    width:310px;
    
    }
#slider{ /* Оболочка слайдера */
    width:310px;
    height:150px;
    overflow: hidden;
    
    position:relative;}
.slide{ /* Слайд */
    width:100%;
    height:100%;
    }
       </style>
</head>

<body style="width:1280px;margin:0 auto;" data-accent="blue">
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

   <!-- Header
   ================================================== -->
   <header id="nav-bar" class="container-fluid">
      <div class="row-fluid">
         <div class="span8">
            <div id="header-container">
               <a id="backbutton" class="win-backbutton" href="/id<?=$self?>"></a>
               <h5>All together</h5>
               <div class="dropdown">
                  <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#" >
                    MySession
                   
                  </a>
                  
            </div>
            </div>
         </div>
         <div id="top-info" class="pull-right">
        <?=$usrinfo?>
         <hr class="separator pull-left"/>
         <a id="settings" class="pull-left" href="#">
            <b class="icon-settings"></b>
         </a>
      </div>
   </div>
   </header>
   
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="metro span12">
           <?=$profilemenu?>
			
       
	<?=$modul?>  
              
       </div>
	   
         </div>
		 
		 
		 
      </div>
   </div>  


<?=$self_menu?>
   


   
   
   
   
   
   <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script>window.jQuery || document.write("<script src='/assets/scripts/jquery-1.8.2.min.js'>\x3C/script>")</script>

   <script type="text/javascript" src="/assets/scripts/google-code-prettify/prettify.js"></script>
   <script type="text/javascript" src="/assets/scripts/jquery.mousewheel.js"></script>
   <script type="text/javascript" src="/assets/scripts/jquery.scrollTo.js"></script>
   <script type="text/javascript" src="/assets/scripts/bootstrap.min.js"></script>
   <script type="text/javascript" src="/assets/scripts/bootmetro.js"></script>
   <script type="text/javascript" src="/assets/scripts/bootmetro-charms.js"></script>
   <script type="text/javascript" src="/assets/scripts/demo.js"></script>
   <script type="text/javascript" src="/assets/scripts/holder.js"></script>

   <script type="text/javascript">
           
      $(".metro").metro();
   </script>
</body>
</html>
