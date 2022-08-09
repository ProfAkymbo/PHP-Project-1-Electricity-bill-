<?php
echo '<p>Hello Customer,</p>';

$unit = 50;

$bill = 251;

if($bill <= $unit){
    echo "you are to pay NGN 3.50/unit!";
    
} elseif($bill <= $unit + 100){
    echo "you are to pay NGN 4.00/unit!";
    
} elseif($bill <= $unit + 200){
    echo "you are to pay NGN 5.20/unit!";
    
    
} else{
    echo "you are to pay NGN 6.5/unit!";
}

	
?>



 



<html>
  <head>
    <title>PHP Project 1</title>
  </head>
  <body>
   
  </body>
</html>