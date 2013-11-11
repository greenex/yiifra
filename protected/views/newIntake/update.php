<?php
/* @var $this NewIntakeController */
/* @var $model NewIntake */

$this->breadcrumbs=array(
	'New Intakes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewIntake', 'url'=>array('index')),
	array('label'=>'Create NewIntake', 'url'=>array('create')),
	array('label'=>'View NewIntake', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NewIntake', 'url'=>array('admin')),
);
?>

<h1>Update NewIntake <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>