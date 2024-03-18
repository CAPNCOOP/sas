<?php 
function find_all_salamanders() { global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "ORDER BY name ASC";
  $result = mysqli_query($db, $sql); return $result;
  confirm_result_set($result);
  return $result;
  }

?>
