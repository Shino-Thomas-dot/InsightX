<?php
$servername = "localhost";
$username = "root";  // Your MySQL username (default: root for XAMPP)
$password = "";  // Your MySQL password (default: empty for XAMPP)
$dbname = "testing";  // Your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $schedule_call = $_POST['schedule_call'];
    $requirements = $_POST['requirements'];

    // Handle file upload
    $csvFile = $_FILES['csvFile'];
    $fileName = basename($csvFile['name']);
    $targetDirectory = "csv_uploads/";          // Directory to store uploaded CSV files
    $targetFilePath = $targetDirectory . $fileName;

    // Move the uploaded CSV file to the "uploads" folder
    if (move_uploaded_file($csvFile['tmp_name'], $targetFilePath)) {
        // Prepare the SQL query to insert form data into the database
        $sql = "INSERT INTO insightx_form (name, email, phone_no, schedule_call, requirements)
                VALUES ('$name', '$email', '$phone', '$schedule_call', '$requirements')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            header("Location: success.php"); // Redirect to success page
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "There was an error uploading your file.";
    }
} else {
    echo "No form data submitted.";
}

// Close the connection
$conn->close();
?>

</body>
</html>