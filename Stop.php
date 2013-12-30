<?php
$temp = file_get_contents("http://127.0.0.1:8080/requests/status.xml?command=pl_stop");
header("Location: index.php");
?>
