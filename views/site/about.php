<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>

    <h2>DAO</h2>
    <ul>
    <?php foreach ($presidentes as $presidente): ?>
    	<li>
    		<?= $presidente['nombre'] ?>
    		<?= $presidente['anio'] ?>
    	</li>	
    <?php endforeach; ?>
	</ul>

	<h2>Query Builder</h2>
    <ul>
    <?php foreach ($presidentesQB as $presidente): ?>
    	<li>
    		<?= $presidente['nombre'] ?>
    		<?= $presidente['anio'] ?>
    	</li>	
    <?php endforeach; ?>
	</ul>
</div>
