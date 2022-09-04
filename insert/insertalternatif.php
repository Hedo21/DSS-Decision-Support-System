<?php
include ('../config.php');

$nmalt = $_POST['alt'];

$sql = "INSERT INTO alternatif VALUES (NULL, '$nmalt')";
$results = $config->query($sql);

if ($results==TRUE) {
    header("location:../view/dtalternatif.php");
} else {
    header("location:../form/formalternatif.php");
}
