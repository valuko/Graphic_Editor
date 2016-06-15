<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\helpers;

/**
 * Class dedicated to initializing and fetching a shape object
 *
 * @author Victor Aluko
 */
class ShapesFactory 
{
    //put your code here
    
    /**
     * Takes the shape type name and returns an instance of type Shape
     * @param string $type
     * @return \gfx_editor\shapes\Shape
     */
    public static function getShapeObject($type) {        
        
        // Instantiate the shape using the type
        $className = ucwords($type);
        $fullClassPath = "\gfx_editor\shapes\{$className}";
        
        if (!class_exists($fullClassPath, TRUE)) {
            // throw exception for class not being loaded
            throw new \InvalidArgumentException("Unknown shape type {$type}", 1);
        }
        // Check if the class is an abstract class
        if ((new ReflectionClass($fullClassPath))->isAbstract()) {
            throw new \InvalidArgumentException("Shapes of type {$type} are not allowed to be instantiated", 1);
        }
        
        $object = new $fullClassPath();
        return $object;
    }
}
