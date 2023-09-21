<?php
include ("../admin/databash/dbConnect.php");
// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate input
    // Add any additional validation rules as per your requirements
    if (empty($username) || empty($password)) {
        // echo "Please enter both username and password.";
        echo '<script type="text/javascript">';
        // echo 'alert("Please enter both username and password.");';
        echo 'window.location.href = "../admin/login_form.php"';
        echo '</script>';
    } else {
        // SQL query to check if the provided username and password exist in the database
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login successful
            echo '<script type="text/javascript">';
            echo 'window.location.href = "../admin/Dashboard.php"';
            echo '</script>';
        } else {
            // Login failed
            echo '<script type="text/javascript">';
            echo 'window.location.href = "../admin/login_form.php"';
                        // echo 'alert("Invalid username or password");';
            echo '</script>';
        }
    }
}

// Close database connection
$conn->close();
?>