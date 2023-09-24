<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['userName'])) {
   unset($_SESSION['userName']);
}
header("location: index.php");