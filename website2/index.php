<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>System Info</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
      <h1>Server & File info</h1>
      <!--if there is a server-->
      <?php if($server): ?>
        <ul class="list-group">
            <?php foreach($server as $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?> 
                </li>
            <?php endforeach; ?>
        </ul>
      <?php endif; ?>
  </div>
  
</body>
</html>
