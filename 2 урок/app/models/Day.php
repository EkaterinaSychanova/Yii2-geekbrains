<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 25.02.2019
 * Time: 0:05
 */

namespace app\models;
use yii\base\Model;
class Day extends Model
{
    public $today;
    public $date;
    public $date_title;
    public $is_weekend;
    public $activities;

    function rules() {
        return [
            ['date', 'date', 'format' => 'php: Y-m-d', 'message' => 'дата в неверном фррмате']
        ];
    }

    public function attributeLabels()
    {
        return [
        ];
    }
}