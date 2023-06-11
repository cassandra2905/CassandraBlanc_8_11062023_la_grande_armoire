<?php
    session_start();
    session_destroy();

    header("Location: http://localhost/la_grande_armoire/");
    exit;
?>