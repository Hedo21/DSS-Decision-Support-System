<?php
include ('../config.php');

$idkret = $_POST['idkret'];
$value = $_POST['value'];

$sql = "INSERT INTO bobot VALUES (NULL, '$idkret', '$value')";
$results = $config->query($sql);

if ($results==TRUE) {
    header("location:../view/dtbobot.php");
} else {
    header("location:../form/formbobot.php");
}
