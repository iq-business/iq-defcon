<?php
    // To demonstrate CSRF change your target url here
    //$target = 'http://target.site/';
    $target = 'http://~/iq-defcon/comments.php' // for testing
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
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h3 class="panel-title">Comments</h3>
            </div>
            <div class="panel-body">
              <form role="form" action="<?php print($target); ?>" method="post"> 
                <div class="form-group">
                  <input name="comment" type="text" class="form-control" id="comment" placeholder="Comment" value="">
                </div>
                <div class="form-group">
                  <button name="submit" value=true type="submit" class="btn btn-primary pull-right">Post without Authorization</button>
                </div>
              </form>
            </div>
        </div>
    </div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>