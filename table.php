<!DOCTYPE html>
<html>
<head>
    <title>php table!</title> 
    <style>
        table {
            border:solid black 1px ;
            
        }
         td{
            border:solid black 1px ;
            width:70px;
        }
        
        
        
    </style>
</head>
<body>
<?php
echo"<table>";
for($i=1; $i<=6; $i++){
    echo"<tr>";
    for($x=1; $x<=5; $x++){
        $y= $i* $x;           
            echo "<td> $i*$x ="."$y </td>";
            
           
        if($x===5){
            echo"<br>";
        }
        
    }
    echo"</tr>";
}
echo"</table>";
?>


</body>

</html>

