<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\shapes;

/**
 *
 * @author kong tech
 */
interface IShape 
{
    //put your code here
    /**
     * Sets the attributes of the Shape instance
     * @param array $attributes
     */
    public function init(array $attributes);
    
    /**
     * Calcualtes the Area of the shape
     */
    public function calcArea();
    
}
