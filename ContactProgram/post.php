<?php
<?include("Class_Name.php")?>
$p = $_POST['person'];
$e = $_POST['employer'];


$v = new person();

$v->setName($p);

echo $v;


?>
