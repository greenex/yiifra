<?php
/* @var $this NewIntakeController */
/* @var $model NewIntake */

$baseUrl = Yii::app()->baseUrl; 
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.maskedinput.js');
 $cs->registerScriptFile($baseUrl.'/js/jquery.maskMoney.js');
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>