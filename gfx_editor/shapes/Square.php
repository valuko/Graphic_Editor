<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor;
namespace gfx_editor\shapes;

/**
 * Description of Square
 *
 * @author Victor Aluko
 */
class Square extends Shape
{
    
    protected $length;

    /**
     *
     * @var gfx_editor\Points 
     */
    protected $startPoint;
    
    public function calcArea() {
        
    }

    public function init(array $attributes) {
        // Use the 
        
        // Initialize the defined attributes here
        $this->length = $attributes['length'];
        $this->startPoint = new \gfx_editor\Points($attributes['points']);
    }

}
