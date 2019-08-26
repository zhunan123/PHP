<?php
//out put name on top pf screen
  if(isset($_GET['name'])){
  //echo $_GET['name'];
  //print_r($_GET);
  }

  if(isset($_POST['name'])){
  //echo $_GET['name'];
  print_r($_GET);
  $name = htmlentities($_POST['name']);
  echo $name;
  }

  if(isset($_REQUEST['name'])){
  //echo $_GET['name'];
  print_r($_REQUEST);
  $name = htmlentities($_REQUEST['name']);
  echo $name;
  }

  echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>
    <head>

    <title>My website</title>
    </head>
<body>
  <!--get-->
  <form method="GET" action="get_post.php">
      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
  </form>
  <!--post-->
  <form method="POST" action="get_post.php">
      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=zhunan">Zhunan</a>
    </li>
    <li>
      <a href="get_post.php?name=yuri">Yuri</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s Profile"?></h1>
</body>
</html>
