<?php require_once('../../private/initialize.php'); 

// fancy if...else


// if the id is not empty assign it the value from $_GET['id']
// else $id = 1
// or use the non-coalesing operator

$id = $_GET['id'] ?? 1;

$pageTitle = 'Salamander Details';

// include the shared path to the header
include('../../private/shared/salamander-header.php');
?>

<h1>stub for Show Salamander</h1>

<!-- Use the shared path to the salamander footer. -->
<?php include('../../private/shared/salamander-footer.php'); ?>
