<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            color:red;
        }
        .blue{
            color:blue;
        }
        .green{
            color:green;
        }
    </style>
</head>
<body>
    <h1>Colored Text with PHP</h1>
    <?php
    echo '<p class="red"> This text is red</p>';
    echo '<p class="blue"> This text is blue</p>';
    echo '<p class="green"> This text is green</p>';
    ?>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        $a1=array("red","green");
        $a2=array("blue","yellow");
        print_r(array_merge($a1,$a2));
        ?>
    </pre>
</body>
</html>