<?php

namespace backend\controllers;

use common\models\Role;
use Yii;

class BaseController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $url = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
        $role_id = Yii::$app->user->identity->role_id;
        $allowed_actions = Role::findOne($role_id);
        $array_actions = explode(',', $allowed_actions['actions']);
        if ($url == 'site/index' || $url == 'site/login' || $url == 'site/logout' || $allowed_actions['code'] == 'superadmin')
            return parent::beforeAction($action);

        if (!in_array($url, $array_actions)) {

            return $this->redirect(['site/index']);
        }

        return parent::beforeAction($action);
    }
}
