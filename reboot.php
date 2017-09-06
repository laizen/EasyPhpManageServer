<!doctype html>
<html>
    <head>
	    <title>Server</title>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="30;url=/" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        	body { padding-top:20px; }
       </style>
		<? 
	        $output = shell_exec ('shutdown -r -f -t 0');
    	    //echo "<pre>$output</pre>";
        ?>
	</head>
	<body>
    <div class="container">
        <div class="row">
            <h3>Reiniciando o Servidor... Aguarde.</h3>
            <div class="progress progress-striped active page-progress-bar">
                <div class="progress-bar" style="width: 100%;"></div>
            </div>
        </div>
    </div>
</body>
</html>