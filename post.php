<?php

declare(strict_types=1);

session_start();

if (isset($_POST['userName'])) {
    $_SESSION['userName'] = $_POST['userName'];
}

header("location: index.php");
