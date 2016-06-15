<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\shapes;
use gfx_editor\output as gfx_output;

/**
 * Description of Shape
 *
 * @author Victor Aluko
 */
abstract class Shape {
    
    /**
     *
     * @var \gfx_editor\output\IShapeOutput 
     */
    protected $outputter;
    
    /**
     * Sets the Shape Output instance
     * @param \gfx_editor\output\IShapeOutput $outputter
     */
    public function setOutputter(gfx_output\IShapeOutput $outputter) {
        $this->outputter = $outputter;
    }
    
    /**
     * Outputs the current Shape object
     */
    public function output() {
        // Render the current instance using the ShapeOutput
        $this->outputter->output($this);
    }
    
     //put your code here
    /**
     * Sets the attributes of the Shape instance
     * @param array $attributes
     */
    abstract public function init(array $attributes);
    
    /**
     * Calcualtes the Area of the shape
     */
    abstract public function calcArea();
}
