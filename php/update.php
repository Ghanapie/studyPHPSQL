<?php require('lib/print.php'); ?>
<?php require('view/top.php'); ?>
      <a href="create.php">create</a>
      <?php if(isset($_GET['id'])){ ?>
        <a href="update.php?id=<?= $_GET['id']?>">update</a>
      <?php }?>

    <h2>
      <?php print_title(); ?>
    </h2>
    <h2>
      <?php print_description(); ?>
    </h2>

    <form class="" action="update_process.php" method="post">
      <input type="hidden" name="old_title" value="<?= $_GET['id']?>">
      <p>
        <input type="text" name="title" placeholder="Tile" value=<?php print_title(); ?>>
      </p>
      <p>
        <textarea name="description"
        placeholder="Description"><?php print_description(); ?></textarea>
      </p>
      <p>
        <input type="submit" value="subimt">
      </p>
    </form>
<?php require('view/bottom.php'); ?>
