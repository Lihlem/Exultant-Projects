<?php

// controllers/AnnualReturnsController.php

require_once '../models/AnnualReturnsModel.php';

class AnnualReturnsController {
    /**
     * Handles the display of the annual returns dashboard.
     *
     * Fetches annual returns data from the model and passes it to the view.
     */
    public function index() {
        // Create an instance of the AnnualReturnsModel
        $annualReturnsModel = new AnnualReturnsModel();

        // Fetch the annual returns data
        $data = $annualReturnsModel->getAnnualReturns();

        // Load the view and pass the data to it
        // The $data variable will be accessible in the view
        require_once '../views/annual_returns_dashboard.php';
    }
}

// Example of how this might be called (e.g., in a router or index.php)
// $controller = new AnnualReturnsController();
// $controller->index();

?>
