<?php

session_start();

$_SESSION['my_array'][2] = "Session to : page3";

echo $_SESSION['my_array'][2];

?>