<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Presidentes</h1>
<ul>
<?php foreach ($presidentes as $presidente): ?>
    <li>
        <?= Html::encode("{$presidente->codigo} ({$presidente->nombre})") ?>:
        <?= $presidente->anio ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
