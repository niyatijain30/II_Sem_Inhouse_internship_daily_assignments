<?php
session_start();
include("dashboardheader.php");
?>

<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width:500px;">

        <h2 class="text-success text-center">
            🎉 Password Updated Successfully!
        </h2>

        <p class="text-center mt-3">
            Your password has been changed successfully.
        </p>

        <div class="text-center mt-4">
            <a href="dashboard.php" class="btn btn-primary">
                Go to Dashboard
            </a>
        </div>

    </div>

</div>

<?php
include("footer.php");
?>