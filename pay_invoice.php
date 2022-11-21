<?php
session_start();
require_once 'database.php';

if (isset($_SESSION['advisor'])) {
    header("Location: advisor.php");
    exit();
} elseif (isset($_SESSION['student'])) {
    header("Location: student.php");
    exit();
} elseif (!isset($_SESSION['staff'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pay Invoice Page</title>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
   
    <body>
        <!-- Header -->
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
                <!-- Logo -->
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <i class="bi bi-circle-fill dark-blue-text" style="font-size: 3rem;"></i>
                    <span class="fs-1 fw-bold dark-blue-text" style="padding-left: 0.5rem;">UWindsor HMS</span>
                </a>

                <!-- Tabs -->
                <ul class="nav nav-tabs my-auto ms-4 mb-3" >
                    <li class="nav-item" role="presentation">
                        <a class="nav-link " href="staff.php" role="tab" aria-selected="false">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="rooms.php" aria-selected="false">
                            Rooms
                        </a>
                    </li>
                </ul>  

                <!-- Logout Buttons -->
                <div class="my-auto ms-4">
                    <a class="btn btn-lg text-light dark-blue-bg" role="button" aria-expanded="false" href="logout.php">
                        Logout
                    </a>
                </div>
            </header>
        </div>

        <!-- Body -->

        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="images/pay.jpeg" class="img-fluid" alt="Apartment image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
                        <form method="POST" action="pay_invoice_check.php">
                            <h1 class="h3 mb-4 fw-normal text-center dark-blue-text">Pay Invoice - User</h1>
                            
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="<?php echo ''.$_GET["invoice_id"].''; ?>" value="<?php echo ''.$_GET["invoice_id"].''; ?>" name="invoice_id" required readonly>
                                <label for="floatingInput"> <?php echo ''.$_GET["invoice_id"].''; ?> </label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="pay_method" class="form-select" required>
                                    <option selected disabled value="">Payment Method</option>
                                    <option value="cash">Cash</option>
                                    <option value="card">Card</option>
                                    <option value="visa">Visa</option>
                                    <option value="cheque">Cheque</option>
                                </select>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" id="floatingInput" placeholder="Payment Date" name="pay_date" required>
                                <label for="floatingInput">Payment Date</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" id="floatingInput" placeholder="First Reminder Date" name="first_remind_date">
                                <label for="floatingInput">First Reminder Date</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="date" class="form-control" id="floatingInput" placeholder="Second Reminder Date" name="second_remind_date">
                                <label for="floatingInput">Second Reminder Date</label>
                            </div>
                            
                            <button class="w-100 btn btn-lg btn-primary mb-4" type="submit">Pay Invoice</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>