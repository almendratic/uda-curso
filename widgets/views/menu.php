<?php

use yii\helpers\Html;
?>

<h1><?= $titulo ?></h1>
<div class="list-group">	
	<?= Html::a('Presidentes', ['presidente/index'], ['class' => 'list-group-item active']) ?>

	<a href="#" class="list-group-item">
		Menu 2
	</a>
	<a href="#" class="list-group-item">
		Menu 3
	</a>
	<a href="#" class="list-group-item">
		Menu 4
	</a>
	<a href="#" class="list-group-item">
		Menu 5
	</a>
</div>
