<?php
require __DIR__. "/../vendor/autoload.php";
require __DIR__."/funciones.php";
use Model\BasedeDatos;
use Model\Departamento;

$baseDeDatos = new BasedeDatos;
$baseDeDatos::setBD(new mysqli("localhost","root","root", "petroservice"));

// $dpto = Departamento::ObtenerDepartamentos();
// debugear($dpto);
?>

