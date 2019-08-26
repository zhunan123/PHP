<?php
  $value = array (true, false, null, 'abc', 33, '33', 22.4, '22.4', '', '0', 0);
    foreach($value as $value) {
        if(is_string($value)) {
          echo "{$value} is string <br>";
        }
    }

    $string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam recusandae enim aspernatur non modi neque natus quisquam expedita laudantium optio aliquid temporibus nulla fuga doloremque voluptas necessitatibus, excepturi fugiat accusantium!" ;

    $compressed = gzcompress($string);
    //echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;

?>
