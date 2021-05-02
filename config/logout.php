<?php
session_start();
session_unset();
session_destroy();
// echo dirname(getcwd(),2).'\\images\\';
header("location:../index.php?logoutsecessfully");
