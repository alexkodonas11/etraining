<?php
foreach (glob("models/*.php") as $filename)
{
    require_once(dirname(__FILE__ ).'/'.$filename);
}

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
    }

    $controller->{ $action }();
  }
  
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
  
  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>