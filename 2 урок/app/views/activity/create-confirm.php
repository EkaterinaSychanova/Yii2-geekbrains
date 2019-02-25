<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 25.02.2019
 * Time: 0:08
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

    <dev class="row">
        <p>Вы ввели следующую информацию</p>
        <ul>
            <li><label>Заголовок</label>: <?= Html::encode($activity->title) ?></li>
            <li><label>Описание</label>: <?= Html::encode($activity->description) ?></li>
            <li><label>Время</label>: <?= Html::encode($activity->cron) ?></li>
            <li><label>Блокирующее</label>: <?= Html::encode($activity->is_blocked) ?></li>
            <li><label>Повторяющееся</label>: <?= Html::encode($activity->repeat) ?></li>
            <li><label>День недели</label>: <?= Html::encode($activity->week) ?></li>
            <li><label>Е-мэйл</label>: <?= Html::encode($activity->email) ?></li>
            <li><label>Картинка</label>: <?= Html::encode($activity->image) ?></li>
            <li><img src="/images/<?= $activity->image ?>" </li>
        </ul>
    </dev>

<?php $form=ActiveForm::begin([
    'action' => '/activity/create',
    'method' => 'POST',
    'id' => 'activity',
    'options' => [
        'enctype' => ''
    ]
]); ?>

<?= $form->field($activity, 'title') -> label(false) -> hiddenInput(['value' => Html::encode($activity->title)]); ?>
<?= $form->field($activity, 'description') -> label(false) -> hiddenInput(['value' => Html::encode($activity->description)]); ?>
<?= $form->field($activity, 'cron') -> label(false) -> hiddenInput(['value' => Html::encode($activity->date_start)]); ?>
<?= $form->field($activity, 'week') -> label(false) -> hiddenInput(['value' => Html::encode($activity->date_start)]); ?>
<?= $form->field($activity, 'repeat') -> label(false) -> hiddenInput(['value' => Html::encode($activity->date_start)]); ?>
<?= $form->field($activity, 'is_blocked') -> label(false) -> hiddenInput(['value' => Html::encode($activity->is_blocked)]); ?>
<?= $form->field($activity, 'email') -> label(false) -> hiddenInput(['value' => Html::encode($activity->email)]); ?>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Редактировать</button>
    </div>

<?php ActiveForm::end(); ?>