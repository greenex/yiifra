<?php
/* @var $this NewIntakeController */
/* @var $data NewIntake */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representative')); ?>:</b>
	<?php echo CHtml::encode($data->representative); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ss')); ?>:</b>
	<?php echo CHtml::encode($data->ss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_name')); ?>:</b>
	<?php echo CHtml::encode($data->co_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('co_ss')); ?>:</b>
	<?php echo CHtml::encode($data->co_ss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_dob')); ?>:</b>
	<?php echo CHtml::encode($data->co_dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tell')); ?>:</b>
	<?php echo CHtml::encode($data->tell); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cell')); ?>:</b>
	<?php echo CHtml::encode($data->cell); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_address')); ?>:</b>
	<?php echo CHtml::encode($data->home_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_zip')); ?>:</b>
	<?php echo CHtml::encode($data->home_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_address')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailing_zip')); ?>:</b>
	<?php echo CHtml::encode($data->mailing_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mortgage_company_1')); ?>:</b>
	<?php echo CHtml::encode($data->mortgage_company_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loan_number_1')); ?>:</b>
	<?php echo CHtml::encode($data->loan_number_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mortgage_payment')); ?>:</b>
	<?php echo CHtml::encode($data->mortgage_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loan_balance_1')); ?>:</b>
	<?php echo CHtml::encode($data->loan_balance_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax_insurence')); ?>:</b>
	<?php echo CHtml::encode($data->tax_insurence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mortgage_company_2')); ?>:</b>
	<?php echo CHtml::encode($data->mortgage_company_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loan_number_2')); ?>:</b>
	<?php echo CHtml::encode($data->loan_number_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mortgage_payment_2')); ?>:</b>
	<?php echo CHtml::encode($data->mortgage_payment_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loan_balance_2')); ?>:</b>
	<?php echo CHtml::encode($data->loan_balance_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('behind_mortgage_payment')); ?>:</b>
	<?php echo CHtml::encode($data->behind_mortgage_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mortgage_payment_months')); ?>:</b>
	<?php echo CHtml::encode($data->mortgage_payment_months); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_in_foreclosure')); ?>:</b>
	<?php echo CHtml::encode($data->home_in_foreclosure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_date')); ?>:</b>
	<?php echo CHtml::encode($data->sale_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_name')); ?>:</b>
	<?php echo CHtml::encode($data->employer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_tel')); ?>:</b>
	<?php echo CHtml::encode($data->employer_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supervisor')); ?>:</b>
	<?php echo CHtml::encode($data->supervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	<?php echo CHtml::encode($data->start_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_gross_incom')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_gross_incom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_gross_incom_net')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_gross_incom_net); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_gross_incom_self_employed')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_gross_incom_self_employed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_gross_incom_wage_earner')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_gross_incom_wage_earner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_monthly_gross_incom')); ?>:</b>
	<?php echo CHtml::encode($data->co_monthly_gross_incom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_monthly_gross_incom_self_employed')); ?>:</b>
	<?php echo CHtml::encode($data->co_monthly_gross_incom_self_employed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_monthly_gross_incom_wage_earner')); ?>:</b>
	<?php echo CHtml::encode($data->co_monthly_gross_incom_wage_earner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co_monthly_gross_incom_net')); ?>:</b>
	<?php echo CHtml::encode($data->co_monthly_gross_incom_net); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_social_sec')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_social_sec); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_unemployment')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_unemployment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_side_job')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_side_job); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_pension')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_pension); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_contribution')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_contribution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_child_support')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_child_support); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_alimony')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_alimony); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_IRA')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_IRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_income_other')); ?>:</b>
	<?php echo CHtml::encode($data->additional_income_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hear_about_us_relative')); ?>:</b>
	<?php echo CHtml::encode($data->hear_about_us_relative); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hear_about_us_radio')); ?>:</b>
	<?php echo CHtml::encode($data->hear_about_us_radio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hardship_explanation')); ?>:</b>
	<?php echo CHtml::encode($data->hardship_explanation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOA')); ?>:</b>
	<?php echo CHtml::encode($data->HOA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fee')); ?>:</b>
	<?php echo CHtml::encode($data->fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('people_in_household')); ?>:</b>
	<?php echo CHtml::encode($data->people_in_household); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('under_18')); ?>:</b>
	<?php echo CHtml::encode($data->under_18); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_field_bankuptcy')); ?>:</b>
	<?php echo CHtml::encode($data->is_field_bankuptcy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('case_num')); ?>:</b>
	<?php echo CHtml::encode($data->case_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filing_date')); ?>:</b>
	<?php echo CHtml::encode($data->filing_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_discharged')); ?>:</b>
	<?php echo CHtml::encode($data->is_discharged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('own_properties')); ?>:</b>
	<?php echo CHtml::encode($data->own_properties); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_1')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_2')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_3')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_1')); ?>:</b>
	<?php echo CHtml::encode($data->payment_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_2')); ?>:</b>
	<?php echo CHtml::encode($data->payment_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_3')); ?>:</b>
	<?php echo CHtml::encode($data->payment_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicate_rented_1')); ?>:</b>
	<?php echo CHtml::encode($data->indicate_rented_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicate_rented_2')); ?>:</b>
	<?php echo CHtml::encode($data->indicate_rented_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicate_rented_3')); ?>:</b>
	<?php echo CHtml::encode($data->indicate_rented_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_min_1')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_min_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_min_2')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_min_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_min_3')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_min_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_min_4')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_min_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_min_5')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_min_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_balance_1')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_balance_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_balance_2')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_balance_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_balance_3')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_balance_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_balance_4')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_balance_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cridit_card_balance_5')); ?>:</b>
	<?php echo CHtml::encode($data->cridit_card_balance_5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_payment_1')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_payment_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_payment_2')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_payment_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_payment_3')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_payment_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_payment_4')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_payment_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_balance_1')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_balance_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_balance_2')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_balance_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_balance_3')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_balance_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_balance_4')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_balance_4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_other')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenses_wage')); ?>:</b>
	<?php echo CHtml::encode($data->expenses_wage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenses_alimony')); ?>:</b>
	<?php echo CHtml::encode($data->expenses_alimony); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenses_child_support')); ?>:</b>
	<?php echo CHtml::encode($data->expenses_child_support); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenses_other')); ?>:</b>
	<?php echo CHtml::encode($data->expenses_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_of_cars')); ?>:</b>
	<?php echo CHtml::encode($data->num_of_cars); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_car_insurnce')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_car_insurnce); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gasolina')); ?>:</b>
	<?php echo CHtml::encode($data->gasolina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_calbe')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_calbe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_gas')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_gas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_tel')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_internet')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_groceries')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_groceries); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_electricidad')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_electricidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_agua')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_agua); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_cellular')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_cellular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_basura')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_basura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilities_otro')); ?>:</b>
	<?php echo CHtml::encode($data->utilities_otro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tptal')); ?>:</b>
	<?php echo CHtml::encode($data->tptal); ?>
	<br />

	*/ ?>

</div>