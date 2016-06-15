<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\shapes;

/**
 * Description of Circle
 *
 * @author Victor Aluko
 */
class Circle extends Shape
{
    protected $radius;
    
    /**
     *
     * @var gfx_editor\Points 
     */
    protected $startPoint;


    public function calcArea() {
        // Calculate area
    }

    public function init(array $attributes) {
        
        // Initialize the defined attributes here
        $this->radius = $attributes['radius'];
        // Instantiate the origin point
        $this->startPoint = new \gfx_editor\Points($attributes['points']);
    }


}
