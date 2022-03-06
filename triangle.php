<html>
<body>
<form method="post">
Enter a Number:
<input type="text" name="num">  
<input type="submit" value="Submit">  
</form>  
</body>  
</html>  

<?php
if($_POST)
{
$no=$_POST['num'];  
for($i=0;$i<=$no;$i++){  
for($j=$no-$i;$j>=1;$j--){  
echo $j;  
}  
echo "<br>";  
} 
} 
?>  