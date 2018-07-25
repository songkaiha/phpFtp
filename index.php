<?php
require_once('ftp.php');

$config = array(
			'hostname' => 'yourhostname',
			'username' => 'yourusername',
			'password' => 'yourpassword',
			'port' => 21
				);

$ftp = new Ftp();

$ftp->connect($config);
//$ftp->mkdir("test_ftp");
//$ftp->mkdir("test_ftp/11/12/32");
//var_dump($bool);
$ftp->upload('11.doc','/word/20160420/11.doc');
//$ftp->download('ftp_upload.log','ftp_download.log');

/*End of file ftp_demo.php*/
/*Location: /htdocs/ftp_demo.php*/