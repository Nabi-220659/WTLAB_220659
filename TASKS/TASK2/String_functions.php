<?php

echo "<h2>STRING FUNCTIONS</h2>";

$college = "Straw Hats University";

echo "<h3>Hardcoded String</h3>";
echo "Original String: " . $college;    echo "<br>";
echo "Length of string: " . strlen($college);   echo "<br>";
echo "Word count: " . str_word_count($college); echo "<br>";
echo "Reverse string: " . strrev($college); echo "<br>";
echo "Uppercase conversion: " . strtoupper($college);   echo "<br>";
echo "Lowercase conversion: " . strtolower($college);   echo "<br>";
echo "Uppercase first letter: " . ucfirst($college);    echo "<br>";
echo "Uppercase each word: " . ucwords($college);   echo "<br>";
echo "Position of 'S': " . strpos($college, "S");   echo "<br>";
echo "Replaced string: " . str_replace("University", "College", $college);  echo "<br>";
echo "Substring extraction: " . substr($college, 6, 4);    echo "<br>";
echo "Trimmed string: " . trim($college);   echo "<br>";
echo "Left trimmed string: " . ltrim($college);    echo "<br>";
echo "Right trimmed string: " . rtrim($college);    echo "<br>";
echo "Case-sensitive comparison: " . strcmp($college, "Straw Hats University");    echo "<br>";
echo "Case-insensitive comparison: " . strcasecmp($college, "straw hats university");   echo "<br>";
echo "HTML special characters: " . htmlspecialchars("<b>$college</b>"); echo "<br>";
echo "Added slashes: " . addslashes("Straw Hats' University");  echo "<br>";

?>