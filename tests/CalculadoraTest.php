<?php
    use PHPUnit\Framework\TestCase;
    use App\Calculadora;
    class CalculadoraTest extends TestCase {
        public function testSuma() {
            $calc = new Calculadora();
            $resultado = $calc -> suma(3,2);
            $this-> assertEquals(5, $resultado);
            $this-> assertSame(5, $resultado);
            $this-> assertGreaterThan(4, $resultado);
            $this-> assertNotNull($resultado);
        }

        public function testResta() {
            $calc = new Calculadora();
            $resultado = $calc -> resta(3,2);
            $this-> assertEquals(1, $resultado);
            $this-> assertSame(1, $resultado);
            $this-> assertGreaterThan(0, $resultado);
            $this-> assertNotNull($resultado);
        }


        public function testMultiplicacion() {
            $calc = new Calculadora();
            $resultado = $calc -> multiplicacion(3,2);
            $this-> assertEquals(6, $resultado);
            $this-> assertSame(6, $resultado);
            $this-> assertGreaterThan(5, $resultado);
            $this-> assertNotNull($resultado);
        }


        public function testDivision() {
            $calc = new Calculadora();
            $resultado = $calc -> division(3,2);
            $this-> assertEquals(1.5, $resultado);
            $this-> assertSame(1.5, $resultado);
            $this-> assertGreaterThan(1, $resultado);
            $this-> assertNotNull($resultado);
        }


        public function testSquare() {
            $calc = new Calculadora();
            $resultado = $calc -> square(4);
            $this-> assertEquals(2, $resultado);
            $this-> assertSame(2.0, $resultado);
            $this-> assertGreaterThan(1, $resultado);
            $this-> assertNotNull($resultado);
        }
    }