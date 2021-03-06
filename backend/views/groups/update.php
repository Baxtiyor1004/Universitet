<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Groups */

$this->title = 'Update Groups: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="groups-update">  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
