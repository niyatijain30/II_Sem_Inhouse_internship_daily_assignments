<?php
session_start();
include("dashboardheader.php");
?>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="text-center text-primary">
            Welcome to Student Management System
        </h2>

        <p class="text-center mt-3">
            This project is developed as part of the Industrial Training Program.
        </p>

        <div class="text-center mt-4">
            <a href="dashboard.php" class="btn btn-success">
                Go to Dashboard
            </a>
        </div>

    </div>

</div>

<?php
include("footer.php");
?>