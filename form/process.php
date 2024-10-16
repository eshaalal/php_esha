<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $title = $_POST["title"];
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $institution = $_POST["institution"];
  $email = $_POST["email"];
  $note = $_POST["note"];

  // Display the submitted data
  echo "<h2>Medicine Symposium Registration Form Submission</h2>";
  echo "<p>The following data has been submitted:</p>";
  echo "<ul>";
  echo "<li><strong>Title:</strong> $title</li>";
  echo "<li><strong>First Name:</strong> $first_name</li>";
  echo "<li><strong>Last Name:</strong> $last_name</li>";
  echo "<li><strong>Institution:</strong> $institution</li>";
  echo "<li><strong>Email Address:</strong> $email</li>";
  echo "<li><strong>Note to the Organiser:</strong> $note</li>";
  echo "</ul>";

  echo "Thank You For Registering In Our Services.";

  // Display the option to go back to the form
  echo "<p><a href='javascript:history.back()'>Back to Form</a></p>";

  // You can also add additional actions here, such as:
  // - Sending an email to the organiser with the submitted data
  // - Saving the data to a database
  // - Displaying a confirmation message
}
?>