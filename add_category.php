<?php
error_reporting(0);

$msg = "";
include 'queries.php';

if (isset($_POST['upload'])) {
    $title = $_POST['name'];
    $sql = "INSERT INTO categories (title) VALUES ('$title')";
    $exec = mysqli_query($conn, $sql);
    if (!$exec) {
        $msg = mysqli_error($conn);
        // $msg = 'Failed to upload image!<br>values are not accepted.';
    } else {
        $msg = 'Category added successfully!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body style="background-color:rgb(61,77,88);">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php include "admin_sidebar.php" ?>
            <div class="col py-3">
                <form style="margin: 5% 25% 0% 25%; background-color: white; padding:1rem; border-radius:1rem;" method="POST">
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <div class="form-outline mb-4">
                        <input type="text" id="name" name="name" class="form-control" />
                        <label class="form-label" for="name">Category name</label>
                    </div>
                    <p><?php echo $msg; ?></p>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" style="margin-top:2rem;" name="upload">Add</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>