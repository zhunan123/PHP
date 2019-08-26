<?php
  $loggedIn = false;
  $arr = [1,2,3,4,5,6];
  //if true or false
  //echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';


//$isRegistered = ($loggedIn == true) ? 'you are registered' : 'You ain't no registered';
//echo ($isRegistered);



?>


<div>
<?php if($loggedIn): ?>
    <h1>welcome User</h1>
<?php else: ?>
    <h1>welcome Guest</h1>
<?php endif; ?>
</div>


<div>
    <?php foreach($arr as $hom):  ?>
      <?php echo $hom; ?>
<?php endforeach; ?>
</div>
