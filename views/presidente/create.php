<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Presidente */

$this->title = 'Crear Presidente';
$this->params['breadcrumbs'][] = ['label' => 'Presidentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presidente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'ciudades' => $ciudades
    ]) ?>

    <pre>
    	<?php print_r($ciudades) ?>
    </pre>

</div>
