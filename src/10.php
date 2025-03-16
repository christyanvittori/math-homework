  <?php
    $math_homework = array(
      "2 + 2",
      "5 - 3",
      "10 / 2"
    );
  
    $random_index = rand(0, count($math_homework) - 1);
  
    echo $math_homework[$random_index];
  ?>