<?php
  $version = "v1.1";
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Vuex Inc.</title>
        <!-- bower -->
        <link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="style/app.css">
    </head>
    <body>
        <?= $version ?>
        <div class="alert alert-danger">Test alert</div>
        <div id="app"></div>

        <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower/jquery/dist/jquery.min.js"></script>
        <script src="dist/bundle.js"></script>
    </body>
</html>
