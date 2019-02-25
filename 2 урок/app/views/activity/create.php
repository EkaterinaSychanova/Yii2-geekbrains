<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 19.02.2019
 * Time: 16:55
 * @var $activity \app\models\Activity
 */

use yii\bootstrap\ActiveForm;
var_dump($activity->date_start);
?>


<div class="row">
    <div class="col-md-6">
        <h2>Создание нового задания</h2>
        <?php $form=ActiveForm::begin([
            'action' => '',
            'method' => 'POST',
            'id' => 'activity',
            'options' => [
                'enctype' => ''
            ]
        ]); ?>

        <?= $form->field($activity, 'title'); ?>
        <?= $form->field($activity, 'description') -> textarea(); ?>
        <p>Когда будет событие:
            <input type="date" name="calendar" value="2019-03-01"
                   max="2050-06-01" min="2010-01-01">
        </p>
        <form>
            <p>В какое время запускать событие?</p>
            <p><input type="time" name="cron" value="12:00" min="00:01" max="06:00"></p>-->
        </form>

        <?=$form->field($activity,'cron')->textInput(['type'=>'time','min'=>'00:01','max'=>'06:00'])?>

        <p>
            Рабочий <?=$form->field($activity, "week")->radio()?>
            Выходной <?=$form->field($activity, "week")->radio()?>

        </p>

        <?=$form->field($activity, "is_blocked")->checkbox()?>
        <?=$form->field($activity, "repeat")->checkbox()?>

        <div class="form-group">
            <button type="submit" class="btn btn btn-default">Отправить</button>
        </div>


        <?php ActiveForm::end();?>
        <?= $form->field($activity, 'email'); ?>
        <?= $form->field($activity, 'image') -> fileInput();?>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Отправить</button>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
    <a href="/calender"><button>Календарь</button></a>
</div>