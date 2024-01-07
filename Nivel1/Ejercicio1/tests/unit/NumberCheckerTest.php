<?php declare(strict_types=1);

require_once '/Applications/XAMPP/xamppfiles/htdocs/PHP/Sprint1_Tema7/Nivel1/Ejercicio1/tests/unit/NumberChecker.php';
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

//Clase para poder hacer el testeo
 final class NumberCheckerTest extends TestCase{
    #[Test]
    #[TestDox('Test para corroborar si el numero es par')]
    public function test_isEven():void{
        
        $numeroPar = new NumberChecker(8);
        $numeroImpar = new NumberChecker(21);

        $this->assertTrue($numeroPar->isEven());
        $this->assertNotTrue($numeroImpar->isEven());
    }

    #[Test]
    #[TestDox('Test para corroborar que el numero sea positivo')]
    public function test_isPositive():void{
        $numeroPositivo = new NumberChecker(2);
        $numeroNegativo = new NumberChecker(-5);

        $this->assertTrue($numeroPositivo->isPositive());
        $this->assertNotTrue($numeroNegativo->isPositive());
    } 
}

?>