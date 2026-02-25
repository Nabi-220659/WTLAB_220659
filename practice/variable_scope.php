<?php
$x = 10;   // global

function test() {
    global $x;
    echo "Value inside function:".$x;
}

test();
echo "<br>Value outside function: $x";
?>
<?php
function counter() {
    static $count = 0;
    $count++;
    echo "<br>";
    echo $count . "<br>";
}

counter();
counter();
counter();
?>