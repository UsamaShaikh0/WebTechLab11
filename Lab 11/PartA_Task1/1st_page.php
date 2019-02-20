<?php

session_start();

$SESSION['my_array'] = array();

$_SESSION['my_array'][0] = "Session is Started.";

echo $_SESSION['my_array'][0];

?>


