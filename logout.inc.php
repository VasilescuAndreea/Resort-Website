<?php

session_start();
session_unset();
session_destroy();

header("location: ../Proiect/index.php");
exit();
