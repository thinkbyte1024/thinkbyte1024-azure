<?php
    include '../include/php/connection.php';

    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $date = $_POST['joinDate'];
        $salary = (float)$_POST['salary'];

        $query = "INSERT INTO members VALUES (NULL, '$name', '$role', CAST('$date' AS DATE), $salary)";
        $result = $conn->query($query);

        if (!$result) {
            die("Query error: " . $date . mysqli_error($conn));
        } else {
            $conn->close();
            header("location: ../members/ ");
        }
    }
?>