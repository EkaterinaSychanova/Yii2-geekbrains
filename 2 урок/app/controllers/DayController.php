<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 24.02.2019
 * Time: 23:57
 */

namespace app\controllers;

use app\base\BaseController;
use app\models\Day;
use app\controllers\actions\DayShowAction;

class DayController extends BaseController
{
    public  function actions() {
        return [
            'show' => ['class' => DayShowAction::class]
        ];
    }
}