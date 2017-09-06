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
		$output1 = shell_exec ('copy c:\php7\php.ini c:\Apache24\htdocs\serverconfig\Atual /Y');
		?>
        <div class="container">
        <form class="form-horizontal" action="PhpEdit.php" method="post">
            <fieldset>
            <!-- Form Name -->
            <legend>Edit PHP Php.ini</legend>
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="textarea">Edit</label>
              <div class="col-md-9">                     
                <? $myfile = fopen("serverconfig/Atual/php.ini", "r") or die("Unable to open file!"); ?>
                <textarea name="textarea" rows="24" class="form-control" id="textarea"><? echo fread($myfile,filesize("serverconfig/Atual/php.ini")); ?></textarea>
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