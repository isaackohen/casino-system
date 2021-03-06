<?php
  $error_number = 400;
?>

<?php $__env->startSection('title'); ?>
  Bad request.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
  <?php
    $default_error_message = "Please <a href='javascript:history.back()''>go back</a> or return to <a href='".url('')."'>our homepage</a>.";
  ?>
  <?php echo isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ploi/s3.davidkohen.com/resources/views/errors/400.blade.php ENDPATH**/ ?>