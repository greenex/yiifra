<?php
/* @var $this NewIntakeController */
/* @var $model NewIntake */

$this->breadcrumbs=array(
	'New Intakes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NewIntake', 'url'=>array('index')),
	array('label'=>'Create NewIntake', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#new-intake-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage New Intakes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'new-intake-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'representative',
		'date',
		'name',
		'ss',
		'dob',
		/*
		'co_name',
		'co_ss',
		'co_dob',
		'tell',
		'cell',
		'email',
		'home_address',
		'home_zip',
		'mailing_address',
		'mailing_zip',
		'mortgage_company_1',
		'loan_number_1',
		'mortgage_payment',
		'loan_balance_1',
		'tax_insurence',
		'mortgage_company_2',
		'loan_number_2',
		'mortgage_payment_2',
		'loan_balance_2',
		'behind_mortgage_payment',
		'mortgage_payment_months',
		'home_in_foreclosure',
		'sale_date',
		'employer_name',
		'employer_tel',
		'supervisor',
		'start_date',
		'monthly_gross_incom',
		'monthly_gross_incom_net',
		'monthly_gross_incom_self_employed',
		'monthly_gross_incom_wage_earner',
		'co_monthly_gross_incom',
		'co_monthly_gross_incom_self_employed',
		'co_monthly_gross_incom_wage_earner',
		'co_monthly_gross_incom_net',
		'additional_income_social_sec',
		'additional_income_unemployment',
		'additional_income_side_job',
		'additional_income_pension',
		'additional_income_contribution',
		'additional_income_child_support',
		'additional_income_alimony',
		'additional_income_IRA',
		'additional_income_other',
		'hear_about_us_relative',
		'hear_about_us_radio',
		'notes',
		'hardship_explanation',
		'HOA',
		'address',
		'fee',
		'people_in_household',
		'under_18',
		'is_field_bankuptcy',
		'case_num',
		'filing_date',
		'is_discharged',
		'own_properties',
		'direccion_1',
		'direccion_2',
		'direccion_3',
		'payment_1',
		'payment_2',
		'payment_3',
		'indicate_rented_1',
		'indicate_rented_2',
		'indicate_rented_3',
		'cridit_card_min_1',
		'cridit_card_min_2',
		'cridit_card_min_3',
		'cridit_card_min_4',
		'cridit_card_min_5',
		'cridit_card_balance_1',
		'cridit_card_balance_2',
		'cridit_card_balance_3',
		'cridit_card_balance_4',
		'cridit_card_balance_5',
		'monthly_car_payment_1',
		'monthly_car_payment_2',
		'monthly_car_payment_3',
		'monthly_car_payment_4',
		'monthly_car_balance_1',
		'monthly_car_balance_2',
		'monthly_car_balance_3',
		'monthly_car_balance_4',
		'monthly_car_other',
		'expenses_wage',
		'expenses_alimony',
		'expenses_child_support',
		'expenses_other',
		'num_of_cars',
		'monthly_car_insurnce',
		'gasolina',
		'utilities_calbe',
		'utilities_gas',
		'utilities_tel',
		'utilities_internet',
		'utilities_groceries',
		'utilities_electricidad',
		'utilities_agua',
		'utilities_cellular',
		'utilities_basura',
		'utilities_otro',
		'tptal',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
