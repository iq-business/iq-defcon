<?php

require_once("config.php");

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD, true, 65536);

$sql = file_get_contents('resources/iq-defcon-schema.sql');

foreach(explode(';', $sql) as $statment) {
    mysql_query($statment);
}

mysql_close($link);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <title>IQ DefCon</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">IQ DefCon</a>
        </div>
      </div>
    </nav>
		
		<div class="col-sm-6 col-sm-offset-3">  
		    <div class="panel panel-warning">
			  <div class="panel-heading">
			    <h3 class="panel-title">Warning</h3>
			  </div>
			  <div class="panel-body">
          <p>Database reset completed.</p>                
          <a href="index.html" class="btn btn-primary" role="button">Back</a>			
			  </div>
			</div>
    </div>
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; IQ Business 2017.</span>
      </div>
    </footer>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>