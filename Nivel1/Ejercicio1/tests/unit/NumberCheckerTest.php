<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{
    #[Test]
    #[TestDox('Test para corroborar si el numero es par')]
    public function test_isEven():void{

    }
    #[Test]
    #[TestDox('Test para corroborar que el numero seapositivo')]
    public function test_isPositive():void{
        
    } 
}

?>