<?php
$hostname = "localhost";  // Change to your MySQL host
$username = "your_username";  // Change to your MySQL username
$password = "your_password";  // Change to your MySQL password
$database = "employee_portal";  // Change to your database name

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $employee_id = $row["employee_id"];
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $age = $row["age"]; // Include age
        $salary = $row["salary"]; // Include salary
        $hours_worked = $row["hours_worked"];
        
        echo "<li>Employee $employee_id: $first_name $last_name (Age: $age, Salary: $salary, Hours Worked: $hours_worked)</li>";
    }
    echo "</ul>";
} else {
    echo "No employee records found.";
}

$conn->close();
?>
