<!-- <?php
$num=10;
if($num>5){
    echo"$num is grater than 5";
}
?> -->

<!-- <?php
$fruit = "apple";

if ($fruit == "apple") {
    echo "This is an apple.";
} elseif ($fruit == "banana") {
    echo "This is a banana.";
} elseif ($fruit == "orange") {
    echo "This is an orange.";
} elseif ($fruit == "grape") {
    echo "This is a grape.";
} else {
    echo "This is some other fruit.";
}
?> -->
<!-- 
<?php
$age=15;
echo($age<18)?'child':'adult';
?> -->

<?php
$char = 'a';

switch ($char) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "$char is a vowel.";
        break;
    default:
        echo "$char is a consonant.";
        break;
}
?>
