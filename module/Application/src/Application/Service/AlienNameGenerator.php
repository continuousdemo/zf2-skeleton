<?php
namespace Application\Service;

class AlienNameGenerator
{
    static $chunk = array('za','zo','zu','ra','ro','ru','ti','po','do','de','di','ka'
        ,'ki','ki','ko','mu','ma','vu','va','lo','la','lu','li'
    );
    
    /**
     * Get a random alien name
     * @param integer $nbrChunks
     */
    public function getName($nbrChunks = 4)
    {
        $name = '';
    	for ($i=0; $i<$nbrChunks; $i++){
    		$pos = rand(0, count(static::$chunk)-1);
    		$name .= static::$chunk[$pos];
    	}

        //1
        //2

    	return ucfirst($name);
    }
}