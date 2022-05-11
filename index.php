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
        <style>
        	body { padding-top:20px; }
       </style>
		<? include 'control.php'; ?>
	</head>
  <body>
  <div class="container">
      <div class="page-header">
			<a href="<? echo $_GET['page']; ?>/reboot.php" class="btn btn-primary btn-lg pull-right" role="button" target="_blank"><span class="fa fa-refresh"></span> Reiniciar </a>
        	<button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#myModal">Contas</button>
            <a href="<? echo $_GET['page']; ?>/Apache.php" class="btn btn-success btn-lg pull-right" role="button" target="_blank"><span class="fa fa-pencil "></span> Httpd.conf </a>
            <a href="<? echo $_GET['page']; ?>/Php.php" class="btn btn-success btn-lg pull-right" role="button" target="_blank"><span class="fa fa-pencil "></span> PHP.ini </a>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
            	<div class="modal-dialog">
            		<!-- Modal content-->
            		<div class="modal-content">
            			<div class="modal-header">
              				<button type="button" class="close" data-dismiss="modal">&times;</button>
              				<h4 class="modal-title">Contas do Servidor</h4>
            			</div>
                        <div class="modal-body">
                            <h4><dl>Conta FTP</dl></h4>
                            <blockquote class="blockquote">
	                            Usuário: username<br>Senha: password<br>IP: localhost
                            </blockquote>
                            <h4><dl>Conta MySQL</dl></h4>
                            <blockquote class="blockquote">
								Usuário: root<br>Senha: password
                            </blockquote>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
            		</div>
            	</div>
            </div>
        <h1>Servidor de Teste</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-huge" role="button"><span class="fa fa-server"></span> <br/><? ApacheServer(); ?></a>
            <a href="<? echo $_GET['page']; ?>/phpinfo.php" class="btn btn-info btn-lg btn-block btn-huge" role="button" target="_blank"><span class="fa fa-info"></span> <br/> PhpInfo</a>
            <a href="#" class="btn btn-success btn-lg btn-block btn-huge" role="button"><span class="fa fa-info"></span> <br/> Ftp Server <? FtpTest(); ?></a>
            <a href="<? echo $_GET['page']; ?>/phpMyAdmin" class="btn btn-primary btn-lg btn-block btn-huge" role="button" target="_blank"><span class="fa fa-database"></span> <br/> phpMyAmin</a>
            <a href="#" class="btn btn-warning btn-lg btn-block btn-huge" role="button"><span class="fa fa-database"></span> <br/><? MySQLTest(); ?></a>
        </div>
      </div>
    </div>
</body>
</html>
