<?php
    // Function greet() untuk menyapa berdasarkan nama
    function greet($name) {
        echo "Hello, " . $name . "!<br>";
    }
    
    // Array berisi nama-nama students
    $students = ["Javin", "Aurel", "Nina", "David", "Lia"];
    
    // Loop melalui array dan panggil function greet() untuk setiap student
    foreach ($students as $student) {
        greet($student);
    }
    


?>