<?php
	error_reporting(-1); 
	ini_set("display_error", 1) ;

	$my_error_handler = function($errtype , $errmsg , $errfile , $erline)
	{
		switch ($errtype) 
		{
			case E_USER_ERROR:
				echo 'Error :' .$errmsg.'a la ligne :' .$errline.'<br>' ;  
				die(); 
				break;
			case E_USER_NOTICE:
				echo $errmsg ; 
				die(); 
				break;
			case E_USER_WARNING:
			echo "avertissement :  $errmsg";
			default:
				echo 'Other kind of error :' .$errmsg. ' ' .$erline; 
				die() ; 
				break;
		}
	} ; 

	set_error_handler($my_error_handler) ; 

	try
	{
		12/0 ; 
		}
	catch(Exception $e)
	{
		echo $e->getMessage() ; 
	}

	
?>		