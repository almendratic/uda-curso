<?php

use yii\helpers\Html;
use app\widgets\MenuAsset;

MenuAsset::register($this);
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
