<?php 
// Start Session

session_start();

//include Config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Messages.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');



$bootstap = new Bootstrap($_GET);
$controller = $bootstap->createController();
if($controller){
	$controller->executeAction();
}

 ?>
