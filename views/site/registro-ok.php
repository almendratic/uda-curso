<?php
use yii\helpers\Html;
?>
<p>Has ingresado la siguiente información:</p>

<ul>
    <li><label>Nombre</label>: <?= Html::encode($model->nombre) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
