<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presidente */

$this->title = 'Editar Presidente: ' . $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Presidentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigo, 'url' => ['view', 'id' => $model->codigo]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="presidente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ciudades' => $ciudades
    ]) ?>

</div>
