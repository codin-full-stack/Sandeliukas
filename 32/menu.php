<link rel="stylesheet" href="style.css">



<div class="dropdown">
  <button class="dropbtn">|||</button>
  <div class="dropdown-content">
    <?php
    require_once "functions.php";
    $json = file_get_contents(filePath('json','','menu'));
    createMenu($json);
    ?>
  </div>
</div>