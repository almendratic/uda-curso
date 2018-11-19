<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PresidenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Presidentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presidente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Presidente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo',
            'nombre',
            'anio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
