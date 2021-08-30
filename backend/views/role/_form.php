<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Role */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actions')->checkboxList([
        "lessons/create" => 'Lesson create',  
        "lessons/update" => 'Lesson update',
        "lessons/delete" => 'Lesson delete',
        "role/create" => 'Role create',  
        "role/update" => 'Role update',
        "role/delete" => 'Role delete',  
        "classes/create" => 'Classes create',
        "classes/update" => 'Classes update',  
        "classes/delete" => 'Classes delete',
        "groups/create" => 'Groups create',  
        "groups/update" => 'Groups update',
        "groups/delete" => 'Groups delete',  
        "teachers/create" => 'Teacher create',
        "teachers/update" => 'Teacher update',  
        "teachers/delete" => 'Teacher delete']);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
