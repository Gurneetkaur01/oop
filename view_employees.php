<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Employees</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Employee Portal</h1>
        <nav>
            <a href="add_employee.html">Add Employee</a>
            <a href="view_employees.php">View Employees</a>
        </nav>
    </header>
    <main>
        <h2>Employees List</h2>
        <?php
        require_once 'Employee.php';

        $employee = new Employee();
        $employees = $employee->getEmployees();

        if (count($employees) > 0) {
            echo "<table>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Position</th><th>Hours Worked</th></tr>";
            foreach ($employees as $emp) {
                echo "<tr><td>{$emp['first_name']}</td><td>{$emp['last_name']}</td><td>{$emp['email']}</td><td>{$emp['position']}</td><td>{$emp['hours_worked']}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No employees found.";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Employee Portal</p>
    </footer>
</body>
</html>
