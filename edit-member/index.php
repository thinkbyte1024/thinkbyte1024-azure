<?php
    include '../include/php/connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM members WHERE member_id='$id'";
        $result = $conn->query($query);

        if (!$result) {
            die("Query error: " . mysqli_error($conn));
        }

        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $role = $data['role'];
        $joinDate = $data['joined'];
        $salary = (float)$data['salary'];
    } else {
        header("location: ..");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet" href="../include/bootstrap-4.5.3-dist/css/bootstrap.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://thinkbyte1024.azurewebsites.net/">Thinkbyte1024</a>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid">
        <form action="process_request.php" method="POST">
            <!-- This input will be hidden -->
            <input type="hidden" name="id" value="<?php echo $id; ?>"> 

            <div class="form-group">
                <label for="name">Member Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Example: John Doe" value="<?php echo $data['name']; ?>">
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="Administrator" <?php if ($data['role'] == "Administrator") { echo "selected"; } ?> >Administrator</option>
                    <option value="Database Operator" <?php if ($data['role'] == "Database Operator") { echo "selected"; } ?> >Database Operator</option>
                    <option value="Developer" <?php if ($data['role'] == "Developer") { echo "selected"; } ?> >Developer</option>
                    <option value="Tester" <?php if ($data['role'] == "Tester") { echo "selected"; } ?> >Tester</option>
                    <option value="UI Designer" <?php if ($data['role'] == "UI Designer") { echo "selected"; } ?> >UI Designer</option>
                </select>
            </div>

            <div class="form-group">
                <label for="joinDate">Joined on</label>
                <input class="form-control" name="joinDate" id="joinDate" type="date" value="<?php echo $joinDate; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" value="<?php echo $data['salary']; ?>">
            </div>

            <button type="submit" name="apply" class="btn btn-primary">Apply data</button>
        </form>
    </div>
</body>
</html>