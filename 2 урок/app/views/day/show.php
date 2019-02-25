<?php
/**
 * Created by PhpStorm.
 * User: Kat
 * Date: 25.02.2019
 * Time: 0:12
 */

?>

<h1>День</h1>
<h3><?= $day->date_title; ?></h3>
<p><?= $day->is_weekend; ?></p>
<?php if (isset($day -> activities[0])): ?>
    <h3>Планы:</h3>
<?php else: ?>
    <h3>Нат планов на этот день</h3>
<?php endif; ?>
<a href="\activity\create?date_start=<?= $day->date; ?>"><button type="submit" class="btn btn-default" >Добавить план</button></a>
