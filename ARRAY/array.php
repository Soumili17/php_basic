<!DOCTYPE html>
<html>
<body>   
<?php
echo "<h2>indexed array</h2>";
$person=array("Soumili","Akash","Tanima");
echo "I like " . $person[0] . ", " . $person[1] . " and " . $person[2] . ".";
echo "<h2>associative array</h2>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.<br>";
echo "Ben is " . $age['Ben'] . " years old. <br>";
echo "Joe is " . $age['Joe'] . " years old.<br>";
echo "<h2>multidimensial array</h2>";
$person= array (
  array("SOUMILI",21,2002),
  array("AKASH",21,2002),
  array("BABAI",20,2003),
  array("SOANI",23,2000)
);
  
echo $person[0][0].": AGE: ".$person[0][1].", YEAR: ".$person[0][2].".<br>";
echo $person[1][0].": AGE: ".$person[1][1].", YEAR: ".$person[1][2].".<br>";
echo $person[2][0].": AGE: ".$person[2][1].", YEAR: ".$person[2][2].".<br>";
echo $person[3][0].": AGE: ".$person[3][1].", YEAR: ".$person[3][2].".<br>";
?>
</body>
</html>