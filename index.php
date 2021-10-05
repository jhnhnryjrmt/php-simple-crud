<?php
    include 'database.php';
    $pdo = Database::connect();
    $sql = 'SELECT * FROM customers ORDER BY id DESC';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3>PHP CRUD GRID</h3>
        </div>
        <div class="row">
            <p>
                <a href="create.php" class="btn btn-success">Create</a>
            </p>
            <table class="table table-striped table-boredered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach($pdo->query($sql) as $row){
                            echo '<tr>';
                            echo '<td>'. $row['name'] .'</td>';
                            echo '<td>'. $row['email'] .'</td>';
                            echo '<td>'. $row['mobile'] .'</td>';
                            echo '<td><a class="btn btn-danger" href="read.php?id='.$row['id'].'">Read</a></td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>