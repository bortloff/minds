<?php
/**
 * Social 
 */

namespace minds\plugin\social\services;

use minds\bases;
use minds\core;

class build extends bases\plugin{

	static public function build($service){
		$class_name = "minds\\plugin\\social\\services\\$service";
		if(!class_exists($class_name))
			throw new \Exception('Service does not exists');
		
		return new $class_name;
		
	}
			
}
	