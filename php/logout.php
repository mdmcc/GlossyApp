<?php
include("sessions.php");
session_destroy();
header('Location: ../index.html');
?>