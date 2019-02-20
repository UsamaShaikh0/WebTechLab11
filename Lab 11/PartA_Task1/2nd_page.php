<?php

session_start();

$_SESSION['my_array'][1] = "Session to : page2";

echo $_SESSION['my_array'][1];

?>