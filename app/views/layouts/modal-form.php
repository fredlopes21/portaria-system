<form action="<?= $form->action ?>" method="post">
  <?php require '_modal/header.php'; ?>
  <div class="modal-body">
    <?= view($body, ['fdata' => $fdata]) ?>
  </div>
  <?php require '_modal/form-footer.php'; ?>
</form>
