<?php

require 'dog.php';

echo "<h2>Dog Information:</h2>";

foreach ($dogs as $dog) {
    echo "Name: {$dog['Name']}, Breed: {$dog['Breed']}, Age: {$dog['Age']}, Owner: {$dog['Owner']}<br>";
}

?>

