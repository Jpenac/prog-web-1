<?php
  require 'tmh/tmhOAuth.php';
  require 'tmh/tmhUtilities.php';
  $tmhOAuth = new tmhOAuth(array(
    'consumer_key'    => 'YOwHS8z0KePv2Y8rBSUlw',
    'consumer_secret' => 'B2nBRr9xOrDVIrVQqrPaG8wEW7zd9jhgMvIpu8jg8',
  ));

  session_start();
  if ( !isset($_SESSION['access_token']) ):?>
   <a href="login.php?authenticate=1">Sign in with Twitter</a>
  <? else:?>
    <a href="?tuit=1">Tuit</a>
    <a href="login.php?wipe=1">Logout</a>
  <? endif;


  if ( isset($_SESSION['access_token']) && $_REQUEST['tuit']):
    $tmhOAuth->config['user_token']  = $_SESSION['access_token']['oauth_token'];
    $tmhOAuth->config['user_secret'] = $_SESSION['access_token']['oauth_token_secret'];
    

    $code = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
      'status' => '¡Hola Twitter!'
    ));

    if ($code == 200) {
      tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
    } else {
      tmhUtilities::pr($tmhOAuth->response['response']);
    }  
  endif;

?>

