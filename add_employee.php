<?php
require_once 'Employee.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee = new Employee();

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $hours_worked = $_POST['hours_worked'];

    if ($employee->addEmployee($first_name, $last_name, $email, $position, $hours_worked)) {
        echo "New employee added successfully";
    } else {
        echo "Error adding employee";
    }

    header("Location: view_employees.php");
    exit();
}
?>
