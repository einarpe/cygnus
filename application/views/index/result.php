<p>Results of uploading file: </p>
<div>
  <?php if ($uploadResult): ?>
  <p class="ok">
    Everything ok!
  </p>
  <?php else: ?>
  <p class="error">
    There was an error: <?php echo $uploadError->getMessage(); ?>
  </p>
  <?php endif; ?>
</div>
<p>
  <a href="<?php echo url::base(); ?>">Go back</a>
</p>
