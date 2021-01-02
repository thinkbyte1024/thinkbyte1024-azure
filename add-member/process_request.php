<?php
    include '../include/php/connection.php';

    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $date = $_POST['date'];
        $salary = (float)$_POST['salary'];

        $query = "INSERT INTO members VALUES (NULL, '$name', '$role', DATE_FORMAT($date, %Y-%m-%d), $salary)";
        $result = $conn->query($query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        } else {
            $conn->close();
            header("location: ../members/ ");
        }
    }
?>