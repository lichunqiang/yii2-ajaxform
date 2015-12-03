<?php
use light\widgets\ActiveForm;

?>


<?php $form = ActiveForm::begin([

]) ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>

<?php ActiveForm::end() ?>
