<?php
    include '../include/php/connection.php';

    if (isset($_POST['apply'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $salary = $_POST['salary'];

        $query = "UPDATE members SET name = '$name', role = '$role', salary = $salary WHERE members.member_id = $id";
        $result = $conn->query($query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        } else {
            $conn->close();
            header("location: ../members/ ");
        }
    }
?>