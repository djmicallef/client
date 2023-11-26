<?php
header("Content-type: text/plain; charset=ISO-8859-1");
header("Server: JAGeX/3.1");
// Paste the configuration Jagex returned below the PHP end block
echo file_get_contents("jav_config.ws");
?>
