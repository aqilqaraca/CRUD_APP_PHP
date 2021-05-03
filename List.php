<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD - Pod Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
require_once("Sql_Connect.php");
$rows = $db -> query("SELECT * FROM users",PDO::FETCH_ASSOC);
?>
<div class="container">
    <a class="btn btn-primary mt-4 mb-4" href="add_user.html" role="button">Add User Link</a>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Edit/Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <th scope="row"><?php echo $row["id"] ?></th>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["surname"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"] ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row["id"] ?>">Delete</a></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div>


</body>
</html>