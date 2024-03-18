<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(urlFor('/salamanders/index.php'));
}

$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

if(is_post_request()) {

  // Handle form values sent by new.php

  $menu_name = $_POST['menu_name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form parameters<br />";
  echo "Menu name: " . $menu_name . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
} 
else {
  // redirect_to(urlFor('/salamanders/new.php'));
}

?>

<?php $pageTitle = 'Edit Salamander'; ?>
 <?php include('../../private/shared/salamander-header.php'); ?>

 <h1>stub for Edit Salamander</h1>
<?php include('../../private/shared/salamander-footer.php'); ?>

