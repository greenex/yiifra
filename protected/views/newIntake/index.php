<?php
/* @var $this NewIntakeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'New Intakes',
);

$this->menu=array(
	array('label'=>'Create NewIntake', 'url'=>array('create')),
	array('label'=>'Manage NewIntake', 'url'=>array('admin')),
);
?>

<h1>New Intakes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
