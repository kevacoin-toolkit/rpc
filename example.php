<?php

error_reporting(0);

include("rpc.php");

$kpc = new Keva();

$kpc->username=$krpcuser;
$kpc->password=$krpcpass;
$kpc->host=$krpchost;
$kpc->port=$krpcport;


$run= $kpc->get_info();

$error = $kpc->error;

	if($error != "") 
		
					{
	
					echo "<p>&nbsp;&nbsp;Error ADDRESS</p>";				
					
					}

					else

					{
					echo "<pre>";
					print_r($run);
					echo "</pre>";
					}

?>