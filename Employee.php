<?php
require_once 'Database.php';

class Employee {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addEmployee($first_name, $last_name, $email, $position, $hours_worked) {
        $first_name = htmlspecialchars($first_name);
        $last_name = htmlspecialchars($last_name);
        $email = htmlspecialchars($email);
        $position = htmlspecialchars($position);
        $hours_worked = intval($hours_worked);

        $sql = "INSERT INTO employees (first_name, last_name, email, position, hours_worked) VALUES ('$first_name', '$last_name', '$email', '$position', $hours_worked)";
        return $this->db->conn->query($sql);
    }

    public function getEmployees() {
        $sql = "SELECT first_name, last_name, email, position, hours_worked FROM employees";
        $result = $this->db->conn->query($sql);

        $employees = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }
        }

        return $employees;
    }
}
?>
