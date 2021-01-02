<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
</head>
<body>
    <?php 
        include 'lib/connection.php';

        $query = "SELECT * FROM members";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Name: " . $row['name'] . "<br>Role: " . $row['role'] . "<br>Joined: " .$row['joined'] . "<br>Salary: " . $row['salary'] . "<br><br>";
            }
        } else {
            echo "No results";
        }
        $conn->close();
    ?>
</body>
</html>