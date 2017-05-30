<?php
function redirect($url){
if(!headers_sent())
{ //If headers not sent yet... then do php redirect
  header('Location: '.$url);
  exit;
}
else
{ //If headers are sent... do java redirect... if java disabled, do html redirect.
  echo '<script type="text/javascript">';
  echo 'window.location.href="'.$url.'";';
  echo '</script>';
  echo '<noscript>';
  echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
  echo '</noscript>'; exit;
}
}//==== End -- Redirect

//==== Turn on HTTPS - Detect if HTTPS, if not on, then turn on HTTPS:
function SSLon(){
if($_SERVER['HTTPS'] != 'on'){
$url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
redirect($url);
}
}//==== End -- Turn On HTTPS

//==== Turn Off HTTPS -- Detect if HTTPS, if so, then turn off HTTPS:
function SSLoff(){
if($_SERVER['HTTPS'] == 'on')
{
  $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  redirect($url);
}
}//==== End -- Turn Off HTTPS


?>