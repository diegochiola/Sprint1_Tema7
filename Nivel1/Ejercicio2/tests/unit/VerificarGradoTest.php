<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
require_once '/Applications/XAMPP/xamppfiles/htdocs/PHP/Sprint1_Tema7/Nivel1/Ejercicio2/src/gradoEstudiante.php';
final class VerificarGradoTest extends TestCase{
//Creacion de test para cada division:
//primera division
    #[Test]
    #[TestDox('Teste para verificar Primera Division')]
    public function test_primeraDivision():void{
        //utilizo assertEquals porque necesito comparar texto brindado por la funcion gradoEstudiante
        $this->assertEquals("Primera Division",gradoEstudiante(60));
        $this->assertEquals("Primera Division",gradoEstudiante(95));
    }
    #[Test]
    #[TestDox('Teste para verificar Segunda Division')]
    public function test_segundaDivision():void{
        //utilizo assertEquals porque necesito comparar texto brindado por la funcion gradoEstudiante
        $this->assertEquals("Segunda Division",gradoEstudiante(45));
        $this->assertEquals("Segunda Division",gradoEstudiante(59));
    }
    #[Test]
    #[TestDox('Teste para verificar Tercera Division')]
    public function test_TerceraDivision():void{
        //utilizo assertEquals porque necesito comparar texto brindado por la funcion gradoEstudiante
        $this->assertEquals("Tercera Division",gradoEstudiante(34));
        $this->assertEquals("Tercera Division",gradoEstudiante(44));
    }
    #[Test]
    #[TestDox('Teste para verificar Reprobado')]
    public function test_reprobado():void{
        //utilizo assertEquals porque necesito comparar texto brindado por la funcion gradoEstudiante
        $this->assertEquals("Reprobado",gradoEstudiante(33));
        $this->assertEquals("Reprobado",gradoEstudiante(0));
    }
}
?>