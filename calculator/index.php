<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">

<title>Calculator</title>
</head>
<body>
<?php
//var_export($_POST);
//echo "<br>";
$buttons=[1,2,3,'+',4,5,6,'-',7,8,9,'*','C',0,'.','/','='];
$pressed='';
if(isset($_POST['pressed']) && in_array($_POST['pressed'],$buttons)){
    $pressed=$_POST['pressed'];
}
$stored='';
if(isset($_POST['stored']) && preg_match('~^(?:[\d.]+[*/+-]?)+$~',$_POST['stored'],$out)){
    $stored=$out[0];    
}
$display=$stored.$pressed;
//echo "$pressed & $stored & $display<br>";
if($pressed=='C'){
    $display='';
}elseif($pressed=='=' && preg_match('~^\d*\.?\d+(?:[*/+-]\d*\.?\d+)*$~',$stored)){
    $display.= eval("return $stored;");
}

echo "<form action=\"\" method=\"POST\">";
    echo "<table style=\"width:300px;border:solid thick black;\">";
        echo "<tr>";
            echo "<td colspan=\"4\"> Ans $display</td>";
        echo "</tr>";
        foreach(array_chunk($buttons,4) as $chunk){
            echo "<tr>";
                foreach($chunk as $button){
                    echo "<td",(sizeof($chunk)!=4?" colspan=\"4\"":""),"><button name=\"pressed\" value=\"$button\">$button</button></td>";
                }
            echo "</tr>";
        }
    echo "</table>";
    echo "<input type=\"hidden\" name=\"stored\" value=\"$display\">";
echo "</form>";
?>
</body>
</html>
