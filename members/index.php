<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkbyte1024 Employee</title>
    <link rel="stylesheet" href="include/bootstrap-4.5.3-dist/css/bootstrap.css">
</head>
<body>
    <h1>Thinkbyte1024 Employee Database</h1>
    <?php 
        include '../include/php/connection.php';
    ?>
    <table class="table table-striped table-dark table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Joined</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM members";
                $result = $conn->query($query);
        
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>" ."<td>" . $row['name'] . "</td><td>" . $row['role'] . "</td><td>" .$row['joined'] . "</td><td>" . "$" . $row['salary'] . "</td></tr>";
                    }
                } else {
                    echo "No results";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>