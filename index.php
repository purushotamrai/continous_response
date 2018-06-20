<?php

function prepare_response() {
  $row = 1;
  if (($handle = fopen("sample.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
      $num = count($data);
      // Based on certain condition send response.
      if (TRUE) {
        echo sprintf("\r\n");
        for ($i = 0; $i < $num; $i++) {
          echo "Column $i : $data[$i]<br>";
        }
        echo "\r\n<hr>";
        $row++;
        flush();
        ob_flush();
      }
    }
    fclose($handle);
  }
}

?>

<!-- HTML Output. -->
<html>
  <head>
    <title>Continuos Processing</title>
  </head>
  <body>
    <!-- Body content. -->
    <?php
      prepare_response();
    ?>
  </body>
</html>
