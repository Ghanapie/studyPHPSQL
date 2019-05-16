<?php require('lib/print.php'); ?>
<?php require('view/top.php'); ?>
      <a href="create.php">create</a>
      <form class="" action="create_process.php" method="post">
        <p>
          <input type="text" name="title" placeholder="Tile">
        </p>
        <p>
          <textarea name="description"
          placeholder="Description"></textarea>
        </p>
        <p>
          <input type="submit" value="subimt">
        </p>
      </form>
<?php require('view/bottom.php'); ?>
