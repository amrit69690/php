<?php
$hostname = "localhost";  
$username = "amrit";  
$password = "singh";  
$database = "employee_portal";  

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

$first_name = $last_name = $age = $salary = $hours_worked = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = sanitizeInput($_POST["first_name"]);
    $last_name = sanitizeInput($_POST["last_name"]);
    $age = intval($_POST["age"]);
    $salary = floatval($_POST["salary"]);
    $hours_worked = floatval($_POST["hours_worked"]);

    if (empty($first_name) || empty($last_name) || $age <= 0 || $salary <= 0 || $hours_worked <= 0) {
        die("Invalid input. Please fill in all fields correctly.");
    }

    $sql = "INSERT INTO employees (first_name, last_name, age, salary, hours_worked)
            VALUES ('$first_name', '$last_name', $age, $salary, $hours_worked)";

    if ($conn->query($sql) === TRUE) {
        echo "Employee record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
