<?php
	
	require 'operacions.php';
	use \PHPUnit\Framework\TestCase;
	
	
	class  operacionsTest extends PHPUnit\Framework\TestCase {
	
		private $operacio_test;
 
		protected function setUp(): void{
			$this->operacio_test = new operacions();
		}
 
		protected function tearDown(): void{
			$this->operacio_test = NULL;
		}
 
		public function testTotal(){
			# Test 1
			$result = $this->operacio_test->suma(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->suma(1.2, 3.4);
			$this->assertEquals(4.6, $result);
			# Test 3
			$result = $this->operacio_test->suma(1.2, -5.4);
			$this->assertEquals(-4.2, $result);

			# Test 1
			$result = $this->operacio_test->resta(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->resta(1.2, 4.6);
			$this->assertEquals(-3.3999999999999995, $result);
			# Test 3
			$result = $this->operacio_test->resta(5.3, 1.8);
			$this->assertEquals(3.5, $result);

			# Test 1
			$result = $this->operacio_test->Multiplica(0, 0);
			$this->assertEquals(0, $result);
			# Test 2
			$result = $this->operacio_test->Multiplica(1.2, 4.6);
			$this->assertEquals(5.52, $result);
			# Test 3
			$result = $this->operacio_test->Multiplica(5.3, -1.8);
			$this->assertEquals(-9.54, $result);
			# Test 4
			$result = $this->operacio_test->Multiplica(-2.5, -3.4);
			$this->assertEquals(8.5, $result);

			# Test 1
			$result = $this->operacio_test->Divideix(8, 2);
			$this->assertEquals(4, $result);
			# Test 2
			$result = $this->operacio_test->Divideix(3.6, -1.2);
			$this->assertEquals(-3, $result);
			# Test 3
			$result = $this->operacio_test->Divideix(-4.8, -2.4);
			$this->assertEquals(2, $result);	

			# Test 1
			$result = $this->operacio_test->Potencia(2, 3);
			$this->assertEquals(8, $result);
			# Test 2
			$result = $this->operacio_test->Potencia(2, -1);
			$this->assertEquals(0.5, $result);
			# Test 3
			$result = $this->operacio_test->Potencia(-4, -2);
			$this->assertEquals(0.0625, $result);	
		}
 	}
?>
	
	
