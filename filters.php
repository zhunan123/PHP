<?php
  //check if there is data exist
/*
  if(filter_has_var(INPUT_POST,'data')) {
    echo ('Data Founded');
  }else {
    echo ('NO data founded');
  }
*/
/*
  if(filter_has_var(INPUT_POST, 'data')) {
      $email = $_POST['data'];
        //filter out illegal characters
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      echo $email.'<br>';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo ('Email address is validate...');
    } else {
      echo ('Please enter a validated email address...');
    }
  }
*/


/*
  $var = '';
  if(filter_var($var, FILTER_VALIDATE_INT)) {
    echo $var.'is a number';
  }else {
    echo $var.'is not a number';
  }
*/

/*
$filters = array(
  //only validate email and number between 1--100 will go through
    "data1" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
    )
  )
);
print_r(filter_input_array(INPUT_POST, $filters));
*/

$arr = array(
  "name" => "zhunan",
  "age" => "220",
  "email" => "zhunan@bu.edu"
);

$filters = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
          "min_range" => 1,
          "max_range" => 120
        )
    ),
      "email" => FILTER_VALIDATE_EMAIL
  );

  print_r(filter_var_array($arr, $filters));

?>

<form method="post"action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data1">
  <input type="text" name="data2">
  <button type="submit">Submit</button> 
</form>
