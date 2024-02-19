<?php

if (isset($_POST['dob']) && !empty($_POST['dob'])) {
   
    $dob = $_POST['dob'];
    
   
    $date_parts = explode('/', $dob);
    if (count($date_parts) == 3 && checkdate($date_parts[1], $date_parts[0], $date_parts[2])) {
        
        $today = new DateTime();
        $birthdate = DateTime::createFromFormat('d/m/Y', $dob);
        $age = $birthdate->diff($today)->y;
        
       
        echo "<p>Your age is: $age years old</p>";
    } else {
        echo "<p>Please enter a valid date of birth.</p>";
    }
} else {
    
    echo "<p>Please enter your date of birth.</p>";
}
?>
