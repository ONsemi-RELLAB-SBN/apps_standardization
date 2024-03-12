<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include "../class/db.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sql = "UPDATE gest_config SET `name`='$name',`value`='$value' WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
//        header("Location: config_list.php?msg=Data updated successfully");
        header("Location: config_expire.php?id=1&msg=Data updated successfully");
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
        <title>CONFIG</title>
        <style>
            select {
                padding: 0.375rem 0.75rem;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
            Data Expiration Period
        </nav>
        <div class="container">
            <div class="text-center mb-4">
                <!--<h3>Edit User Information</h3>-->
                <p class="text-muted">No of days before system auto delete the draft data</p>
            </div>
            <?php
            if (isset($_GET["msg"])) {
                $msg = $_GET["msg"];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                ' . $msg . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
            $sql = "SELECT * FROM `gest_config` WHERE id = $id LIMIT 1";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="name" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                    <div class="mb-3" style="display:none">
                        <label class="form-label">Code:</label>
                        <input type="text" class="form-control" name="code" value="<?php echo $row['code'] ?>" readonly="true">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Value [Day]:</label>
                        <input type="text" class="form-control" name="value" value="<?php echo $row['value'] ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Update</button>
                        <a href="config_list.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.7.0.js"></script>
        <script type="text/javascript">
            $("input").on("keyup",function() {
                var maxLength = $(this).attr("maxlength");
                if(maxLength == $(this).val().length) {
                    alert("You can't write more than " + maxLength +" chacters")
                }
            })
        </script>
    </body>
</html>