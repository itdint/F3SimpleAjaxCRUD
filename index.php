<?php
	//F3 requires base.php at the very least.
	$f3=require('lib/base.php');

	//All globals for F3 app are set here
	$f3->config('config/config.ini');

	//All routes are handled here instead of littering the index file
	$f3->config('config/routes.ini');

	//Starts the F3 app
	$f3->run();
