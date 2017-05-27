<?php
// get controller/action/parameters
$controller="";
$action="";
$parameter="";

if (isset($_GET['arg'])) {
    $params=explode('/',$_GET['arg']);    
}else {
    $params="pages/home";
    $params=explode('/',$params);  
}
if (isset($params[0])) {
    $controller=$params[0];
}
if (isset($params[1])) {
    $action=$params[1];
}

if (isset($params[2])) {
    $parameter=$params[2];
}

foreach (glob("models/*.php") as $filename)
{
    require_once(dirname(__FILE__ ).'/'.$filename);
}

function call($controller, $action, $params=[]) {
    require_once('controllers/' . $controller . '_controller.php');
    
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'courses':
        $controller = new CoursesController();
      break;      
    }
    
    //$controller->{ $action }();
    call_user_func_array(array($controller,$action),[$params]);
}
  /* 
if (isset($_GET['controller'])) {
    $controller=$_GET['controller'];
}else {
    $controller="pages";
}
  
if (isset($_GET['action'])) {
    $action=$_GET['action'];
}else {
    $action="home";
}  

if (isset($_GET['querystring'])) {
    $parameters=$_GET['querystring'];
}else {
    $parameters="";
}  */


  
// we're adding an entry for the new controller and its actions
$controllers = array('pages' => ['home', 'error'],
                     'courses' => ['index', 'show','create','store','edit','update','delete'],
                     'posts' => ['index', 'show']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action,$parameter);
    } else {
      call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>