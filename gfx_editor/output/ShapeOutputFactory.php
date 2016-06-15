<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\output;

/**
 * Description of ShapeOutputFactory
 *
 * @author Victor Aluko
 */
class ShapeOutputFactory {
    
    /**
     * Initializes the ShapeOutput instance using the params passed in
     * @param array $params
     * @return IShapeOutput
     */
    public function getOutputInstance(array $params) {        
        
        // Instantiate the shape using the type
        $className = $this->getClassName($params['type']);
        if (empty($className)) {
            throw new \InvalidArgumentException("Output type not found");
        }
        
        $fullClassPath = "\gfx_editor\output\{$className}";
        
        if (!class_exists($fullClassPath, TRUE)) {
            // throw exception for class not being loaded
            throw new \InvalidArgumentException("Unknown output type {$params['type']}", 1);
        }
        
        /**
         * IShapeOutput $object Shape output instance
         */
        $object = new $fullClassPath();
        // Set the params
        $object->setOutputParams($params['params']);
        
        return $object;
    }
    
    /**
     * 
     * @param string $type The output type passed in as a param
     * @return string The name of the class or null if not found
     */
    protected function getClassName($type) {
        $nameMapping = $this->getNameMapping();
        
        return isset($nameMapping[$type]) ? $nameMapping[$type] : NULL;
    }
    
    /**
     * Gets the name mapping for the class names to the types possible
     * @return array
     */
    protected function getNameMapping() {
        //TODO : Move this to a configurable file
        return ['draw' => 'ShapeDrawOutput', 'points' => 'ShapePointsOutput'];
    }
    
    
}
