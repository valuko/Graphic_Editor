<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\output;
use gfx_editor\shapes as gfx_shapes;
/**
 * Description of ShapeDrawOutput
 *
 * @author Victor Aluko
 */
class ShapeDrawOutput implements IShapeOutput {
    //put your code here
    
    protected $params;


    public function output(gfx_shapes\Shape $shape) {
        
        return [];
    }

    public function setOutputParams($params) {
        // Set the necessary output params here
    }

}
