<?php
require 'core.inc.php';
session_destroy();
echo $ref;
header('Location: login.html');


?>
