<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinkbyte1024 Employee</title>
    <link rel="stylesheet" href="include/bootstrap-4.5.3-dist/css/bootstrap.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://thinkbyte1024.azurewebsites.net/">Thinkbyte1024</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://thinkbyte1024.azurewebsites.net/">About us<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Members</a>
            </li>
        </div>
    </nav>
    <!-- End Navbar -->

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
                        echo "<tr>" ."<td>" . $row['name'] . "</td><td>" . $row['role'] . "</td><td>" .$row['joined'] . "</td><td>" . "$" . $row['salary'] . '</td><td> <a class="btn btn-primary" href="https://thinkbyte1024.azurewebsites.net/edit-member/?id=' . $data['member_id'] .  '" role="button">Edit</a> <a class="btn btn-primary" href="https://thinkbyte1024.azurewebsites.net/include/php/request_delete.php?id=' . $data['member_id'] . '" role="button" onclick="return confirm(\'Do you really want to erase this data?\')">Delete</a>' . "</td></tr>";
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