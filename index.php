<?php
session_start();
if (isset($_SESSION['student'])) {
    header("Location: student.php");
    exit();
} elseif (isset($_SESSION['advisor'])) {
    header("Location: advisor.php");
    exit();
} elseif (isset($_SESSION['staff'])) {
    header("Location: staff.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Main Page</title>
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
   
    <body>
        <?php 
            include("templates/header.php");
        ?>

		<div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-8  text-center text-lg-start border-bottom">
                    <h2 class="display-6 fw-bold lh-1 mb-3" style="color: #2B59A2;">UWindsor Hostel Management System</h2>
                    <p class="col-lg-11 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet malesuada dui, vel congue metus malesuada ac. Suspendisse elementum tempor dui, at tempor quam semper et. Nullam congue congue risus, a pulvinar purus laoreet non. Nulla pharetra commodo mauris eu efficitur. Ut id velit consequat ipsum suscipit rhoncus non vitae nulla. Donec quis nisl risus. Fusce vel sollicitudin augue. Suspendisse ac diam dictum, facilisis orci sit amet, vestibulum risus. Quisque pulvinar neque vitae justo molestie, in pulvinar urna bibendum. Integer finibus ornare vehicula. Quisque pulvinar rhoncus elit, ac viverra quam.</p>
                </div>
                <div class="col-md-4 col-md-pull-4 mx-auto">
                    <img src="empty_img.svg" class="img-fluid rounded" alt="Icon of an empty image">
                </div>
            </div>
        </div>

    </body>

</html>