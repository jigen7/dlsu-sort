<html>
<H1>Bubble Sort</H1>
<body>
<form name="form1" action="" method="post">
<input type="text" name="inputs" value="<?php echo $_POST['inputs'];?>">
<input type="radio" name="radio" value="asc" checked>Ascending
<input type="submit" value="Sort">
</form>

<?php
/*
Paolo Marco Manarang
Bubble Sort Ascending
*/
if($_POST['inputs']) {



$arr = explode(' ',$_POST['inputs']);
$array_size = count($arr);

if($_POST['radio'] == "asc") {
for($x = 0; $x < $array_size; $x++) {
  for($y = 0; $y < $array_size; $y++) {
    if($arr[$x] < $arr[$y]) {
      $hold = $arr[$x];
      $arr[$x] = $arr[$y];
      $arr[$y] = $hold;
    }
      foreach($arr as $arritems){
      echo  $arritems . " "; 
      }
     echo "<br>";
  }echo "<br>";
}
} //end if asc
else {
for($x = 0; $x < $array_size; $x++) {
  for($y = 0; $y < $array_size; $y++) {
    if($arr[$x] > $arr[$y]) {
      $hold = $arr[$x];
      $arr[$x] = $arr[$y];
      $arr[$y] = $hold;
      }
      foreach($arr as $arritems){
      echo  $arritems . " "; 
      }
     echo "<br>";
  }  echo "<br>";
}


}

for($x = 0; $x < $array_size; $x++)
  print $arr[$x] . "<br>";

}
?>
</body>
</html>