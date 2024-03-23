<?php require_once('../../private/initialize.php');

$pageTitle = 'Create Salamander'; ?>

 <?php include('../../private/shared/salamander-header.php'); ?>

 <a href="<?php echo urlFor('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>

  <h1>Create Salamander</h1>

  <form action="<?= urlFor('salamanders/create.php'); ?>" method="post">
  <label for="name">
      <p>Name:<br> <input type="text" name="name" value=""></p>
  </label>
  <label for="habitat">
      <p>Habitat: <br>
          <textarea rows="4" cols="50" name="habitat" value=""></textarea>
      </p>
  </label>
  <label for="description">
      <p>Description:<br>
          <textarea rows="4" cols="50" name="description" value=""></textarea> 
      </p>
  </label>
  <label for="submit">
      <p><input type="submit" value="Create Salamander"></p>
  </label>
</form>
<?php include('../../private/shared/salamander-footer.php'); ?>

