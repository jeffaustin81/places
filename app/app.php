<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Places.php";

  session_start();

  if (empty($_SESSION['list_of_places'])) {
    $_SESSION['list_of_places'] = array();
  }

  $app = new Silex\Application();


  $app->register(new Silex\Provider|TwigServiceProvider(), array('twig.path' => __DIR__.'/../veiws'));

  $app->get('/', function() {
    return "Something";
  })


  return $app;
 ?>
