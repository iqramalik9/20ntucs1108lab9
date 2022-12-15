<?php
$emailaddress=$_GET["emailaddress"];
echo($emailaddress);
$pass=$_GET["pass"];
$radio=$_GET["radio"];
$check=$_GET["check"];
echo "<h2>Question-2_Part-1</h2>";
if($emailaddress=="" || $pass=="")
{
    echo "Field can not be left black\n";
    echo "<br/>";
}
echo "<h2>Question-2_Part-2</h2>";
if(!empty($_GET["check"])){
    echo "True\n";
    echo "<br>";
}

if(empty($_GET["check"])){
    echo "\nFalse";
    echo "<br>";
}

echo "<h2>Question-2_Part-3</h2>";
if(isset($_GET["radio"])){  
    echo "Selected Radio is: ".$_GET["radio"];
}
echo "<h2>Question-2_Part-4</h2>";
/*//$input= readline('Enter \'ASC\' if you want the string in acsending order. Enter \'DES\' if you want the string in descending order: ');
function Sortingarrayelements($names, $string){
  
  if($string=="ASC"){
    sort($names);
    foreach($names as $v ){
        echo "$v <br>";
    }
  }
 elseif($string=="DES"){
    rsort($names);
    foreach($names as $v ){
        echo "$v <br>";
    }
 }
 else{
    echo "INVALID OPTION";
 }
 
}
$input="DES";
$elements=array("Sara", "Ali","Muneeb", "Kareena");
Sortingarrayelements($elements,$input);*/
function sortingfunction($numbers, $arg){
    $arraylength=count($numbers);
    echo "<h3>Array in original sequence</h3>";
    foreach($numbers as $v )
    {
        echo "$v <br>";
    }
    echo "<h3>Array in sorted form</h3>";
    if($arg=="ASC")
    {
        for($i=0; $i<$arraylength;$i++)
        {
            for($j=$i+1; $j<$arraylength;$j++)
            {
                if($numbers[$i]>$numbers[$j])
                {
                     $swap=$numbers[$i];
                     $numbers[$i]=$numbers[$j];
                     $numbers[$j]=$swap;
                }
            }
      }
      foreach($numbers as $v )
    {
        echo "$v <br>";
    }
    }
  
    if($arg=="DES")
    {
        for($i=0; $i<$arraylength;$i++)
        {
            for($j=$i+1; $j<$arraylength;$j++)
            {
                if($numbers[$i]<$numbers[$j])
                {
                     $swap=$numbers[$i];
                     $numbers[$i]=$numbers[$j];
                     $numbers[$j]=$swap;
                }
            }
      }
      foreach($numbers as $v )
    {
        echo "$v <br>";
    }
    }
  
}
  
$elements1=array(1,4,5,3,7);
$sort_type="DES";
sortingfunction($elements1, $sort_type);

echo "<h2>Question-2_Part-5</h2>";
if(isset($_GET["radio"]))
{
    if($_GET["radio"]=="1st")
    {
        $radio1_array= new SplFixedArray(100);
        for($i=0; $i<100; $i++)
        {
            $radio1_array[$i]=rand();
        }
        $sort_type_radio="DES";
        sortingfunction($radio1_array,$sort_type_radio);
    }
}
echo "<h2>Question-2_Part-6</h2>";
if(isset($_GET["radio"]))
{
    if($_GET["radio"]=="2nd")
    {
        $radio2_array= new SplFixedArray(100);
        for($i=0; $i<100; $i++)
        {
            $radio2_array[$i]=rand();
        }
        $sort_type_radio="ASC";
        sortingfunction($radio2_array,$sort_type_radio);
    }
}
?>