<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\output;
use gfx_editor\shapes as gfx_shapes;

/**
 * This is the Shape Output class type that draws the shape as a collection of points.
 * It calculates the points for the Shape and then renders it
 *
 * @author Victor Aluko
 */
class ShapePointsOutput implements IShapeOutput {
    
    protected $params;
    /**
     * Method responsible for outputting the Shape
     * @param \gfx_editor\shapes\Shape $shape
     */
    public function output(gfx_shapes\Shape $shape) {
        
    }

    public function setOutputParams($params) {
        // Set the output params here
    }

//put your code here
}
