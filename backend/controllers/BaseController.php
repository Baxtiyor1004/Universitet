<?php

namespace backend\controllers;

class BaseController extends \yii\web\Controller
{
    public function Beforeaction($action)
    {
        return $action;
    }

}
