<?php
    if (isset($_SESSION['message'])):
?>

<div class="alert alert-success alert-dismissible fade show position-absolute mt-2 top-0" role="alert">
    <strong><i class="bi bi-bell m-2"></i>ALERT</strong>

    <?=$_SESSION['message']; //MESSAGE FROM SUCCESS
    ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    unset($_SESSION['message']);
    endif;
?>