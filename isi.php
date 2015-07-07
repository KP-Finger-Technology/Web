<?php 
$page = ($_GET['page']);

switch($page)
{
	case "comment_new";
	include "comment_new.php";
	break;
	
	default;
	include "comment_new.php";
	break;
}

?>