<!DOCTYPE html>
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  $links = json_decode(file_get_contents("links.json"), true);
?>
<html>
  <head>
    <title>Flex Desktop</title>
    <link rel="icon" type="image/png" href="desktop-icon.png" />
  </head>

  <body>
  </body>
</html>