<?php
    include 'connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM members WHERE id='$id'";
        $result = $conn->query($query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        } else {
            header("location: ../../members/ ");
        }
    }
?>