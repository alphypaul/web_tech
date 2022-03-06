<html>  
<body>  
 <form method="post">  
 Enter the String:  
   <input type="text" name="str">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
</html>  
<?php 
if($_POST)
{ 
$str = $_POST['str'];  
$length = strlen($str);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $str[$i];  
}  
}
?>  
