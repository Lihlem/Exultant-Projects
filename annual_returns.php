<?php
date_default_timezone_set('Africa/Johannesburg');

// It's good practice to ensure files are included only once.
// The controller already includes the model and the view.
require_once "extensions/vendor/autoload.php"; // Assuming this is necessary for the overall environment or potential future use in the controller/model
require_once "controllers/AnnualReturnsController.php";

// Instantiate the controller and display the dashboard
$annualReturnsController = new AnnualReturnsController();
$annualReturnsController->index();
?>
