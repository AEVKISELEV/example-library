<?php

declare(strict_types=1);

namespace Aevkiselev\ExampleLibrary;

class Sender
{
	public function send(): bool
	{
		return rand(0, 1) === 1;
	}
}