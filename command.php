<?php
if (isset($_GET['ip'])){
    $ip = $_GET['ip'];

    $command = shell_exec("ping -c 1 " . $ip);
    echo "<pre>" . $command . "</pre>";
} else {
    echo "Veuillez fournir une IP";
}