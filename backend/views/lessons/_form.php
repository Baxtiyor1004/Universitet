<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Lessons */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lessons-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weekday')->dropDownList(
        [
            'Dushanba' => 'Dushanba', 'Seshanba' => 'Seshanba',
            'Chorshanba' => 'Chorshanba', 'Payshanba' => 'Payshanba',
            'Juma' => 'Juma', 'Shanba' => 'Shanba'
        ],
        ['prompt' => 'Hafta kunini tanlang']
    ) ?>

    <?= $form->field($model, 'start_time')->widget(\janisto\timepicker\TimePicker::className(), [
        //'language' => 'ru',
        //'mode' => 'datetime',
        'mode' => 'time',
        'clientOptions' => [
            'dateFormat' => 'yy-mm-dd',
            'timeFormat' => 'HH:mm:ss',
            'showSecond' => false,
        ]
    ]); ?>

    <?= $form->field($model, 'end_time')->widget(\janisto\timepicker\TimePicker::className(), [
        //'language' => 'fi',
        'mode' => 'time',
        'clientOptions' => [
            'dateFormat' => 'yy-mm-dd',
            'timeFormat' => 'HH:mm:ss',
            'showSecond' => false,
        ]
    ]);  ?>


    <?= $form->field($model, 'teacher_id')->dropdownList($model::getTeachers(), ['prompt' => "Teacher ni tanlang"]); ?>

    <?= $form->field($model, 'class_id')->dropdownList(ArrayHelper::map(\common\models\Classes::find()->all(), 'id', 'name'), ['prompt' => "Class ni tanlang"]); ?>

    <?= $form->field($model, 'group_id')->dropdownList(ArrayHelper::map(\common\models\Groups::find()->all(), 'id', 'name'), ['prompt' => "Guruh ni tanlang"]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>