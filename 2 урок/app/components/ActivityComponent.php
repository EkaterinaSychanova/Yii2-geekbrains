<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 20.02.2019
 * Time: 13:28
 */

namespace app\components;

use \yii\base\Component;

class ActivityComponent extends Component
{

    /**@var string class of activity */
    public $activity_class;

    /**
     * @return Activity
     */

    public function getModel() {
        return new $this->activity_class;
    }
}