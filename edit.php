<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<?php $id = $_GET["id"];
require_once("Sql_Connect.php");
$rows = $db->prepare("SELECT * FROM users WHERE id=:id");
$rows->execute(array("id" => $id));
$rows = $rows->fetch(PDO::FETCH_ASSOC);
?>

<div class="container d-flex justify-content-center">
    <div class="form__blok pt-5 col-md-6">
        <form method="get" action="update.php">
            <div class="form-group pt-2">
                <label>Name</label>
                <input type="text" value="<?php echo $rows["name"] ?>" class="form-control" name="name" placeholder="name ...">
            </div>

            <div class="form-group pt-2">
                <label>Surname</label>
                <input type="text" value="<?php echo $rows["surname"] ?>" class="form-control" name="surname" placeholder="surname ...">
            </div>

            <div class="form-group pt-2">
                <label>Email</label>
                <input type="text" value="<?php echo $rows["email"] ?>" class="form-control" name="email" placeholder="email ...">
            </div>

            <div class="form-group pt-2">
                <label>Phone</label>
                <input type="number" value="<?php echo $rows["phone"] ?>" class="form-control" name="phone" placeholder="phone ...">
            </div>

            <div class="form-group pt-2">
                <label hidden >ID</label>
                <input hidden type="number" value="<?php echo $rows["id"] ?>" class="form-control" name="id" placeholder="id ...">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            <a class="btn btn-danger mt-2" href="List.php" role="button">Cancel</a>
        </form>
    </div>
</div>
</body>
</html>