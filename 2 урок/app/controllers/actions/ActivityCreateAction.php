<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 19.02.2019
 * Time: 19:13
 */

namespace app\controllers\actions;


use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action
{

    public function run() {
       $activity=\Yii::$app->activity->getModel();

        // if(!$activity->validate()) {
        //  echo "error validate";
        //  print_r($activity->getErrors());
        //  exit;


        //}


        if(\Yii::$app->request->isPost) {
            $activity->load(\Yii::$app->request->post());

            print_r($activity->getAttributes());

            $activity->validate();
        }


        // $activity->is_blocked=1;
        // $activity->title="Заголовок";

        return $this->controller->render("create",["activity"=>$activity]);

    }

}