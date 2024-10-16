<!DOCTYPE html>
<html>
<head>
    <title>Medicine Symposium Registration Form</title>
    <style>
        body {
            background-color: #33ffec;
            font-family: Arial, sans-serif;
            
        }
        form {
            width: 50%;
            margin: 40px auto;
            padding: 20px;
            
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color:#019593;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        h2 {
        text-align: center;
    }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #33ffec;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <form action="process.php" method="post">
        <h2>Medicine Symposium Registration Form</h2>
        <label for="title">Title:</label>
        <select id="title" name="title">
            <option value="">Select title</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
            <!-- <option value="Dr.">Dr.</option>
            <option value="Prof.">Prof.</option> -->
        </select>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="institution">Institution:</label>
        <input type="text" id="institution" name="institution" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="note">Note to the Organiser:</label>
        <textarea id="note" name="note" rows="5" cols="30"></textarea>

        <input text-color:black type="submit" value="Register">
    </form>
</body>
</html>