<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/StyleHeader.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/hearder.js"></script>
    <script src="../js/HearderResponsive.js"></script>
  </head>
  <body bgcolor=white>
  <?php
    echo '
      <header class="container">    
        <nav class="navbar">
          <div class="container-fluid">         
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">             
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="https://www.henry-chavez.com">Menu Responsive</a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav">
                <li class="active"><a href="https://www.henry-chavez.com">Link</a></li>
                <li><a href="https://www.henry-chavez.com">Link</a></li>
                <li class="dropdown">
                  <a href="https://www.henry-chavez.com" class="dropdown-toggle">down <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://www.henry-chavez.com">Action</a></li>
                    <li><a href="https://www.henry-chavez.com">Another action</a></li>
                    <li><a href="https://www.henry-chavez.com">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="https://www.henry-chavez.com">Separated link</a></li>
                    <li class="dropdown">
                      <a href="https://www.henry-chavez.com" class="dropdown-toggle">Dropdown <b class="caret right"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="https://www.henry-chavez.com">Action</a></li>
                        <li><a href="https://www.henry-chavez.com">Another action</a></li>
                        <li><a href="https://www.henry-chavez.com">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="https://www.henry-chavez.com">Separated link</a></li>
                      </ul>
                  </li>
                  </ul>
                </li>
              </ul>           
              <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.henry-chavez.com">Link</a></li>
                <li class="dropdown">
                  <a href="https://www.henry-chavez.com" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://www.henry-chavez.com">Action</a></li>
                    <li><a href="https://www.henry-chavez.com">Another action</a></li>
                    <li><a href="https://www.henry-chavez.com">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="https://www.henry-chavez.com">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>    
    </header>
    ';
  ?>
     
  
  </body>
</html>