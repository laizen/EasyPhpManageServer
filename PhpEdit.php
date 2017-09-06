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
$my_file = 'serverconfig/Novo/php.ini';
$handle = fopen($my_file, 'w') or die('Não foi Possível Abrir o arquivo:  '.$my_file);
$data = $_POST["textarea"];
fwrite($handle, $data);
$output0 = shell_exec ('copy c:\Apache24\htdocs\serverconfig\Novo\php.ini c:\php7\php.ini /Y');
?>
<div class="container" id="box">
	<p>&nbsp;</p>
	<div class="row well">
        <div class="alert alert-success">
          <strong>OK!</strong> Alteração realizada.
        </div>
        <div align="center"><h3>Deseja Reiniar o Servidor para Atualizar as Configurações ?</h3></div>
        <center>
             <a href="/reboot.php" class="btn btn-primary" role="button" target="_self"><span class="fa fa-refresh" aria-hidden="true"></span> Reboot </a>&nbsp;
             <a href="/" class="btn btn-primary" role="button" target="_self"><span class="fa fa-backward" aria-hidden="true"></span> Voltar Pagina Inicial</a>
	    </center>
        
	</div>
</div>
</body>
</html>