<?php
// Destroy the current session to log the user out
session_destroy();

// Redirect the user to the index (signup) page after logging out
header("location: login.php");
?>