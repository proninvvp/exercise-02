<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['userName'])) {
    echo 'Привет ' . $_SESSION['userName'];
    echo   "<br><a href='/exit.php'>Выход</a>";
} else {
    include 'web/index.php';
}
