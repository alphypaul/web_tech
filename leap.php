<html>
<body>
<form method="post">
Enter a Year:
<input type="text" name="yr">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php 
if($_POST)
{
$year=$_POST['yr']; 
function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}     
    If (isLeap($year))  
    {  
        echo "$year : LEAP YEAR<br />\n";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />\n";  
    }  
}  
?>  
