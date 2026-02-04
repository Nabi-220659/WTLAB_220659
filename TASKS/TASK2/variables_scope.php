<?php
//datatypes
$integer = 25;
$str_1 = "BAUES TANDE";
$float = 34.56;
$bol = true;
$games = array("pool","Fuz ball","TT","Fencing");
var_dump($integer);echo "<br>";
var_dump($str_1);echo "<br>";
var_dump($float);echo "<br>";
var_dump($bol);echo "<br>";
var_dump($games);echo "<br>";
echo "<h2>Local Scope</h2>";

function localScopeExample() {
    $message = "This is a local variable";
    echo $message . "<br>";
}
localScopeExample();
echo "<h2>Global Scope</h2>";
$message1 = "This is a Global scope variable";

function globalScopeExample() {
    global $message1;
    echo $message1 . "<br>";
}
globalScopeExample();

echo "<h2>Static Scope variable</h2>";
function StaticScopeVariable(){
        static $grade=9;
        if($grade > 5){
            $grade++;
        }
        echo $grade."<br>";
}
StaticScopeVariable();
StaticScopeVariable();
?>





