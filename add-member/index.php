<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>

    <link rel="stylesheet" href="../include/bootstrap-4.5.3-dist/css/bootstrap.css">

    <script>
        function openUrl() {
            window.open("https://thinkbyte1024.azurewebsites.net/members/", "_self")
        }
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://thinkbyte1024.azurewebsites.net/">Thinkbyte1024</a>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid">
        <h1>Add a member</h1>

        <form action="process_request.php" method="POST">
            <div class="form-group">
                <label for="name">Member Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Example: John Doe">
            </div>

            <div class="form-group">
                <label for="role"></label>
                <select name="role" id="role" class="form-control">
                    <option value="Administrator">Administrator</option>
                    <option value="Database Operator">Database Operator</option>
                    <option value="Developer">Developer</option>
                    <option value="Tester">Tester</option>
                    <option value="UI Designer">UI Designer</option>
                </select>
            </div>

            <div class="form-group">
                <label for="joinDate">Joined on</label>
                <input class="form-control" name="joinDate" id="joinDate" type="text" value="<?php echo date(); ?>" readonly>
                <small id="dateHint" class="form-text text-muted">Your date will automatically filled according to your current date</small>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control">
            </div>

            <button type="submit" name="add" class="btn btn-primary btn-lg btn-block">Add member</button>
            <button type="reset" class="btn btn-primary btn-lg btn-block" onclick="openUrl()">Go back</button>
        </form>
    </div>
</body>
</html>