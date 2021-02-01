<?php
    // get the data from the url
    
    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aaron Ouyang Get Assignment</title>
    <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>

    <h1> 
        <?php
            if ($firstname == '' || $lastname == "" || $age == ""){
                echo 'You did not submit either a correct first, last or age parameter' . nl2br("\n");
            }

            elseif (is_numeric($age) == FALSE){
                echo 'You age parameter is not a number';
            }
            else {
                echo "Hello, my name is " . $firstname . " " . $lastname . nl2br("\n");
            }
        ?>        
    </h1>
    <p> 
        <?php
            if ($firstname == '' || $lastname == "" || $age == "" || is_numeric($age) == FALSE){
                echo nl2br("\n");
            }
            elseif($age < 18) {
                $age_days = $age * 365;
                
                echo "I am " . $age . " year old and I am not old enough to vote in the United States" . nl2br("\n");
                echo "I am only " . " " . $age_days . " days old" ;
            } 
            else {
                $age_days = $age * 365;
                echo "I am " . $age .  " year old and I am old enough to vote in the United States" . nl2br("\n");
                echo "I am " . " "  . $age_days . " days old" ;
            }                                            
        ?>
    </p>
            
    

</body>
</html>