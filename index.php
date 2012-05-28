<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>[wt] wired tab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Recargas de celular">
    <meta name="author" content="<Daniel Ortiz>jdoavila@gmail.com, <David Briones>dbrio@gmail.com">

    <!-- Le styles -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/docs.css" rel="stylesheet">
    <link href="bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
  	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
  	</head>
  	<body>
      <div class="arriba"> <!-- Inicio del encabezado del sitio en Responsive Design -->
      <div class="row-fluid">
          <div class="span12">
            <div class="login">
              Welcome: <strong>danielortiz</strong> <a class="btn btn-danger" href="#">Logout</a>
              </div>            
            <div class="row-fluid">
            <div class="span4">
              <div class="logo">[wt]</div>
            </div>
            <div class="span8">
              <div class="navwt">
                <div class="subnav">
                  <ul class="nav nav-pills">
                    <li><a href="#labels">Home</a></li>
                    <li><a href="#badges">About Us</a></li>
                    <li><a href="#typography">Contact Us</a></li>
                    <li><a href="#thumbnails">Privacy</a></li>
                    <li><a href="#alerts">Help</a></li>
                  </ul>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
      </div> <!-- Fin del encabezado del sitio en Responsive Design -->
      <div class="wrapperAll">
      <div class="container"> <!-- Inicio del cuerpo medio del sitio -->
        <div class="row-fluid">
          <div class="span6">
            <div class="formChoose">
            <form class="form-inline">
              <select class="span5">
                <option value="1" selected>Choose Between</option>
                <option value="2">Friend Posts</option>
                <option value="3">Your Posts</option>
                <option value="4">Both</option>
              </select>
            </form>
          </div>
          </div>
          <div class="span6">
            <div class="frmSearch">
            <form class="form-search">
              <input type="text" class="search-query" name="txtBuscar" id="txtBuscar" placeholder="Search..." required>
              <button type="submit" class="btn btn-info" name="bntBuscar" id="btnBuscar">Search</button> 
            </form>
            </div>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span9">
            Textos
          </div>
          <div class="span3">
            <div class="well" style="padding: 8px 0; margin-right: 10px">
              <ul class="nav nav-list">
                <li class="nav-header">User Options</li>
                <li class="active"><a href="#"><i class="icon-th icon-white"></i> Dashboard</a></li>
                <li><a href="#"><i class="icon-plus"></i>New Post</a></li>
                <li><a href="#"><i class="icon-user"></i>Profile</a></li>
                <li><a href="#"><i class="icon-globe"></i>Friends</a></li>
                <li><a href="#"><i class="icon-star"></i>Favorite Posts</a></li>
                <li><a href="#"><i class="icon-wrench"></i>Settings</a></li>
              </ul>
            </div>
            <div class="centerText">
              <strong>Tabs:</strong>
              <form name="frmTabs" id="frmTabs" action="#">
                <select class="span7" name="selTabs" id="selTabs">
                  <option value="1">Art</option>
                  <option value="2">Culture</option>
                  <option value="3">Sports</option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div> <!-- Fin del cuerpo medio del sitio -->
      <div class="footer">
        <div class="row-fluid">
          <div class="span4">
            Primer Columna
          </div>
          <div class="span4">
            Segunda columna
          </div>
          <div class="span4">
            Tecer Columna
          </div>
        </div>
      </div>
  	</body>
  </html>