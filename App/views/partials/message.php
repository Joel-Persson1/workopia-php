<?php

use Framework\Session;
?>

<?php $success_message = Session::getFlashMessage('success_message'); ?>

<?php if ($success_message !== null) : ?>
    <div class="message bg-green-100 p-3 my-3">
        <?= $success_message ?>
    </div>

<?php endif; ?>

<?php $error_message = Session::getFlashMessage('error_message'); ?>

<?php if ($error_message !== null) : ?>
    <div class="message bg-red-100 p-3 my-3">
        <?= $error_message ?>
    </div>

<?php endif; ?>





<?php if (isset($_SESSION['flash_error_message'])) : ?>
    <div class="message bg-red-100 p-3 my-3">
        <?= $_SESSION['flash_error_message'] ?>
    </div>

    <?php unset($_SESSION['flash_error_message']) ?>
<?php endif; ?>