<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use gfx_editor\shapes as gfx_space;
/**
 * How it would work:
 *  Pass in params via CLI
 *  Params get passed into Factory class
 *  
 */

$cliParams = [];
$shapes = new gfx_space\ShapesCollection();

foreach ($cliParams as $key => $params) {
    
    try {
        // Initialize the factory
        $shape = gfx_space\ShapesFactory::getShapeObject($params['type']);
        // Use the other params to build the shape object
        $shape->init($params['attributes']);
        // Now add to the collection
        $shapes->addItem($shape, $key);        
        
    } catch (Exception $ex) {
        
    }
}

// Now Render the shapes as desired

