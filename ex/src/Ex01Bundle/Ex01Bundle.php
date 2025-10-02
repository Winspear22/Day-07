<?php

namespace App\Ex01Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use App\Ex01Bundle\DependencyInjection\D07Extension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class Ex01Bundle extends Bundle
{
	public function getContainerExtension(): ?ExtensionInterface
	{
		if (null === $this->extension)
			$this->extension = new D07Extension();
		return $this->extension;
	}
}
?>