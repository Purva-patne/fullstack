<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // 1st 
    $input = "121084";
    $part1 = substr($input, 0, 2);
    $part2 = substr($input, 2, 2);
    $part3 = substr($input, 4, 2);
    $output = $part1 . ":" . $part2 . ":" . $part3;
    echo "Output string: " . $output;
    echo "<br>";
    //2
    $email = "iitk@gmail.com";// Use explode to split at '@'
    $parts = explode("@", $email);// Username is the first part
    $username = $parts[0];
    echo "Expected Output: '" . $username . "'";
    echo "<br>";
    //question 3
    $string = "HelloWorld";
    $lastThree = substr($string, -3);
    echo "Last three characters:<Br> " . $lastThree;
    //question 4
    function generatePassword($inputString, $length) {
    $shuffled = str_shuffle($inputString);
    while (strlen($shuffled) < $length) {
        $shuffled .= str_shuffle($inputString);
    }
    // Return a substring of the desired length
    return substr($shuffled, 0, $length);
    }
    // Example usage
    $input = "abcdef123456XYZ";
    $length = rand(6, 10);
    $password = generatePassword($input, $length);
    echo "Generated Password: " . $password;
    echo "<br>";
    //5
    $string1="football";
    $string2="footware";
    $mini=min(strlen($string1),strlen($string2));
    $int=0;
    for($i=0;$i<$mini;$i++)
    {
        if($string1[$i]!==$string2[$i])
        {
            $index=$i;
            break;
        }
    }
    if($index!==-1)
    {
        echo "First different character at position $index: '$string1[$index]' vs '$string2[$index]'";
    }
    else{
        echo "Strings are identical up to length " . $mini;
    }
    echo "<br>";
    //question 6
    $original = "HelloWorld";
    $insert = "Beautiful";
    $position = 5; // 
    $result = substr($original, 0, $position) . $insert . substr($original, $position);
    echo "Result: " . $result;
    echo "<br>";
    //question 7
    $string = "000123450";
    $result = ltrim($string, '0');
    echo "Original string: $string<br>";
    echo "After removing leading zeros: $result";
    echo "<br>";
    //8
    $string="max will spiderman nancy hopper batman";
    $word=explode(" ",$string);
    $array=array_slice($word,0,5);
    $result=implode(" ",$array);
    echo $result;
    echo "<br>";
    //9
    $string="12,13,15,16,17,5,36,4";
    $result_string=str_replace(","," ",$string);
    echo $result_string;
    echo "<br>";
    //10
    $string="mom";
    $reversed = strrev($string);
    if($string==$reversed)
    {
        echo " palindrome ";
    }
    else{
        echo " non palindrome ";
    }
    // 11
    //a
     $string="Hey there I AM purva !!!!!!!! ";
     $result_string=strtolower($string);
     echo "<br>";
     echo $result_string;
     // b
     $string="Hey THERE I AM purva !!!!!!!! ";
     $result_string=strtoupper($string);
     echo "<br>";
     echo $result_string;
     // c
     $string="Hey there I am purva !!!!!!!! ";
     $result_string=ucfirst($string);
     echo "<br>";
     echo $result_string;
     // d
     $string="Hey there I am purva !!!!!!!! ";
     $result_string=ucwords($string);
     echo "<br>";
     echo $result_string;
    ?>
</body>
</html>