<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin Panel</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created at</th>
                <th>Sign Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require_once("header.php");
        require_once('database.php');
        //////////////////////// Database instance ////////////////////////////////
        $database_instance = Database::getInstance();
        $connection = $database_instance->getConnection();
        $query = $connection->query("SELECT * FROM users");
        while($row = mysqli_fetch_row($query)){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "</tr>";
        }
        ?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company Type</th>
                <th>Company Names</th>
                <th>Company Address</th>
                <th>Company Activity</th>
                <th>Capital Value</th>
                <th>Capital Share</th>
                <th>user ID</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = $connection->query("SELECT * FROM companies");
        while($row = mysqli_fetch_row($query)){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[7]."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>shareholder name</th>
                <th>shareholder Nationality</th>
                <th>shareholder Percentage</th>
                <th>Personal ID</th>
                <th>Company ID</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = $connection->query("SELECT * FROM shareholders");
        while($row = mysqli_fetch_row($query)){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
        <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Manager name</th>
                <th>Manager Nationality</th>
                <th>Personal ID</th>
                <th>perm1</th>
                <th>perm2</th>
                <th>perm3</th>
                <th>Manger Type</th>
                <th>Company ID</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = $connection->query("SELECT * FROM managers");
        while($row = mysqli_fetch_row($query)){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td>".$row[6]."</td>";
            echo "<td>".$row[7]."</td>";
            echo "<td>".$row[8]."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>