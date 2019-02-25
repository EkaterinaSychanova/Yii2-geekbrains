<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 19.02.2019
 * Time: 15:30
 */

namespace app\controllers;

use app\base\BaseController;
use app\controllers\actions\ActivityCreateAction;
use app\models\Activity;
use yii\rest\DeleteAction;

class ActivityController extends BaseController
{
    public  function actions() {
        return [
            'confirm' => ['class' => ConfirmAction::class],
            'edit' => ['class' => ActivityCreateAction::class]
        ];
    }
}