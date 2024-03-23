<?php 
  require_once('../../private/initialize.php');
  include('../../private/shared/salamander-header.php');

  if(is_post_request()) {
      $salamander = [];
      $salamander['name'] = $_POST['name'] ?? '';
      $salamander['habitat'] = $_POST['habitat'] ?? '';
      $salamander['description'] = $_POST['description'];
    
      $result = insert_salamander($salamander);
      $newID = mysqli_insert_id($db);
      redirect_to(urlFor('salamanders/show.php?id=' . $newID  ));
  }
    include('../../private/shared/salamander-footer.php'); 

