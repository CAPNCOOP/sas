<!-- require initialize.php -->
<?php require_once('../../private/initialize.php'); ?>

<?php  $salamanders = [
    ['id' => 1, 'salamanderName' => 'Red-Legged Salamander'],
    ['id' => 2, 'salamanderName' => 'Pigeon Mountain Salamander'],
    ['id' => 3, 'salamanderName' => 'ZigZag Salamander'],
    ['id' => 4, 'salamanderName' => 'Slimy Salamander']
  ];
?>

<?php  $page_title = 'Southern Appalachia Salamanders'; 
 include('../../private/shared/salamander-header.php'); ?>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <!-- <td>Display the salamander id</td> -->
    	    <!-- <td>Display the salamander name</td> -->
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><?php echo h($salamander['id']); ?></td>

          <td><?php echo h($salamander['salamanderName']); ?></td>

          <td><a href="<?php echo h(urlFor('salamanders/edit.php?id=' . u($salamander['id']))); ?>">Edit</a></td>

          <td><a href="<?php echo h(urlFor('salamanders/show.php?id=' . u($salamander['id']))); ?>">View</a></td>
          
          <td><a href="<?php echo h(urlFor('salamanders/delete.php?id=' . u($salamander['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php include('../../private/shared/salamander-footer.php'); ?>

