<?php

require_once("Persona2.php");

$cedula = "48225577";
$primer_nombre = "Luis";
$primer_apellido = "Fagúndez";

//Creamos el objeto y llamamos al constructor para pasarle los parámetros
$profeLuis = new Persona2($cedula, $primer_nombre, $primer_apellido);
echo $profeLuis->getCi() . "<br>";
echo $profeLuis->getNombre() . "<br>";
echo $profeLuis->getApellido() . "<br>";

echo $profeLuis->caminar() . "<br>";


