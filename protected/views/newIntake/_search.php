<?php
/* @var $this NewIntakeController */
/* @var $model NewIntake */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'representative'); ?>
		<?php echo $form->textField($model,'representative',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ss'); ?>
		<?php echo $form->textField($model,'ss',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dob'); ?>
		<?php echo $form->textField($model,'dob',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_name'); ?>
		<?php echo $form->textField($model,'co_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_ss'); ?>
		<?php echo $form->textField($model,'co_ss',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_dob'); ?>
		<?php echo $form->textField($model,'co_dob',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tell'); ?>
		<?php echo $form->textField($model,'tell',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cell'); ?>
		<?php echo $form->textField($model,'cell',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_address'); ?>
		<?php echo $form->textField($model,'home_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_zip'); ?>
		<?php echo $form->textField($model,'home_zip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mailing_address'); ?>
		<?php echo $form->textField($model,'mailing_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mailing_zip'); ?>
		<?php echo $form->textField($model,'mailing_zip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mortgage_company_1'); ?>
		<?php echo $form->textField($model,'mortgage_company_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loan_number_1'); ?>
		<?php echo $form->textField($model,'loan_number_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mortgage_payment'); ?>
		<?php echo $form->textField($model,'mortgage_payment',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loan_balance_1'); ?>
		<?php echo $form->textField($model,'loan_balance_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax_insurence'); ?>
		<?php echo $form->textField($model,'tax_insurence',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mortgage_company_2'); ?>
		<?php echo $form->textField($model,'mortgage_company_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loan_number_2'); ?>
		<?php echo $form->textField($model,'loan_number_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mortgage_payment_2'); ?>
		<?php echo $form->textField($model,'mortgage_payment_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loan_balance_2'); ?>
		<?php echo $form->textField($model,'loan_balance_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'behind_mortgage_payment'); ?>
		<?php echo $form->textField($model,'behind_mortgage_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mortgage_payment_months'); ?>
		<?php echo $form->textField($model,'mortgage_payment_months'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_in_foreclosure'); ?>
		<?php echo $form->textField($model,'home_in_foreclosure'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_date'); ?>
		<?php echo $form->textField($model,'sale_date',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer_name'); ?>
		<?php echo $form->textField($model,'employer_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer_tel'); ?>
		<?php echo $form->textField($model,'employer_tel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supervisor'); ?>
		<?php echo $form->textField($model,'supervisor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_gross_incom'); ?>
		<?php echo $form->textField($model,'monthly_gross_incom',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_gross_incom_net'); ?>
		<?php echo $form->textField($model,'monthly_gross_incom_net',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_gross_incom_self_employed'); ?>
		<?php echo $form->textField($model,'monthly_gross_incom_self_employed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_gross_incom_wage_earner'); ?>
		<?php echo $form->textField($model,'monthly_gross_incom_wage_earner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_monthly_gross_incom'); ?>
		<?php echo $form->textField($model,'co_monthly_gross_incom',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_monthly_gross_incom_self_employed'); ?>
		<?php echo $form->textField($model,'co_monthly_gross_incom_self_employed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_monthly_gross_incom_wage_earner'); ?>
		<?php echo $form->textField($model,'co_monthly_gross_incom_wage_earner',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_monthly_gross_incom_net'); ?>
		<?php echo $form->textField($model,'co_monthly_gross_incom_net',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_social_sec'); ?>
		<?php echo $form->textField($model,'additional_income_social_sec',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_unemployment'); ?>
		<?php echo $form->textField($model,'additional_income_unemployment',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_side_job'); ?>
		<?php echo $form->textField($model,'additional_income_side_job',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_pension'); ?>
		<?php echo $form->textField($model,'additional_income_pension',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_contribution'); ?>
		<?php echo $form->textField($model,'additional_income_contribution',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_child_support'); ?>
		<?php echo $form->textField($model,'additional_income_child_support',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_alimony'); ?>
		<?php echo $form->textField($model,'additional_income_alimony',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_IRA'); ?>
		<?php echo $form->textField($model,'additional_income_IRA',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_income_other'); ?>
		<?php echo $form->textField($model,'additional_income_other',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hear_about_us_relative'); ?>
		<?php echo $form->textField($model,'hear_about_us_relative',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hear_about_us_radio'); ?>
		<?php echo $form->textField($model,'hear_about_us_radio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hardship_explanation'); ?>
		<?php echo $form->textArea($model,'hardship_explanation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOA'); ?>
		<?php echo $form->textField($model,'HOA',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fee'); ?>
		<?php echo $form->textField($model,'fee',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'people_in_household'); ?>
		<?php echo $form->textField($model,'people_in_household',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'under_18'); ?>
		<?php echo $form->textField($model,'under_18',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_field_bankuptcy'); ?>
		<?php echo $form->textField($model,'is_field_bankuptcy',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_num'); ?>
		<?php echo $form->textField($model,'case_num',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filing_date'); ?>
		<?php echo $form->textField($model,'filing_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_discharged'); ?>
		<?php echo $form->textField($model,'is_discharged',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'own_properties'); ?>
		<?php echo $form->textField($model,'own_properties',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_1'); ?>
		<?php echo $form->textField($model,'direccion_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_2'); ?>
		<?php echo $form->textField($model,'direccion_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_3'); ?>
		<?php echo $form->textField($model,'direccion_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_1'); ?>
		<?php echo $form->textField($model,'payment_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_2'); ?>
		<?php echo $form->textField($model,'payment_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_3'); ?>
		<?php echo $form->textField($model,'payment_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indicate_rented_1'); ?>
		<?php echo $form->textField($model,'indicate_rented_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indicate_rented_2'); ?>
		<?php echo $form->textField($model,'indicate_rented_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indicate_rented_3'); ?>
		<?php echo $form->textField($model,'indicate_rented_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_min_1'); ?>
		<?php echo $form->textField($model,'cridit_card_min_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_min_2'); ?>
		<?php echo $form->textField($model,'cridit_card_min_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_min_3'); ?>
		<?php echo $form->textField($model,'cridit_card_min_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_min_4'); ?>
		<?php echo $form->textField($model,'cridit_card_min_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_min_5'); ?>
		<?php echo $form->textField($model,'cridit_card_min_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_balance_1'); ?>
		<?php echo $form->textField($model,'cridit_card_balance_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_balance_2'); ?>
		<?php echo $form->textField($model,'cridit_card_balance_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_balance_3'); ?>
		<?php echo $form->textField($model,'cridit_card_balance_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_balance_4'); ?>
		<?php echo $form->textField($model,'cridit_card_balance_4',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cridit_card_balance_5'); ?>
		<?php echo $form->textField($model,'cridit_card_balance_5',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_payment_1'); ?>
		<?php echo $form->textField($model,'monthly_car_payment_1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_payment_2'); ?>
		<?php echo $form->textField($model,'monthly_car_payment_2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_payment_3'); ?>
		<?php echo $form->textField($model,'monthly_car_payment_3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_payment_4'); ?>
		<?php echo $form->textField($model,'monthly_car_payment_4',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_balance_1'); ?>
		<?php echo $form->textField($model,'monthly_car_balance_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_balance_2'); ?>
		<?php echo $form->textField($model,'monthly_car_balance_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_balance_3'); ?>
		<?php echo $form->textField($model,'monthly_car_balance_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_balance_4'); ?>
		<?php echo $form->textField($model,'monthly_car_balance_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_other'); ?>
		<?php echo $form->textField($model,'monthly_car_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expenses_wage'); ?>
		<?php echo $form->textField($model,'expenses_wage',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expenses_alimony'); ?>
		<?php echo $form->textField($model,'expenses_alimony',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expenses_child_support'); ?>
		<?php echo $form->textField($model,'expenses_child_support',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'expenses_other'); ?>
		<?php echo $form->textField($model,'expenses_other',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_of_cars'); ?>
		<?php echo $form->textField($model,'num_of_cars'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_car_insurnce'); ?>
		<?php echo $form->textField($model,'monthly_car_insurnce',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gasolina'); ?>
		<?php echo $form->textField($model,'gasolina',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_calbe'); ?>
		<?php echo $form->textField($model,'utilities_calbe',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_gas'); ?>
		<?php echo $form->textField($model,'utilities_gas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_tel'); ?>
		<?php echo $form->textField($model,'utilities_tel',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_internet'); ?>
		<?php echo $form->textField($model,'utilities_internet',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_groceries'); ?>
		<?php echo $form->textField($model,'utilities_groceries',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_electricidad'); ?>
		<?php echo $form->textField($model,'utilities_electricidad',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_agua'); ?>
		<?php echo $form->textField($model,'utilities_agua',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_cellular'); ?>
		<?php echo $form->textField($model,'utilities_cellular',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_basura'); ?>
		<?php echo $form->textField($model,'utilities_basura',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilities_otro'); ?>
		<?php echo $form->textField($model,'utilities_otro',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tptal'); ?>
		<?php echo $form->textField($model,'tptal',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->