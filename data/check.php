<?php
foreach ($_GET as $key => $value) {
  if(!(($_GET['module1'] == 0) && ($_GET['module2'] == 0) && ($_GET['module3'] == 0)))
  {
    if($_GET[$key] == 1)
    {
      include './templates/text.php';
    }
    else if ($_GET[$key] == 2)
    {
      include './templates/video.php';
    }
    else if ($_GET[$key] == 3)
    {
      include './templates/image.php';
    }
  }
}
?>

