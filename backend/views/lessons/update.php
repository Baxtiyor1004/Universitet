<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lessons */

$this->title = 'Update Lessons: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lessons-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
