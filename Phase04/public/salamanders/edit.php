<?php

require_once('../../private/initialize.php');
include('../../private/shared/salamander-header.php');
$pageTitle = 'Edit Salamander';
$id = $_GET['id'];
if(is_post_request()) {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';
    update_salamander($salamander);
    redirect_to(urlFor('salamanders/show.php?id=' . $id));
}
   else {
    $salamander = find_salamander_by_id($id);
   }
?>

<form action="<?= urlFor('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label for="name">
    <p>Name:<br> <input type="text" name="name" value="<?= h($salamander['name']); ?>"></p>
  </label>

  <label for="habitat">
    <p>Habitat:<br><textarea rows="4" cols="50" name="habitat"><?= h($salamander['habitat']); ?></textarea></p>
  </label>

  <label for="description">
    <p>Description:<br><textarea rows="4" cols="50" name="description"><?= h($salamander['description']); ?></textarea></p>
  </label>

  <label for="submit">
    <p><input type="submit" value="Edit Salamander"></p>
  </label>
</form>

<?php include('../../private/shared/salamander-footer.php'); ?>

