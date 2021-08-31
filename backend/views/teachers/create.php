<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Teachers */

$this->title = 'Create Teachers';
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
