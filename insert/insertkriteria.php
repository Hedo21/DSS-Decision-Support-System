<?php
include ('../config.php');

$nmkriteria = $_POST['ktr'];

$sql = "INSERT INTO kriteria VALUES (NULL, '$nmkriteria')";
$results = $config->query($sql);

if ($results==TRUE) {
    header("location:../view/dtkriteria.php");
} else {
    header("location:../form/formkriteria.php");
}
