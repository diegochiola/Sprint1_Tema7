<?php
//Funcion Grado de estudiante

//Definimos variable nota
$nota = 0;

function gradoEstudiante(int $nota): string {
    if ($nota >= 60){
        $respuesta = "Primera Division";
    }else if($nota >= 45 && $nota <= 59){
        $respuesta = "Segunda Division";
    }else if($nota > 33 && $nota <= 44){
        $respuesta = "Tercera Division";
    }else{
        $respuesta = "Reprobado";
    }
    return $respuesta;
}

echo "En base a las notas, el estudiante resulta ser: " . gradoEstudiante($nota);

?>