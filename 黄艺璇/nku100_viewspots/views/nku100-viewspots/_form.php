<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nku100Viewspots */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nku100-viewspots-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NKU100_viewspots_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NKU100_viewspots_content')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
