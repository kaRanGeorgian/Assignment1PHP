<?php

$conn = mysqli_connect("localhost", "username", "password", "database_name");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST["content"]; // Get content from form

    // Insert data into the database
    $sql = "INSERT INTO your_table_name (content_column) VALUES ('$content')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
