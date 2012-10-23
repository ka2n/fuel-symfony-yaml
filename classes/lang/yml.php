<?php

use Symfony\Component\Yaml\Yaml;

class Lang_Yml extends \Fuel\Core\Lang_Yml
{
	protected function export_format($contents)
	{
		$this->prep_vars($contents);
		return Yaml::dump($contents);
	}
}

