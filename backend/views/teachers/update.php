<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Teachers */

$this->title = 'Update Teachers: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teachers-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
