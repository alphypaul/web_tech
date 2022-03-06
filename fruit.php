<!DOCTYPE html>
<html>
<head>
<title>Array Operations</title>
</head>
<body>

<?php
$names=array();
$i = 0;
foreach($_GET['fruits'] as $fruit)
{
 $names[$i]=$fruit;
$i++;
}
$op=$_GET['select'];

switch($op){

case 'sort':
//sort array
sort($names);
echo "<br><br><em><strong>Your FRUITS array in
SORTED ORDER is:</strong</em><br>";
foreach($names as $fruit)
echo "$fruit ";
break;

case 'rsort':
//reverse sort
rsort($names);
echo "<br><br><em><strong>Your FRUITS array in REVERSE ORDER is:</strong></em> <br>";

foreach ($names as $fruit)
echo "$fruit  " ;
break;

case 'search':
$val=$_GET['key'];

if(in_array(strtolower($val),array_map('strtolower',$names))==true)

echo "item found!!";
else
echo "item not found!!";
break;
}
?>

</body>
</html>
