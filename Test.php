<?php
class Test{
	public function returnArrayOrNull(?string $teste): ?array{
		return [12,13,14];
	}
}

$t = new Test();
var_dump($t->returnArrayOrNull(null));
