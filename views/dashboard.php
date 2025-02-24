<?php
    require_once './../src/helpers/sessionHelper.php';

    if (!SessionHelper::isAuthenticated()) {
        header("Location: /public/index.php");
        exit();
    }

    echo "Bienvenido, " . $_SESSION['us_id'] . " (ID: " . $_SESSION['us_id'] . ")";
?>
<a href="/public/logout.php">Cerrar sesión</a>