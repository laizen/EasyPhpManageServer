<?
$user     = $ftp_user_name = "george";
$password = $ftp_user_pass = "[S]-creaRO";
$IP       = $ftp_server    = "192.168.0.65";
$FTP      = $ftp_server_port = "21";
$user_db  = "root";
$database = "mysql";
function ApacheServer(){
	$version = apache_get_version();
	echo $version;
}
function FtpTest(){
	set_time_limit(300);//for setting 
	$path='/'.date('dmY').'';
	global $ftp_server, $ftp_server_port, $ftp_user_name, $ftp_user_pass;
	
	// set up a connection to ftp server
	$conn_id = ftp_connect($ftp_server, $ftp_server_port); 
	// login with username and password
	$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
	
	// check connection and login result
	if ((!$conn_id) || (!$login_result)) { 
		echo "Erro <span class='fa fa-thumbs-down'></span>";
	} else {
		echo "OK <span class='fa fa-thumbs-o-up'></span>";
		// enabling passive mode
		ftp_pasv( $conn_id, true );
		// get contents of the current directory
		$contents = ftp_nlist($conn_id, $path);
		// output $contents
		//var_dump($contents);
	}
	
	// close the FTP connection
	ftp_close($conn_id);
}
function MySQLTest(){
	$mysqli = new mysqli("localhost", "root", "password");
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		echo "Erro de Conexão ".mysqli_connect_error()."<span class='fa fa-thumbs-down'></span>";						
		exit();
	}
	/* print server version */
	echo "BD Server OK <span class='fa fa-thumbs-o-up'></span>";
	echo "<br> MySQL server: ", $mysqli->server_info;
	/* close connection */
	$mysqli->close();
}
?>
