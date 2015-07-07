<?php 
$page = ($_GET['page']);

switch($page)
{
	case "welcome";
	include "welcome.php";
	break;
	
	case "carousel";
	include "carousel.php";
	break;
	
	case "carousel_complete";
	include "carousel_complete.php";
	break;
	
	case "about";
	include "about.php";
	break;
	
	case "about_edit";
	include "about_edit.php";
	break;
	
	case "about_delete";
	include "about_delete.php";
	break;
	
	case "products";
	include "products.php";
	break;
	
	case "products_new";
	include "products_new.php";
	break;
	
	case "products_edit";
	include "products_edit.php";
	break;
	
	case "products_delete";
	include "products_delete.php";
	break;

	case "products_detail";
	include "products_detail.php";
	break;

	case "products_detail_new";
	include "products_detail_new.php";
	break;

	case "products_detail_edit";
	include "products_detail_edit.php";
	break;

	case "products_detail_delete";
	include "products_detail_delete.php";
	break;
	
	case "mobile";
	include "mobile.php";
	break;
	
	case "mobile_new";
	include "mobile_new.php";
	break;
	
	case "mobile_edit";
	include "mobile_edit.php";
	break;
	
	case "mobile_delete";
	include "mobile_delete.php";
	break;
	
	case "sp_mobile_new";
	include "sp_mobile_new.php";
	break;
	
	case "sp_mobile_edit";
	include "sp_mobile_edit.php";
	break;
	
	case "sp_mobile_delete";
	include "sp_mobile_delete.php";
	break;
	
	case "desktop";
	include "desktop.php";
	break;
	
	case "desktop_new";
	include "desktop_new.php";
	break;
	
	case "desktop_edit";
	include "desktop_edit.php";
	break;
	
	case "desktop_delete";
	include "desktop_delete.php";
	break;
	
	case "sp_desktop_new";
	include "sp_desktop_new.php";
	break;
	
	case "sp_desktop_edit";
	include "sp_desktop_edit.php";
	break;
	
	case "sp_desktop_delete";
	include "sp_desktop_delete.php";
	break;
	
	case "web";
	include "web.php";
	break;
	
	case "web_new";
	include "web_new.php";
	break;
	
	case "web_edit";
	include "web_edit.php";
	break;
	
	case "web_delete";
	include "web_delete.php";
	break;
	
	case "sp_web_new";
	include "sp_web_new.php";
	break;
	
	case "sp_web_edit";
	include "sp_web_edit.php";
	break;
	
	case "sp_web_delete";
	include "sp_web_delete.php";
	break;
	
	case "career";
	include "career.php";
	break;
	
	case "career_new";
	include "career_new.php";
	break;
	
	case "career_edit";
	include "career_edit.php";
	break;
	
	case "career_delete";
	include "career_delete.php";
	break;
	
	case "contact";
	include "contact.php";
	break;
	
	case "contact_edit";
	include "contact_edit.php";
	break;
	
	case "profile";
	include "profile.php";
	break;
	
	case "profile_edit";
	include "profile_edit.php";
	break;
	
	case "profile_new";
	include "profile_new.php";
	break;
	
	case "profile_delete";
	include "profile_delete.php";
	break;
	
	case "comment_view";
	include "comment_view.php";
	break;
	
	case "comment_delete";
	include "comment_delete.php";
	break;
	
	case "comment_new";
	include "comment_new.php";
	break;
	
	case "logs";
	include "logs.php";
	break;
	
	case "blog";
	include "blog.php";
	break;

	case "blog_new";
	include "blog_new.php";
	break;

	case "blog_edit";
	include "blog_edit.php";
	break;

	case "blog_delete";
	include "blog_delete.php";
	break;

	default;
	include "welcome.php";
	break;
}

?>