<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use gfx_editor\shapes as gfx_space;
use gfx_editor\output as gfx_output;
/**
 * How it would work:
 *  Pass in params via CLI
 *  Params get passed into Factory class
 *  
 */

// Cli params will be passed in here
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
        // Handle exceptions here
    }
}

// Now Render the shapes as desired
// Output will be passed in as a param for the script
$outputType = '';

$shapeOutput = gfx_output\ShapeOutputFactory::getOutputInstance($outputType);
// Now use that instance to render the collections of Shapes
foreach ($shapes as $key => $shape) {
    $shapeOutput->output($shape);
}

