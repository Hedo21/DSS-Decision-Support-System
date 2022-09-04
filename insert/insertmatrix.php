<?php
include ('../config.php');

$alt = $_POST['idalt'];
$bbt = $_POST['idbobot'];
$skl = $_POST['idskala'];

$sql = "INSERT INTO matrixkeputusan VALUES (NULL, '$alt', '$bbt', '$skl')";
$results = $config->query($sql);

if ($results==TRUE) {
    header("location:../view/dtmatrix.php");
} else {
    header("location:../form/formmatrix.php");
}
