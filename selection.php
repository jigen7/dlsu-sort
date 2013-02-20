<html>
<H1>Selection Sort</H1>
<body>
<form name="form1" action="" method="post">
<input type="text" name="inputs" value="<?php echo $_POST['inputs'];?>">
<input type="radio" name="radio" value="asc" checked>Ascending
<input type="submit" value="Sort">
</form>

<?php
/*
Paolo Marco Manarang
Selection Sort Ascending
*/

function selection_sort_asc($arr) {
   $n = count($arr);
   for($i = 0; $i < count($arr); $i++) {
      $min = $i;
      for($j = $i + 1; $j < $n; $j++)
      //change here
         if($arr[$j] < $arr[$min])
            $min = $j;
      $tmp = $arr[$min];
      $arr[$min] = $arr[$i];
      $arr[$i] = $tmp;
      
	foreach($arr as $arritems){
      echo  $arritems . " "; 
      }
     echo "<br>";
   }
   return $arr;
}

function selection_sort_desc(&$arr) {
   $n = count($arr);
   for($i = 0; $i < count($arr); $i++) {
      $min = $i;
      for($j = $i + 1; $j < $n; $j++){
      //change here
         if($arr[$j] > $arr[$min])
            $min = $j;
      $tmp = $arr[$min];
      $arr[$min] = $arr[$i];
      $arr[$i] = $tmp;
      
	foreach($arr as $arritems){
	echo $arritems.' ';
	} echo "<br>";
	}	echo "<br>";
   }
   return $arr;
}

if($_POST['inputs']) {

$arr2 = explode(' ',$_POST['inputs']);

if($_POST['radio'] == "asc") {
$arr3 = selection_sort_asc($arr2);
}else {
$arr3 = selection_sort_desc($arr2);
}

foreach ($arr3 as $x){
echo $x."<br>";
}
}/**end of if post*/
?>



</body>
</html>