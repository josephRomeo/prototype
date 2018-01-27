<?php
error_reporting(E_PARSE|E_ERROR);

$kt = $_GET['keyType'];
$keyTypeCookieName = "kyc";

if (empty($kt)) 
{
	include("components/mobile/index.php");
}
if($kt=="")
{
	
	
	
}
if($kt=="0")
{
	
}
else if($kt=="web")
{

	include("components/web/index.php");
	
}
else if($kt=="mobile")
{

	include("components/mobile/index.php");
	
}
else if($kt=="main")
{

	include("components/mobile/components/flash.php");
	
}
else if($kt=="flash")
{

	include("components/mobile/components/flash.php");
	
}
else if($kt=="signup")
{

	include("components/mobile/components/signup.php");
	
}
else if($kt=="login")
{

	include("components/mobile/components/login.php");
	
}
else if($kt=="home")
{

	include("components/mobile/components/home.php");
	
}
else if($kt=="tutorial")
{

	include("components/mobile/components/tutorial.php");
	
}
else if($kt=="category")
{

	include("components/mobile/components/category.php");
	
}
else if($kt=="sidebar")
{

	include("components/mobile/components/sidebar.php");
	
}
else if($kt=="inbox")
{

	include("components/mobile/components/inbox.php");
	
}
else if($kt=="create")
{

	include("components/mobile/components/create.php");
	
}
else if($kt=="outbox")
{

	include("components/mobile/components/outbox.php");
	
}
else if($kt=="viewsentmail")
{

	include("components/mobile/components/viewsentmail.php");
	
}
else if($kt=="viewemail")
{

	include("components/mobile/components/viewemail.php");
	
}
else if($kt=="changepassword")
{

	include("components/mobile/components/changepassword.php");
	
}
else if($kt=="term")
{

	include("components/mobile/components/term.php");
	
}
else if($kt=="dashboard")
{

	include("components/web/components/dashboard.php");
	
}
else if($kt=="adminprofile")
{

	include("components/web/components/profile.php");
	
}
else if($kt=="userlist")
{

	include("components/web/components/userlist.php");
	
}
else if($kt=="language")
{

	include("components/web/components/tutorial.php");
	
}
else if($kt=="addlanguage")
{

	include("components/web/components/addtutorial.php");
	
}
else if($kt=="adminlist")
{

	include("components/web/components/admin.php");
	
}
else if($kt=="addadmin")
{

	include("components/web/components/addadmin.php");
	
}
else
{
	
}


?>