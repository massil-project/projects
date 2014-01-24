<?php

namespace Massil\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MassilUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
