<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $oncid = $_POST['oncid'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $site = $_POST['site'];
    $sql = "UPDATE gset_user SET `oncid`='$oncid',`username`='$username', `name` = '$name',`email`='$email',`title`='$title', `site`='$site' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Data updated successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>GEST USER</title>
    </head>

    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
            User Access List
        </nav>
        <div class="container">
            <div class="text-center mb-4">
                <h3>Edit User Information</h3>
                <p class="text-muted">Click update after changing any information</p>
            </div>
            <?php
            $sql = "SELECT * FROM `gest_user` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">ONCID:</label>
                            <input type="text" class="form-control" name="oncid" value="<?php echo $row['oncid'] ?>">
                        </div>
                        <div class="col">
                            <label class="form-label">Userame:</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="name" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title:</label>
                        <input type="email" class="form-control" name="title" value="<?php echo $row['title'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label>Site:</label>
                        <select id="site" name="site" style="width: 100%" required>
                            <?php echo getDataList('002', $row['site']); ?>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

<?php 
function getDataList($code, $value) {
    include '../class/db.php';
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $data = "";
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $result = $conn->query($getData);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['name'] == $value) {
                $data .= '<option value="' . $row['name'] . '" selected>' . $row['name'] . '</option>';
            } else {
                $data .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
            }
        }
    } else {
        echo "No data found";
    }
    $conn->close();
    return $data;
}