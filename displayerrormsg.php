if($_GET['displayerrors']==1)
{
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	//phpinfo();

}
else
{
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
}