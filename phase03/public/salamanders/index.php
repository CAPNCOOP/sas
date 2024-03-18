<!-- require initialize.php -->
<?php require_once('../../private/initialize.php'); ?>
<?php require_once('../../private/query_functions.php'); ?>

<?php
      $salamander_set = find_all_salamanders();
?>

<?php  $pageTitle = 'Southern Appalachia Salamanders'; 
 include('../../private/shared/salamander-header.php'); ?>

<h1>Salamanders</h1>

  <a href="<?php echo urlFor('/salamanders/new.php')?>">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <!-- <td>Display the salamander id</td> -->
    	    <!-- <td>Display the salamander name</td> -->
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><?php echo h($salamander['id']); ?></td>

          <td><?php echo h($salamander['name']); ?></td>

          <td><a href="<?php echo h(urlFor('salamanders/edit.php?id=' . u($salamander['id']))); ?>">Edit</a></td>

          <td><a href="<?php echo h(urlFor('salamanders/show.php?id=' . u($salamander['id']))); ?>">View</a></td>
          
          <td><a href="<?php echo h(urlFor('salamanders/delete.php?id=' . u($salamander['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php mysqli_free_result($salamander_set); ?>

    <?php include('../../private/shared/salamander-footer.php'); ?>

