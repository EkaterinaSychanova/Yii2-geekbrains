<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 19.02.2019
 * Time: 16:55
 * @var $activity \app\models\Activity
 */


use \yii\bootstrap\ActiveForm;

?>
<div class="row">
    <div class="col-md-6">
        <h2>Создание нового события</h2>
        <?php $form=ActiveForm::begin(); ?>
        <?=$form->field($activity,"title");?>
        <?=$form->field($activity, "description")->textarea();?>
        <p>Когда будет событие:
            <input type="date" name="calendar" value="2019-03-01"
                   max="2050-06-01" min="2010-01-01">
        </p>
        <form>
            <p>В какое время запускать событие?</p>
            <p><input type="time" name="cron" value="12:00" min="00:01" max="06:00"></p>
        </form>

        <p>
            Будний день <?=$form->field($activity, "week")->radio()?>
            Выходной <?=$form->field($activity, "week")->radio()?>

        </p>

        <?=$form->field($activity, "is_blocked")->checkbox()?>
        <?=$form->field($activity, "repeat")->checkbox()?>

        <div class="form-group">
            <button type="submit" class="btn btn btn-default">Отправить</button>
        </div>


        <?php ActiveForm::end();?>
    </div>
</div>
