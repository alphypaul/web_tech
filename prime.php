<?php
$num=$_GET['num'];
$flag=0;
if($num==0||$num==1)
$flag=1;
for($i = 2;$i <= $num/2; $i++)
          	{
	if($num%$i==0)
	{
		$flag=1;
		break;
	}
}
if($flag==0)
echo $num. "is a prime number";
else
echo $num. "is a prime number";      	
?>
