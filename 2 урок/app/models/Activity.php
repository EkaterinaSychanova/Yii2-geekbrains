<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 19.02.2019
 * Time: 17:32
 */

namespace app\models;


use yii\base\Model;

class Activity extends Model
{

    public $title;

    public $description;

    public $is_blocked;

    public $repeat;

    public $week;

    public $cron;

    function  rules()
    {
        return [
            ["title", "string","max"=> 150, "min"=> 2],
            ['corn',"string"],

            [["title"],"required"],
            ["is_blocked","boolean"],
            ["repeat", "boolean"]
        ];

    }

    function attributeLabels()
    {
        return [
            "cron"=>'Время запуска события в космос',
            "title"=>"Событие",
            "description"=>"Описание",
            "is_blocked"=>"Блокирующее",
            "repeat"=>"Повторять это событие?",
            "week"=>""
            ];
    }
}