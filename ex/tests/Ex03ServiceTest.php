<?php

namespace App\Tests\Service;

use PHPUnit\Framework\TestCase;
use App\Service\Ex03Service;

class Ex03ServiceTest extends TestCase
{
    private Ex03Service $service;

    protected function setUp(): void
    {
        $this->service = new Ex03Service();
    }

	public function testUppercaseWordsClassic()
	{
		$result = $this->service->uppercaseWords('bonjour le monde');
		$this->assertEquals('Bonjour Le Monde', $result);
	}

	public function testUppercaseWordsAccentEtChiffres()
	{
		$result = $this->service->uppercaseWords('42 school 42');
		$this->assertEquals('42 School 42', $result);
	}

	public function testUppercaseWordsMinusculeMajuscule()
	{
		$result = $this->service->uppercaseWords('BONJOUR anNa');
		$this->assertEquals('Bonjour Anna', $result);
	}

	public function testCountNumbersNone()
	{
		$result = $this->service->countNumbers('aucun chiffre ici!');
		$this->assertEquals(0, $result);
	}

	public function testCountNumbersSimple()
	{
		$result = $this->service->countNumbers('abc123');
		$this->assertEquals(3, $result);
	}

	public function testCountNumbersNegativeAndZero()
	{
		$result = $this->service->countNumbers('-10, c\'est 2 chiffres');
		$this->assertEquals(3, $result);
	}

}
