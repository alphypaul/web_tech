<html> 
<body> 
 <form method="post"> 
 Enter the Limit: 
   <input type="number" name="limit"> 
   <input type="submit" value="Submit"> 
  </form> 
</body> 
</html> 
<?php 
 if($_POST) 
 {  
 
  $limit = $_POST['limit']; 
 
  $n1 =0 ;
 if($n1 <= $limit)
{
 echo $n1 . "<br>";
}
 $n2 = 1;
if($n2<=$limit)
{
 echo $n2 . "<br>";
}
$n3 =$n1 + $n2;
while($n3 <= $limit)
{
echo $n3 . "<br>";
$n1 = $n2;
$n2 = $n3;
$n3 = $n1 + $n2;
}  
 } 
?> 
