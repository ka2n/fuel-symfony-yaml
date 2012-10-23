<?php

namespace FuelSymfonYaml;

use Symfony\Component\Yaml\Yaml;

class Format extends \Fuel\Core\Format
{
	public function to_yaml($data = null)
	{
		if ($data == null)
		{
			$data = $this->_data;
		}

		return Yaml::dump($data);
	}

	protected function _from_yaml($string)
	{
		return Yaml::parse($string);
	}
}
