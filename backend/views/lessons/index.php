<?php

use common\models\Teachers;
use common\models\Classes;
use common\models\Groups;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LessonsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lessons schedule';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lessons-index">

    <p>
        <?= Html::a('Create Lessons', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'weekday',
            'start_time',
            'end_time',
            'created_at',
            //'updated_at',
            // 'teacher_id',
            [
                'attribute' => 'teacher_id',
                'format' => 'html',
                'value' => function ($id) {
                    $model = Teachers::findOne($id->teacher_id);
                    return $model->surname . " " . $model->name;
                }

            ],
            // 'class_id',
            [
                'attribute' => 'class_id',
                'format' => 'html',
                'value' => function ($id) {
                    $model = Classes::findOne($id->class_id);
                    return $model->name;
                }

            ],
            //'group_id',
            [
                'attribute' => 'group_id',
                'format' => 'html',
                'value' => function ($id) {
                    $model = Groups::findOne($id->group_id);
                    return $model->name;
                }

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>