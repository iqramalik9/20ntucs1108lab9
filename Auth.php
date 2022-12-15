<?php
$emailaddress=$_GET["emailaddress"];
echo($emailaddress);
$pass=$_GET["pass"];
$radio=$_GET["radio"];
$check=$_GET["check"];
if($emailaddress=="" || $pass=="")
{
    echo "Field can not be left black\n";
    echo "<br/>";
}
if(!empty($_GET["check"])){
    echo "True\n";
    echo "<br>";
}

if(empty($_GET["check"])){
    echo "\nFalse";
    echo "<br>";
}
if(isset($_GET["radio"])){  
    echo "Selected Radio is: ".$_GET["radio"];
}
function Food_Sorted($food,){}
$food=array("Burger","Chicken", "Fries");
if($agr="ASC")
{
    sort($food);
    $len=count($food);
    for($x=0;$x<=$len;$x++){
        echo $food[$x];
        echo "<br/>";
    }
    if($agr="DES")
{
    sort($food);
    $len=count($food);
    for($x=0;$x<=$len;$x++){
        echo $food[$x];
        echo "<br/>";
    }
}

?>



