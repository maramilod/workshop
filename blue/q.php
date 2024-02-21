<?php
// Start output buffering
ob_start();

// Check if the form has been submitted
if(isset($_POST['submit'])) {

    $host = "localhost";
    $user = "atwelolc_root";
    $pass = "maram2003@";
    $db_name = "atwelolc_workshop";
    $port = "3306";
    

    // Establish the connection
    $conn = new mysqli($host, $user, $pass, $db_name, $port);

    // Set the character set to utf8 or utf8mb4
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");

    // Retrieve the form data
    $comment = $_POST['comment'];
    $interestField = $_POST['select']; // Assuming the select element has the name 'interest'

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `yes` (`Majorting`, `Comment`) VALUES (?, ?)");
    $stmt->bind_param("ss", $interestField, $comment);

    if ($stmt->execute()) {
        // Perform actions with the form data such as saving to database or sending an email
        // ...

        // Redirect to a success page or show a message
        header('Location: yes.php');
        ob_end_flush(); // Flush the output buffer
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Show an error message or redirect to the form page
    echo 'Error: No form data received.';
}
?>
