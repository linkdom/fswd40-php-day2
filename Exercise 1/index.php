<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/chrome.css">
    <link rel="stylesheet" href="/css/mozilla.css">
  </head>
  <body>
    <?php
    $viewer = getenv( "HTTP_USER_AGENT" );
    $browser = "An unidentified browser";
    if( preg_match( "/Chrome/i", "$viewer" ) )
    {
    $browser = 'chrome';
    }
    else if( preg_match( "/Mozilla/i", "$viewer" ))
    {
    $browser = "mozilla";
    }
    elseif(preg_match('/Safari/i',"$viewer"))
    {
    $browser = 'Apple Safari';
    }
    echo "<link rel='stylesheet' href='css/" . $browser .".css'>";
    echo("</br>You are using $browser. </br>");
    ?>
  </body>
</html>
