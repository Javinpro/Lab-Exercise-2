<?php
    include 'variables.php';

    $person = new Variables("Javin", "2005-12-12", "Male", 3.68, true);

    // Ambil nilai umur
    $age = $person->getAge();

    // Mengecek apakah umur lebih dari 18 atau tidak
    if ($age > 18) {
        echo $person->name . " is an Adult.<br>";
    } else {
        echo $person->name . " is a Minor.<br>";
    }

    // Tampilkan umur sebenarnya
    echo "Age: " . $age;

?>