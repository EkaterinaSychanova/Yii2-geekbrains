<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 19.02.2019
 * Time: 17:32
 */

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Activity extends Model
{
    public $title;
    public $description;
    public $cron;
    public $repeat;
    public $week;
    public $is_blocked;
    public $email;
    public $image;

    public function beforeValidate()
    {
        $this->loadFile();
        if (!empty($this->date_start)) {
            $this->date_start=\DateTime::createFromFormat('d.m.Y', $this->date_start);
            if ($this->date_start) {
                $this->date_start=$this->date_start->format('Y-m-d');
            }
        }
        return parent::beforeValidate();
    }
    function rules() {
        return [
            ['title', 'string', 'min' => 2, 'max' => 150],
            ['description', 'string'],
            ['title', 'required'],
            ['is_blocked', 'boolean'],
            ["repeat", "boolean"],
            ['cron',"string"],
            ['email', 'email'],
            [['image'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4]
        ];
    }
    function attributeLabels() {
        return [
            'title' => 'Заголовок',
            'description' => 'Описание',
            'date_start' => 'Дата начала',
            'is_blocked' => 'Блокирующее',
            "repeat"=>"Повторять это событие?",
            "week"=>""

        ];
    }
    public function loadFile() {

        $this->image = UploadedFile::getInstance($this, 'image');
    }
}