<?php

use PHPUnit\Framework\TestCase;

class Testestest extends TestCase
{
	//Testa se é idêntico
	public function testSame()
	{
		$soma = 2+2;

		$this->assertSame(4,$soma);
		//assertSame verifica se é idêntico
	}
	//Testa se é verdadeiro
	public function testTrue()
	{
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}
	//Testa se é falso
	public function testFalse()
	{
		$falso = false;

		$this->assertFalse($falso);
	}
	//Testa se Count é igual
	public function testCount()
	{
		$array = ["a",1,true];

		$count = count($array);

		$this->assertSame(3,$count);
		$this->assertSame("a",$array[0]);
		$this->assertCount(3,$array);
	}
	//Testa se é vazio
	public function testEmpty()
	{
		$vazio = "";

		$this->assertEmpty($vazio);
	}
	//Testa se é nulo
	public function testNull()
	{
		$vazio = null;

		$this->assertNull($vazio);
	}
	//Testa se é igual mas não identico
	public function testEquals()
	{
		$a = "1";
		$b = 1;

		$this->assertEquals($a,$b);
	}
}