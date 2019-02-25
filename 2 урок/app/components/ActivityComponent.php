<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 20.02.2019
 * Time: 13:28
 */

namespace app\components;
use app\models\Activity;
use yii\base\Component;
class ActivityComponent extends Component
{
    /**@var string class of activity entity*/
    public $activity_class;
    /**@return Activity*/
    public function getModel($params=null) {
        $model = new $this -> activity_class;
        if ($params && is_array($params)) {
            $model -> load($params);
        }

        return $model;
    }

    public function createActivity(&$model){
        if($model -> validate()) {
            if ($model->image) {
                $path = $this->getPathSaveFile();
                $name = mt_rand(0, 9999).time().'.'.$model->image->getExtension();
                if (!$model->image->saveAs($path.$name)) {
                    $model->addError('image', 'не удалось загрузить файл');
                    return false;
                }
                $model->image->$name;
            }
            return true;
        }
    }
    private function getPathSaveFile() {
        return \Yii::getAlias('@app/web/images');
    }
}