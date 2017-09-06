<!doctype html>
<html>
    <head>
	    <title>Server</title>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
    </head>
    <body>
    	<? 
		$output0 = shell_exec ('copy c:\Apache24\conf\httpd.conf c:\Apache24\htdocs\serverconfig\Atual /Y');
		?>
        <div class="container">
        <form class="form-horizontal" action="ApacheEdit.php" method="post">
            <fieldset>
            <!-- Form Name -->
            <legend>Edit Apache httpd.conf</legend>
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="textarea">Edit</label>
              <div class="col-md-9">                     
                <? $myfile = fopen("serverconfig/Atual/httpd.conf", "r") or die("Unable to open file!"); ?>
                <textarea name="textarea" rows="24" class="form-control" id="textarea"><? echo fread($myfile,filesize("serverconfig/Atual/httpd.conf")); ?></textarea>
                <? fclose($myfile);	?>
              </div>
              <div class="col-md-1">
				<button id="save" name="save" class="btn btn-primary">Salvar</button>
			  </div>
              
            </div>
            </fieldset>
        </form>
		</div>
    </body>
</html>    