<?php

    $check = mail("eshalal888@gmail.com","Testing Email","This is a testing email form xamp server","From:eshalal9693@gmail.com");

    if($check){
        echo "Email sent successfully";
    }
    else{
        echo "Email not sent successfully";
    }


?>

<!-- step 1- open xampp server
step 2- click on php.ini
step 3- ctrl+F and write smtp
step 4- in place of localhost write smtp.gmail.com
step 5- in sendemail write your email
step 6- in mail path write C:\xampp\sendmail\sendmail.exe save and close php.ini
step 7- smtp port to 587
step 8- write username as gmail  and generated password
step 9- force user give your gmail


1. Open xampp server
2. click on config button
3. click on php.ini
4. ctrl+F and write smtp
5. in place of localhost write smtp.gmail.com
6. in sendemail write your email
7. in mail path write C:\xampp\sendmail\sendmail.exe save and close php.ini
8. smtp port to 587
9. write username as gmail
10. write password as gmail password
11. save and close sendmail.ini
12. restart xampp server
13. write the code in index.php
14. run the code in browser
15. check the email


-->