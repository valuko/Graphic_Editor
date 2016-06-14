<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace gfx_editor\output;

/**
 * Description of ShapeOutputInterface
 *
 * @author Victor Aluko
 */
interface IShapeOutput {
    //put your code here
    
    public function output(\gfx_editor\shapes\IShape $shape);
}
