<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Groups */

$this->title = 'Create Groups';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
