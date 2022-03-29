<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


?>

<div class="row">
    <div class="col-md-4">
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <div>
        <?= Html::submitButton('Войти', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
    </div>
</div>
