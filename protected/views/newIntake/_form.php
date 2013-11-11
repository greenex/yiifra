<?php
$this->pageTitle="FRA - Am I eligible";
/* @var $this NewIntakeController */
/* @var $model NewIntake */
/* @var $form CActiveForm */
?>
<style>

	.row {
	    background: none repeat scroll 0 0 #B4C5D4;
	    border-radius: 6px;
	    padding: 13px;
	    width: 97%;
	}
	.sub-row input{
		width:250px;
	}
	.sub-row ,div.form .row{
		float: left;
	}
	.span-19 {
	    width: 100%;
	}
	div.form input {
	    float: left;
	}
	.first {
	    display: inline;
	    float: left;
	    width: 49px;
	}
	div.form .radio{
		width:250px;
	}
	div.form  .area{
	}
	.seprator{
		  text-align: center;
	}
	.small input{
		width:200px;
	}
	#send_form:hover {
    	background-image: url("../images/maha_elegible_submit_over_v001.png");
   		cursor: pointer;
    }
    #send_form{
    	border: 0px
    }
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'new-intake-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions' => array(
        'validateOnSubmit'=>true,
    ),
)); ?>
	<div id="title_box">
		<div id="title_text_box">
		<p align="center" style="font-size:20px;">
		<p style="clear:both font-size:11px; text-align:center; font-size: 14px;">You must complete the following application in order to have access to the (FRA) Program and obtain detailed answers to question that will help you obtain a possible Principal Reduction and Payment reduction.</p>
		</div>
	</div>

	<?php // echo $form->errorSummary($model); ?>

	<div class="row">
		<div class='sub-row'>
			<?php echo $form->labelEx($model,'representative'); ?>
			<?php echo $form->textField($model,'representative',array('size'=>60,'maxlength'=>60)); ?>
			<?php echo $form->error($model,'representative'); ?>
		</div>
		
		<div class='sub-row'>
			<?php echo $form->labelEx($model,'date'); ?>
			<?php echo $form->textField($model,'date'); ?>
			<?php echo $form->error($model,'date'); ?>
		</div>
		
	</div>

	<!-- borrow info -->
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'ss'); ?>
			<?php echo $form->textField($model,'ss',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'ss'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'dob'); ?>
			<?php echo $form->textField($model,'dob',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'dob'); ?>
		</div>
	</div>

	
<!-- co-borrow info -->
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'co_name'); ?>
			<?php echo $form->textField($model,'co_name',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'co_name'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'co_ss'); ?>
			<?php echo $form->textField($model,'co_ss',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'co_ss'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'co_dob'); ?>
			<?php echo $form->textField($model,'co_dob',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'co_dob'); ?>
		</div>

	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'tell'); ?>
			<?php echo $form->textField($model,'tell',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'tell'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'cell'); ?>
			<?php echo $form->textField($model,'cell',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'cell'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'home_address'); ?>
			<?php echo $form->textField($model,'home_address',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'home_address'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'home_zip'); ?>
			<?php echo $form->textField($model,'home_zip',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'home_zip'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mailing_address'); ?>
			<?php echo $form->textField($model,'mailing_address',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'mailing_address'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mailing_zip'); ?>
			<?php echo $form->textField($model,'mailing_zip',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'mailing_zip'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mortgage_company_1'); ?>
			<?php echo $form->textField($model,'mortgage_company_1',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'mortgage_company_1'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'loan_number_1'); ?>
			<?php echo $form->textField($model,'loan_number_1',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'loan_number_1'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mortgage_payment'); ?>
			<?php echo $form->textField($model,'mortgage_payment',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'mortgage_payment'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'loan_balance_1'); ?>
			<?php echo $form->textField($model,'loan_balance_1',array('class'=>'mony','size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'loan_balance_1'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'tax_insurence'); ?>
			<?php echo $form->textField($model,'tax_insurence',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'tax_insurence'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mortgage_company_2'); ?>
			<?php echo $form->textField($model,'mortgage_company_2',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'mortgage_company_2'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'loan_number_2'); ?>
			<?php echo $form->textField($model,'loan_number_2',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'loan_number_2'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mortgage_payment_2'); ?>
			<?php echo $form->textField($model,'mortgage_payment_2',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'mortgage_payment_2'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'loan_balance_2'); ?>
			<?php echo $form->textField($model,'loan_balance_2',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'loan_balance_2'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row radio ">
			<?php echo $form->labelEx($model,'behind_mortgage_payment'); ?>
			<?php echo $form->radioButtonList($model, 'behind_mortgage_payment', array('0'=>'No','1'=>'Yes'),array('template'=>'<div class="first">{input} {label}</div>','style'=>'display:inline','separator'=>'  ')); ?>	
			<?php echo $form->error($model,'behind_mortgage_payment'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'mortgage_payment_months'); ?>
			<?php echo $form->textField($model,'mortgage_payment_months'); ?>
			<?php echo $form->error($model,'mortgage_payment_months'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row radio">
			<?php echo $form->labelEx($model,'home_in_foreclosure'); ?>
			<?php echo $form->radioButtonList($model, 'home_in_foreclosure', array('0'=>'No','1'=>'Yes'),array('template'=>'<div class="first">{input} {label}</div>','style'=>'display:inline','separator'=>'  ')); ?>
			<?php echo $form->error($model,'home_in_foreclosure'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'sale_date'); ?>
			<?php echo $form->textField($model,'sale_date',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'sale_date'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'employer_name'); ?>
			<?php echo $form->textField($model,'employer_name',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'employer_name'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'employer_tel'); ?>
			<?php echo $form->textField($model,'employer_tel',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'employer_tel'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'supervisor'); ?>
			<?php echo $form->textField($model,'supervisor',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'supervisor'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'start_date'); ?>
			<?php echo $form->textField($model,'start_date'); ?>
			<?php echo $form->error($model,'start_date'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'monthly_gross_incom'); ?>
			<?php echo $form->textField($model,'monthly_gross_incom',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'monthly_gross_incom'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'monthly_gross_incom_net'); ?>
			<?php echo $form->textField($model,'monthly_gross_incom_net',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'monthly_gross_incom_net'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->checkBox($model,'monthly_gross_incom_self_employed'); ?>
			<?php echo $form->labelEx($model,'monthly_gross_incom_self_employed'); ?>
			<?php echo $form->error($model,'monthly_gross_incom_self_employed'); ?>
		</div>
		
		<div class="sub-row">
			<?php echo $form->checkBox($model,'monthly_gross_incom_wage_earner'); ?>
			<?php echo $form->labelEx($model,'monthly_gross_incom_wage_earner'); ?>
			<?php echo $form->error($model,'monthly_gross_incom_wage_earner'); ?>
		</div>
	</div>
	
	<div class="row">
			<div class="sub-row">
			<?php echo $form->labelEx($model,'co_monthly_gross_incom'); ?>
			<?php echo $form->textField($model,'co_monthly_gross_incom',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'co_monthly_gross_incom'); ?>
		</div>
		<div class="sub-row">
			<?php echo $form->labelEx($model,'co_monthly_gross_incom_net'); ?>
			<?php echo $form->textField($model,'co_monthly_gross_incom_net',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'co_monthly_gross_incom_net'); ?>
		</div>

		<div class="sub-row">
			<?php echo $form->checkBox($model,'co_monthly_gross_incom_self_employed'); ?>
			<?php echo $form->labelEx($model,'co_monthly_gross_incom_self_employed'); ?>
			<?php echo $form->error($model,'co_monthly_gross_incom_self_employed'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->checkBox($model,'co_monthly_gross_incom_wage_earner',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->labelEx($model,'co_monthly_gross_incom_wage_earner'); ?>
			<?php echo $form->error($model,'co_monthly_gross_incom_wage_earner'); ?>
		</div>
	</div>
	

	<div class="row">
		<h3>Additional Income</h3>
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_social_sec'); ?>
			<?php echo $form->textField($model,'additional_income_social_sec',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_social_sec'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_unemployment'); ?>
			<?php echo $form->textField($model,'additional_income_unemployment',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_unemployment'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_side_job'); ?>
			<?php echo $form->textField($model,'additional_income_side_job',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_side_job'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_pension'); ?>
			<?php echo $form->textField($model,'additional_income_pension',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_pension'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_contribution'); ?>
			<?php echo $form->textField($model,'additional_income_contribution',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_contribution'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_child_support'); ?>
			<?php echo $form->textField($model,'additional_income_child_support',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_child_support'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_alimony'); ?>
			<?php echo $form->textField($model,'additional_income_alimony',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_alimony'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_IRA'); ?>
			<?php echo $form->textField($model,'additional_income_IRA',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_IRA'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'additional_income_other'); ?>
			<?php echo $form->textField($model,'additional_income_other',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'additional_income_other'); ?>
		</div>
	</div>
	
	<div class="row">
		<h3>How did you hear about us?</h2>
			<div class="sub-row">
				<?php echo $form->labelEx($model,'hear_about_us_relative'); ?>
				<?php echo $form->textField($model,'hear_about_us_relative',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'hear_about_us_relative'); ?>
			</div>
		
			<div class="sub-row">
				<?php echo $form->labelEx($model,'hear_about_us_radio'); ?>
				<?php echo $form->textField($model,'hear_about_us_radio',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'hear_about_us_radio'); ?>
			</div>
	</div>

	<div class="row area">
		<h3>Notes</h3>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row area">
		<h3>HARDSHIP EXPLANATION</h3>
		<?php echo $form->textArea($model,'hardship_explanation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hardship_explanation'); ?>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'HOA'); ?>
			<?php echo $form->textField($model,'HOA',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'HOA'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'address'); ?>
			<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'address'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'fee'); ?>
			<?php echo $form->textField($model,'fee',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'fee'); ?>
		</div>
		<div class="sub-row">
			<?php echo $form->checkBox($model,'monthly'); ?>
			<?php echo $form->labelEx($model,'monthly',array('style'=>'display:inline;')); ?>
			<?php echo $form->error($model,'monthly'); ?>
		</div>
		<div class="sub-row" >
			<?php echo $form->checkBox($model,'quarterly'); ?>
			<?php echo $form->labelEx($model,'quarterly',array('style'=>'display:inline;')); ?>
			<?php echo $form->error($model,'quarterly'); ?>
		</div>	
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'people_in_household'); ?>
			<?php echo $form->textField($model,'people_in_household',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'people_in_household'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'under_18'); ?>
			<?php echo $form->textField($model,'under_18',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'under_18'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'is_field_bankuptcy'); ?>
			<?php echo $form->textField($model,'is_field_bankuptcy',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'is_field_bankuptcy'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'case_num'); ?>
			<?php echo $form->textField($model,'case_num',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'case_num'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'filing_date'); ?>
			<?php echo $form->textField($model,'filing_date'); ?>
			<?php echo $form->error($model,'filing_date'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'is_discharged'); ?>
			<?php echo $form->textField($model,'is_discharged',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'is_discharged'); ?>
		</div>
	</div>
	
	<div class="row seprator">
		<h2>ASSETS</h2>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'own_properties'); ?>
		<?php echo $form->textField($model,'own_properties',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'own_properties'); ?>
	</div>
	
	<div class="row seprator">
		<table >
			<tr>
				<th><b>ADDRESS</b></th> <th><b>MONTHLY PAYMENT</b></th> <th><b>INDICATED RENTED</b></th>
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'direccion_1'); ?>
						<?php echo $form->textField($model,'direccion_1',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'direccion_1'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'payment_1'); ?>
						<?php echo $form->textField($model,'payment_1',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'payment_1'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'indicate_rented_1'); ?>
						<?php echo $form->textField($model,'indicate_rented_1',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'indicate_rented_1'); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'direccion_2'); ?>
						<?php echo $form->textField($model,'direccion_2',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'direccion_2'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'payment_2'); ?>
						<?php echo $form->textField($model,'payment_2',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'payment_2'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'indicate_rented_2'); ?>
						<?php echo $form->textField($model,'indicate_rented_2',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'indicate_rented_2'); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'direccion_3'); ?>
						<?php echo $form->textField($model,'direccion_3',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'direccion_3'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'payment_3'); ?>
						<?php echo $form->textField($model,'payment_3',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'payment_3'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'indicate_rented_3'); ?>
						<?php echo $form->textField($model,'indicate_rented_3',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'indicate_rented_3'); ?>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'check_account_balance'); ?>
			<?php echo $form->textField($model,'check_account_balance',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'check_account_balance'); ?>
		</div>
		<div class="sub-row">
			<?php echo $form->labelEx($model,'savings'); ?>
			<?php echo $form->textField($model,'savings',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'savings'); ?>
		</div>
	</div>

	<div class="row seprator">
		<h2>MONTHLY EXPENSES</h2>
	</div>
	
	<div class="row seprator small">
		<table>
			<tr>
				<th><b>Credit Cards</b></th> <th><b>Monthly Car Payments</b></th> 
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_min_1'); ?>
						<?php echo $form->textField($model,'cridit_card_min_1',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_min_1'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_balance_1'); ?>
						<?php echo $form->textField($model,'cridit_card_balance_1',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_balance_1'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_payment_1'); ?>
						<?php echo $form->textField($model,'monthly_car_payment_1',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'monthly_car_payment_1'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_balance_1'); ?>
						<?php echo $form->textField($model,'monthly_car_balance_1'); ?>
						<?php echo $form->error($model,'monthly_car_balance_1'); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_min_2'); ?>
						<?php echo $form->textField($model,'cridit_card_min_2',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_min_2'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_balance_2'); ?>
						<?php echo $form->textField($model,'cridit_card_balance_2',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_balance_2'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_payment_2'); ?>
						<?php echo $form->textField($model,'monthly_car_payment_2',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'monthly_car_payment_1'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_balance_2'); ?>
						<?php echo $form->textField($model,'monthly_car_balance_2'); ?>
						<?php echo $form->error($model,'monthly_car_balance_2'); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_min_3'); ?>
						<?php echo $form->textField($model,'cridit_card_min_3',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_min_3'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_balance_3'); ?>
						<?php echo $form->textField($model,'cridit_card_balance_3',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_balance_3'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_other'); ?>
						<?php echo $form->textField($model,'monthly_car_other'); ?>
						<?php echo $form->error($model,'monthly_car_other'); ?>
					</div>
				</td>
			</tr>
				<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_min_4'); ?>
						<?php echo $form->textField($model,'cridit_card_min_4',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_min_4'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_balance_4'); ?>
						<?php echo $form->textField($model,'cridit_card_balance_4',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_balance_4'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_payment_3'); ?>
						<?php echo $form->textField($model,'monthly_car_payment_3',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'monthly_car_payment_3'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_balance_3'); ?>
						<?php echo $form->textField($model,'monthly_car_balance_3'); ?>
						<?php echo $form->error($model,'monthly_car_balance_3'); ?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_min_5'); ?>
						<?php echo $form->textField($model,'cridit_card_min_5',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_min_5'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'cridit_card_balance_5'); ?>
						<?php echo $form->textField($model,'cridit_card_balance_5',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'cridit_card_balance_5'); ?>
					</div>
				</td>
				<td>
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_payment_4'); ?>
						<?php echo $form->textField($model,'monthly_car_payment_4',array('size'=>60,'maxlength'=>255)); ?>
						<?php echo $form->error($model,'monthly_car_payment_4'); ?>
					</div>
					
					<div class="sub-row">
						<?php echo $form->labelEx($model,'monthly_car_balance_4'); ?>
						<?php echo $form->textField($model,'monthly_car_balance_4'); ?>
						<?php echo $form->error($model,'monthly_car_balance_4'); ?>
					</div>
				</td>
			</tr>
		</table>
	</div>


	<div class="row">
		<h3>Other Expenses</h3>
		<div class="sub-row">
			<?php echo $form->labelEx($model,'expenses_wage'); ?>
			<?php echo $form->textField($model,'expenses_wage',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'expenses_wage'); ?>
		</div>
		
		<div class="sub-row">
			<?php echo $form->labelEx($model,'expenses_child_support'); ?>
			<?php echo $form->textField($model,'expenses_child_support',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'expenses_child_support'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'expenses_alimony'); ?>
			<?php echo $form->textField($model,'expenses_alimony',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'expenses_alimony'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'expenses_other'); ?>
			<?php echo $form->textField($model,'expenses_other',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'expenses_other'); ?>
		</div>
	</div>
	

	<div class="row seprator">
		<?php echo $form->labelEx($model,'num_of_cars'); ?>
		<?php echo $form->textField($model,'num_of_cars'); ?>
		<?php echo $form->error($model,'num_of_cars'); ?>
	</div>


	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'monthly_car_insurnce'); ?>
			<?php echo $form->textField($model,'monthly_car_insurnce',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'monthly_car_insurnce'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'gasolina'); ?>
			<?php echo $form->textField($model,'gasolina',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'gasolina'); ?>
		</div>
	</div>
	
	<div class="row seprator">
		<h2>UTILITIES</h2>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_calbe'); ?>
			<?php echo $form->textField($model,'utilities_calbe',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_calbe'); ?>
		</div>
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_electricidad'); ?>
			<?php echo $form->textField($model,'utilities_electricidad',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_electricidad'); ?>
		</div>
	</div>	

	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_gas'); ?>
			<?php echo $form->textField($model,'utilities_gas',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_gas'); ?>
		</div>
		
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_agua'); ?>
			<?php echo $form->textField($model,'utilities_agua',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_agua'); ?>
		</div>
	</div>

	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_tel'); ?>
			<?php echo $form->textField($model,'utilities_tel',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_tel'); ?>
		</div>
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_cellular'); ?>
			<?php echo $form->textField($model,'utilities_cellular',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_cellular'); ?>
		</div>
	</div>

	<div class="row">	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_internet'); ?>
			<?php echo $form->textField($model,'utilities_internet',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_internet'); ?>
		</div>
		
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_basura'); ?>
			<?php echo $form->textField($model,'utilities_basura',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_basura'); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_groceries'); ?>
			<?php echo $form->textField($model,'utilities_groceries',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_groceries'); ?>
		</div>
	
		<div class="sub-row">
			<?php echo $form->labelEx($model,'utilities_otro'); ?>
			<?php echo $form->textField($model,'utilities_otro',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'utilities_otro'); ?>
		</div>
	</div>
	
	<div class="row" style="float:right;">
			<?php echo $form->labelEx($model,'total'); ?>
			<?php echo $form->textField($model,'total',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'total'); ?>
	</div>
	<div class=" buttons" style="clear:both; text-align: center; padding: 20px 0px 25px;">
		<?php echo CHtml::submitButton($model->isNewRecord ? '' : '',array('id'=>'send_form','class'=>"button")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
	  $("#NewIntake_tell").mask("(999) 999-9999");
	  $("#NewIntake_cell").mask("(999) 999-9999");
	  $("#NewIntake_employer_tel").mask("(999) 999-9999");
	 // $("#NewIntake_loan_balance_1").maskMoney({symbol:'$ '});

</script>