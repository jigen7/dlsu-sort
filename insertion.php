<html>
<H1>Insertion Sort</H1>
<body>
<form name="form1" action="" method="post">
<input type="text" name="inputs" value="<?php echo $_POST['inputs'];?>">
<input type="radio" name="radio" value="asc" checked>Ascending
<input type="submit" value="Sort">
</form>
<?php
/*
Paolo Marco Manarang
Insertion  Sort 
*/
function insertion_sort($arr) {
    for($j=1; $j < count($arr); $j++) {
        $tmp = $arr[$j];
        $i = $j;
        while(($i >= 0) && ($arr[$i-1] > $tmp)) {
            $arr[$i] = $arr[$i-1];
            $i--;
        }
        $arr[$i] = $tmp;
	
	foreach($arr as $arritems){
		echo  $arritems . " "; 
         }
	echo "<br>";
    }
    
    return $arr;

}

if($_POST['inputs']) {

$arr2 = explode(' ',$_POST['inputs']);

if($_POST['radio'] == "asc") {
$arr3 = insertion_sort($arr2);
}else {
$arr3 = insertion_sort($arr2);
}

foreach ($arr3 as $x){
echo $x."<br>";
}
}/**end of if post*/

?>