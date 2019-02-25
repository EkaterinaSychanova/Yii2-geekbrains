<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 24.02.2019
 * Time: 23:54
 */

namespace app\controllers\actions;

use app\models\Day;
use yii\base\Action;

class DayShowAction extends Action
{
    public function run() {
        if (\Yii::$app->request->isGet) {
            $day = \Yii::$app->day->getModel(\Yii::$app->request->get());
        } else {
            $day = \Yii::$app->day->getModel();
        }
        return $this->controller->render('show', ['day' => $day]);
    }
}