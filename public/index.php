<?phpuse controllers\PageController;spl_autoload_register(function($classname){    $path = str_replace('\\','/','../'.$classname.'.php');    include_once $path;});$action = 'action_';$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';$controller = new PageController();$controller->Request($action);