<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/404.css" />
</head>

<body class="permission_denied">
    <div id="tsparticles"></div>
    <div class="denied__wrapper">
        <h1>404</h1>
        <h3>LOST IN <span>SPACE</span> INSACAR? Hmm, looks like that page doesn't exist. You will be redirected to homepage in 3 seconds</h3>
        <img id="astronaut" src="assets/astronaut.svg" />
        <img id="planet" src="assets/planet.svg" />
       
    </div>

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/tsparticles@1.18.11/dist/tsparticles.min.js"></script>
    <script type="text/javascript" src="js/404.js"></script>

</html>
<?php
    echo '<script>setTimeout(function(){
        window.location = "/home";
      }, 3000);</script>';

?>

