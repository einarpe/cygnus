
<p>Welcome here, endeavour!</p>
<?php if ($logged): ?>

<p>Your name is <?php echo $loggedUserName; ?>. <a href="<?php echo url::base(); ?>index/logout">Logout</a>.</p>
<p>Upload your file here:</p>
<div id="uploader">
  <form id="frmUpload" action="<?php echo url::base(); ?>upload" method="post" enctype="multipart/form-data">
    <input type="file" name="cf" />
    <input type="submit" name="ok" value="Send" />
  </form>
</div>

<?php else: ?>
  <?php echo View::factory('index/login'); ?>
<?php endif; ?>