<?php

/**
 * FuelPHP library replace Yaml parser with Symfony's Yaml parser
 *
 * @package		fuel-symmfony-yaml
 * @version		1.0
 * @author		Katsuma Ito (katsumai@gmail.com)
 * @link		http://github.com/ka2n/fuel-symfony-yaml
 * 
 */

Autoloader::add_classes(array(
    'Lang_Yml' => __DIR__.'/classes/lang/yml.php',
    'Format' => __DIR__.'/classes/format.php',
));

Autoloader::add_namespace('Symfony\\Component\\Yaml', __DIR__.'/vendor/Yaml/', true);
