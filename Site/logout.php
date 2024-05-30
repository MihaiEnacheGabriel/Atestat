<?php
session_start();
session_unset();
session_destroy();
echo ("<script LANGUAGE='JavaScript'>
        window.alert('Te-ai deconectat cu succes!');
        window.location.href='Site.php';
        </script>");
?>