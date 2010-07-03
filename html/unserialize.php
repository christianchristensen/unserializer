<?php
  if(!isset($_GET['js'])) {
    $header = '
      <html>
        <head>
          <title>theunserializer</title>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <script type="text/javascript" src="/krumo/krumo.js"></script>
        </head>
        <body>';
    echo $header;
  }
?>
    <?php

    $unser = unserialize($_POST['unserialize_input']);
    
    echo '<textarea cols="70" rows="30">';
    echo htmlentities(print_r($unser,1));
    echo '</textarea>';

    include_once './krumo/class.krumo.php';
    krumo($unser);

    if(isset($_GET['debug'])) {        
      echo '<br /><br /> <b>DEBUG</b>';
      krumo($_POST, $_GET);
      krumo($_SERVER, $_ENV);
      phpinfo();
    }
    ?>
<br />
<div><a href="http://www.unserializer.com">unserializer.com</a></div>
<br />

<?php
if(!isset($_GET['js'])) {
  $footer = '
      </body>
    </html>';
  echo $footer;
}
?>
