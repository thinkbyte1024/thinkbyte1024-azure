<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://thinkbyte1024.azurewebsites.net/">Thinkbyte1024</a>
    </nav>
    <!-- End Navbar -->
    
    <div class="container-fluid">
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

            <input class="form-control" type="date">

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" id="salary">
            </div>

            <button type="submit" class="btn btn-primary">Add member</button>
        </form>
    </div>
</body>
</html>