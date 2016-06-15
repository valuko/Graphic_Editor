<?php

use gfx_editor\shapes as gfx_space;

// Returns the request params to be served either via TTP POST or CLI command args
function getCliParams()
{
    return [];
}

// Get the request params here
$requestParams = getCliParams();

// Instantiate the variables needed
$shapes = new gfx_space\ShapesCollection();
$helper = new \gfx_editor\ShapesHelper();

// Loop over the params and instantiate the objects
foreach ($requestParams as $key => $params) {
    
    $shape = $helper->buildShape($params);
    if (empty($shape)) {
        // Handle empty shape case here
        echo "Shape params couldnt be initiated";
        continue;
    }
    
    $shapes->addItem($shape, $key);    
}

// Now output the Shapes after further processing
foreach ($shapes as $key => $shape) {
    $shape->output();
}



