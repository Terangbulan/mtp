<?php
session_start();
session_destroy();
header("location:http://localhost/mtp/admin/index.php");
?>