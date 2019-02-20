<?php

session_start();

echo $_SESSION['my_array'][0];


unset($_SESSION['my_array'][2]);
unset($_SESSION['my_array'][1]);

print_r($_SESSION['my_array']);


?>
