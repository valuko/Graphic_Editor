<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor;

use gfx_editor\shapes as gfx_shape;
use gfx_editor\helpers as gfx_helpers;
use gfx_editor\output as gfx_output;

/**
 * Helper class for manipulating Shapes
 *
 * @author Victor Aluko
 */
class ShapesHelper {

    //put your code here

    /**
     * 
     * @param array $shapeParams
     * @return Shape|null Returns the instantiated Shape object or null on error
     */
    public function buildShape(array $shapeParams) {

        try {
            // Initialize the factory
            $shape = gfx_helpers\ShapesFactory::getShapeObject($shapeParams['type']);
            // Use the other params to build the shape object
            $params = $shapeParams['params'];
            $shape->init($params['attributes']);
            // Now set the output params
            $shapeOutputter = gfx_output\ShapeOutputFactory::getOutputInstance($params['output']);
            // Set the output instance
            $shape->setOutputter($shapeOutputter);            
            
            return $shape;
        } catch (Exception $ex) {
            // Handle exceptions here
            // Return null to indicate Shape could not be initialized
            return NULL;
        }
    }

}
