<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Base;

/**
 * SetTrait provides a common implementation of the 'set' interface.
 * 
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
trait SetTrait {
    /**
     * Set object property.
     * 
     * @param string $property
     * @param mixed $value
     */
    public function __set($property, $value)
    {
        $pos = strpos($property, $this->objectType);
        
        if(!property_exists($this, $property)){
            throw new Exception\InvalidArgumentException("Property '$property' does not exist.");
        }
        
        if($pos === false){
            $this->$property = $value;
        }else{
            throw new Exception\InvalidArgumentException("Property '$property' can not be set.");
        }
    }
}