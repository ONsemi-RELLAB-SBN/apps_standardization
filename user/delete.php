<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Delete Record Confirmation</title>
        <link rel="stylesheet" href="../css/skeleton.css"/>
    </head>
    <body>
        <?php
        // Check if a record ID is provided
        include "db_conn.php";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Retrieve the record from the database
            $query = "SELECT * FROM gest_user WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            // Display the record details and confirmation form
            if ($row) {
                echo '<h4 style="border-left: none">Are you sure you want to delete this record?</h4>';
                echo '<p>Name: ' . $row['name'] . '</p>';
                echo '<p>Email: ' . $row['email'] . '</p>';
                echo '<form method="post" action="delete.php?id='.$id.'">';
                echo '<input type="hidden" name="id" value="' . $id . '">';
                echo '<input type="submit" name="confirm" value="Yes">';
                echo '<input type="submit" name="cancel" value="No">';
                echo '</form>';
            } else {
                echo 'Record not found.';
            }
        } else {
            echo 'Invalid record ID.';
        }

        // Handle the delete operation
        if (isset($_POST['confirm'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM `gest_user` WHERE id = $id";
            echo 'apa le benda nya ko nk uat ni ::: ' . $sql;
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: index.php?msg=Data deleted successfully");
            } else {
                echo "Failed: " . mysqli_error($conn);
            }
        } else if (isset($_POST['cancel'])) {
            header("Location: index.php?msg=Operation Cancelled");
        }
        ?>
    </body>
</html>