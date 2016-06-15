<?php

/**
 * Controller class for routing the API service request
 *
 * @author Victor Aluko
 */
class IndexController {
    //put your code here

    /**
     * POST endpoint for the GraphicEditor
     */
    public function postGraphicEditor() {
        $postParams = $_POST;

        // Instantiate the variables needed
        $shapes = new \gfx_editor\helpers\ShapesCollection();
        $helper = new \gfx_editor\ShapesHelper();

        // Loop over the params and instantiate the objects
        foreach ($postParams as $key => $params) {

            // Use the Shape helper to build the shape instance here
            $shape = $helper->buildShape($params);
            if (empty($shape)) {
                // Handle empty case here
                echo "Shape params couldnt be initiated";
                continue;
            }

            $shapes->addItem($shape, $key);
        }

        // Now output the Shapes after further processing
        if (!empty($shapes)) {
            foreach ($shapes as $key => $shape) {
                $shape->output();
            }
        }
    }

}
