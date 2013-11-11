<?php

/**
 * This is the model class for table "new_intake".
 *
 * The followings are the available columns in table 'new_intake':
 * @property integer $id
 * @property string $representative
 * @property string $date
 * @property string $name
 * @property string $ss
 * @property string $dob
 * @property string $co_name
 * @property string $co_ss
 * @property string $co_dob
 * @property string $tell
 * @property string $cell
 * @property string $email
 * @property string $home_address
 * @property string $home_zip
 * @property string $mailing_address
 * @property string $mailing_zip
 * @property string $mortgage_company_1
 * @property string $loan_number_1
 * @property string $mortgage_payment
 * @property string $loan_balance_1
 * @property string $tax_insurence
 * @property string $mortgage_company_2
 * @property string $loan_number_2
 * @property string $mortgage_payment_2
 * @property string $loan_balance_2
 * @property integer $behind_mortgage_payment
 * @property integer $mortgage_payment_months
 * @property integer $home_in_foreclosure
 * @property string $sale_date
 * @property string $employer_name
 * @property string $employer_tel
 * @property string $supervisor
 * @property string $start_date
 * @property string $monthly_gross_incom
 * @property string $monthly_gross_incom_net
 * @property integer $monthly_gross_incom_self_employed
 * @property integer $monthly_gross_incom_wage_earner
 * @property string $co_monthly_gross_incom
 * @property integer $co_monthly_gross_incom_self_employed
 * @property string $co_monthly_gross_incom_wage_earner
 * @property string $co_monthly_gross_incom_net
 * @property string $additional_income_social_sec
 * @property string $additional_income_unemployment
 * @property string $additional_income_side_job
 * @property string $additional_income_pension
 * @property string $additional_income_contribution
 * @property string $additional_income_child_support
 * @property string $additional_income_alimony
 * @property string $additional_income_IRA
 * @property string $additional_income_other
 * @property string $hear_about_us_relative
 * @property string $hear_about_us_radio
 * @property string $notes
 * @property string $hardship_explanation
 * @property string $HOA
 * @property string $address
 * @property string $fee
 * @property integer $monthly
 * @property integer $quarterly
 * @property string $people_in_household
 * @property string $under_18
 * @property string $is_field_bankuptcy
 * @property string $case_num
 * @property string $filing_date
 * @property string $is_discharged
 * @property string $own_properties
 * @property string $direccion_1
 * @property string $direccion_2
 * @property string $direccion_3
 * @property string $payment_1
 * @property string $payment_2
 * @property string $payment_3
 * @property string $check_account_balance
 * @property string $savings
 * @property string $indicate_rented_1
 * @property string $indicate_rented_2
 * @property string $indicate_rented_3
 * @property string $cridit_card_min_1
 * @property string $cridit_card_min_2
 * @property string $cridit_card_min_3
 * @property string $cridit_card_min_4
 * @property string $cridit_card_min_5
 * @property string $cridit_card_balance_1
 * @property string $cridit_card_balance_2
 * @property string $cridit_card_balance_3
 * @property string $cridit_card_balance_4
 * @property string $cridit_card_balance_5
 * @property string $monthly_car_payment_1
 * @property string $monthly_car_payment_2
 * @property string $monthly_car_payment_3
 * @property string $monthly_car_payment_4
 * @property integer $monthly_car_balance_1
 * @property integer $monthly_car_balance_2
 * @property integer $monthly_car_balance_3
 * @property integer $monthly_car_balance_4
 * @property integer $monthly_car_other
 * @property string $expenses_wage
 * @property string $expenses_alimony
 * @property string $expenses_child_support
 * @property string $expenses_other
 * @property integer $num_of_cars
 * @property string $monthly_car_insurnce
 * @property string $gasolina
 * @property string $utilities_calbe
 * @property string $utilities_gas
 * @property string $utilities_tel
 * @property string $utilities_internet
 * @property string $utilities_groceries
 * @property string $utilities_electricidad
 * @property string $utilities_agua
 * @property string $utilities_cellular
 * @property string $utilities_basura
 * @property string $utilities_otro
 * @property string $total
 */
class NewIntake extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NewIntake the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'new_intake';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('representative, date, name, ss, dob, co_name, co_ss, co_dob, tell, cell, email, home_address, home_zip, mailing_address, mailing_zip, mortgage_company_1, loan_number_1, mortgage_payment, loan_balance_1, tax_insurence, mortgage_company_2, loan_number_2, mortgage_payment_2, loan_balance_2, behind_mortgage_payment, mortgage_payment_months, home_in_foreclosure, sale_date, employer_name, employer_tel, supervisor, start_date, monthly_gross_incom, monthly_gross_incom_net, monthly_gross_incom_self_employed, monthly_gross_incom_wage_earner, co_monthly_gross_incom, co_monthly_gross_incom_self_employed, co_monthly_gross_incom_wage_earner, co_monthly_gross_incom_net, additional_income_social_sec, additional_income_unemployment, additional_income_side_job, additional_income_pension, additional_income_contribution, additional_income_child_support, additional_income_alimony, additional_income_IRA, additional_income_other, hear_about_us_relative, hear_about_us_radio, notes, hardship_explanation, HOA, address, fee, monthly, quarterly, people_in_household, under_18, is_field_bankuptcy, case_num, filing_date, is_discharged, own_properties, direccion_1, direccion_2, direccion_3, payment_1, payment_2, payment_3, check_account_balance, savings, indicate_rented_1, indicate_rented_2, indicate_rented_3, cridit_card_min_1, cridit_card_min_2, cridit_card_min_3, cridit_card_min_4, cridit_card_min_5, cridit_card_balance_1, cridit_card_balance_2, cridit_card_balance_3, cridit_card_balance_4, cridit_card_balance_5, monthly_car_payment_1, monthly_car_payment_2, monthly_car_payment_3, monthly_car_payment_4, monthly_car_balance_1, monthly_car_balance_2, monthly_car_balance_3, monthly_car_balance_4, monthly_car_other, expenses_wage, expenses_alimony, expenses_child_support, expenses_other, num_of_cars, monthly_car_insurnce, gasolina, utilities_calbe, utilities_gas, utilities_tel, utilities_internet, utilities_groceries, utilities_electricidad, utilities_agua, utilities_cellular, utilities_basura, utilities_otro, total', 'required'),
			array('behind_mortgage_payment, mortgage_payment_months, home_in_foreclosure, monthly_gross_incom_self_employed, monthly_gross_incom_wage_earner, co_monthly_gross_incom_self_employed, monthly, quarterly, monthly_car_balance_1, monthly_car_balance_2, monthly_car_balance_3, monthly_car_balance_4, monthly_car_other, num_of_cars', 'numerical', 'integerOnly'=>true),
			array('representative, name, ss, dob, co_name, co_ss, co_dob, tell, cell, email, home_address, home_zip, mailing_address, mailing_zip, mortgage_company_1, loan_number_1, mortgage_payment, loan_balance_1, tax_insurence, mortgage_company_2, loan_number_2, mortgage_payment_2, loan_balance_2, sale_date, employer_name, employer_tel, supervisor, monthly_gross_incom, monthly_gross_incom_net, co_monthly_gross_incom, co_monthly_gross_incom_net, additional_income_social_sec, additional_income_unemployment, additional_income_side_job, additional_income_pension, additional_income_contribution, additional_income_child_support, additional_income_alimony, additional_income_IRA, additional_income_other, hear_about_us_relative, hear_about_us_radio, HOA, address, fee, people_in_household, under_18, is_field_bankuptcy, case_num, is_discharged, own_properties, direccion_1, direccion_2, direccion_3, payment_1, payment_2, payment_3, check_account_balance, savings, indicate_rented_1, indicate_rented_2, indicate_rented_3, cridit_card_min_1, cridit_card_min_2, cridit_card_min_3, cridit_card_min_4, cridit_card_min_5, cridit_card_balance_1, cridit_card_balance_2, cridit_card_balance_3, cridit_card_balance_5, monthly_car_payment_1, monthly_car_payment_2, monthly_car_payment_3, monthly_car_payment_4, expenses_wage, expenses_alimony, expenses_child_support, expenses_other, monthly_car_insurnce, gasolina, utilities_calbe, utilities_gas, utilities_tel, utilities_internet, utilities_groceries, utilities_electricidad, utilities_agua, utilities_cellular, utilities_basura, utilities_otro, total', 'length', 'max'=>255),
			array('co_monthly_gross_incom_wage_earner', 'length', 'max'=>20),
			array('cridit_card_balance_4', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, representative, date, name, ss, dob, co_name, co_ss, co_dob, tell, cell, email, home_address, home_zip, mailing_address, mailing_zip, mortgage_company_1, loan_number_1, mortgage_payment, loan_balance_1, tax_insurence, mortgage_company_2, loan_number_2, mortgage_payment_2, loan_balance_2, behind_mortgage_payment, mortgage_payment_months, home_in_foreclosure, sale_date, employer_name, employer_tel, supervisor, start_date, monthly_gross_incom, monthly_gross_incom_net, monthly_gross_incom_self_employed, monthly_gross_incom_wage_earner, co_monthly_gross_incom, co_monthly_gross_incom_self_employed, co_monthly_gross_incom_wage_earner, co_monthly_gross_incom_net, additional_income_social_sec, additional_income_unemployment, additional_income_side_job, additional_income_pension, additional_income_contribution, additional_income_child_support, additional_income_alimony, additional_income_IRA, additional_income_other, hear_about_us_relative, hear_about_us_radio, notes, hardship_explanation, HOA, address, fee, monthly, quarterly, people_in_household, under_18, is_field_bankuptcy, case_num, filing_date, is_discharged, own_properties, direccion_1, direccion_2, direccion_3, payment_1, payment_2, payment_3, check_account_balance, savings, indicate_rented_1, indicate_rented_2, indicate_rented_3, cridit_card_min_1, cridit_card_min_2, cridit_card_min_3, cridit_card_min_4, cridit_card_min_5, cridit_card_balance_1, cridit_card_balance_2, cridit_card_balance_3, cridit_card_balance_4, cridit_card_balance_5, monthly_car_payment_1, monthly_car_payment_2, monthly_car_payment_3, monthly_car_payment_4, monthly_car_balance_1, monthly_car_balance_2, monthly_car_balance_3, monthly_car_balance_4, monthly_car_other, expenses_wage, expenses_alimony, expenses_child_support, expenses_other, num_of_cars, monthly_car_insurnce, gasolina, utilities_calbe, utilities_gas, utilities_tel, utilities_internet, utilities_groceries, utilities_electricidad, utilities_agua, utilities_cellular, utilities_basura, utilities_otro, total', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'representative' => 'Representative',
			'date' => 'Date',
			'name' => 'Name',
			'ss' => 'SS',
			'dob' => 'DOB',
			'co_name' => 'Co-Borrower',
			'co_ss' => 'SS',
			'co_dob' => 'DOB',
			'tell' => 'Tel',
			'cell' => 'Cell',
			'email' => 'Email',
			'home_address' => 'Home Address',
			'home_zip' => 'Zip',
			'mailing_address' => 'Mailing Address',
			'mailing_zip' => 'Zip',
			'mortgage_company_1' => '1<sup>st</sup>Mortgage Company',
			'loan_number_1' => 'Loan Number',
			'mortgage_payment' => 'Mortgage Payment',
			'loan_balance_1' => 'Loan Balance',
			'tax_insurence' => 'Include Taxes and Insurence',
			'mortgage_company_2' => '2<sup>nd</sup>Mortgage Company',
			'loan_number_2' => 'Loan Number',
			'mortgage_payment_2' => 'Mortgage Payment',
			'loan_balance_2' => 'Loan Balance',
			'behind_mortgage_payment' => 'Are you behind on your mortgage payment?',
			'mortgage_payment_months' => 'if yes, how many months',
			'home_in_foreclosure' => 'Is your home currently in foreclosure',
			'sale_date' => 'if yes, is there a sale date',
			'employer_name' => 'Employer Name',
			'employer_tel' => 'Tel',
			'supervisor' => 'Supervisor',
			'start_date' => 'Start Date',
			'monthly_gross_incom' => 'Monthly Gross Income',
			'monthly_gross_incom_net' => 'Net',
			'monthly_gross_incom_self_employed' => 'Self-employed',
			'monthly_gross_incom_wage_earner' => 'Wage earner',
			'co_monthly_gross_incom' => 'CO-Borrower\'s Income',
			'co_monthly_gross_incom_self_employed' => 'Self-employed',
			'co_monthly_gross_incom_wage_earner' => 'Wage earner',
			'co_monthly_gross_incom_net' => 'Net',
			'additional_income_social_sec' => 'Social Sec',
			'additional_income_unemployment' => 'Unemployment',
			'additional_income_side_job' => 'Side Job',
			'additional_income_pension' => 'Pension',
			'additional_income_contribution' => 'Contribution',
			'additional_income_child_support' => 'Child Support',
			'additional_income_alimony' => 'Alimony',
			'additional_income_IRA' => 'IRA/CD/40K',
			'additional_income_other' => 'Other',
			'hear_about_us_relative' => 'Coutesy cal/Friend/ relative Name',
			'hear_about_us_radio' => 'Radio',
			'notes' => 'Notes',
			'hardship_explanation' => 'Hardship Explanation',
			'HOA' => 'HOA',
			'address' => 'Address',
			'fee' => 'Fee',
			'monthly' => 'Monthly',
			'quarterly' => 'Quarterly',
			'people_in_household' => 'People In Household?',
			'under_18' => 'Under 18',
			'is_field_bankuptcy' => 'Have you Field Bankuptcy',
			'case_num' => 'Case Number',
			'filing_date' => 'Filing Date',
			'is_discharged' => 'Has it discharged',
			'own_properties' => 'How many properties do you own?',
			'direccion_1' => 'Direccion',
			'direccion_2' => 'Direccion',
			'direccion_3' => 'Direccion',
			'payment_1' => 'Pago mensual',
			'payment_2' => 'Pago mensual',
			'payment_3' => 'Pago mensual',
			'check_account_balance' => 'Checking Account Balance',
			'savings' => 'Savings',
			'indicate_rented_1' => 'Yes/No',
			'indicate_rented_2' => 'Yes/No',
			'indicate_rented_3' => 'Yes/No',
			'cridit_card_min_1' => 'Minimum Payment',
			'cridit_card_min_2' => 'Minimum Payment',
			'cridit_card_min_3' => 'Minimum Payment',
			'cridit_card_min_4' => 'Minimum Payment',
			'cridit_card_min_5' => 'Minimum Payment',
			'cridit_card_balance_1' => 'Balance',
			'cridit_card_balance_2' => 'Balance',
			'cridit_card_balance_3' => 'Balance',
			'cridit_card_balance_4' => 'Balance',
			'cridit_card_balance_5' => 'Balance',
			'monthly_car_payment_1' => '',
			'monthly_car_payment_2' => '',
			'monthly_car_payment_3' => '',
			'monthly_car_payment_4' => '',
			'monthly_car_balance_1' => 'Balance',
			'monthly_car_balance_2' => 'Balance',
			'monthly_car_balance_3' => 'Balance',
			'monthly_car_balance_4' => 'Balance',
			'monthly_car_other' => 'Other',
			'expenses_wage' => 'Wage garnishment',
			'expenses_alimony' => 'Alimony',
			'expenses_child_support' => 'Child Support',
			'expenses_other' => 'Other',
			'num_of_cars' => 'How many cars you own?',
			'monthly_car_insurnce' => 'Monthly Car Insurnce',
			'gasolina' => 'Gasolina',
			'utilities_calbe' => 'Calbe',
			'utilities_gas' => 'Gas',
			'utilities_tel' => 'Tel',
			'utilities_internet' => 'Internet',
			'utilities_groceries' => 'Groceries',
			'utilities_electricidad' => 'Electricidad',
			'utilities_agua' => 'Agua',
			'utilities_cellular' => 'Cellular',
			'utilities_basura' => 'Basura',
			'utilities_otro' => 'Otro',
			'total' => 'Total',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('representative',$this->representative,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('ss',$this->ss,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('co_name',$this->co_name,true);
		$criteria->compare('co_ss',$this->co_ss,true);
		$criteria->compare('co_dob',$this->co_dob,true);
		$criteria->compare('tell',$this->tell,true);
		$criteria->compare('cell',$this->cell,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('home_address',$this->home_address,true);
		$criteria->compare('home_zip',$this->home_zip,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('mailing_zip',$this->mailing_zip,true);
		$criteria->compare('mortgage_company_1',$this->mortgage_company_1,true);
		$criteria->compare('loan_number_1',$this->loan_number_1,true);
		$criteria->compare('mortgage_payment',$this->mortgage_payment,true);
		$criteria->compare('loan_balance_1',$this->loan_balance_1,true);
		$criteria->compare('tax_insurence',$this->tax_insurence,true);
		$criteria->compare('mortgage_company_2',$this->mortgage_company_2,true);
		$criteria->compare('loan_number_2',$this->loan_number_2,true);
		$criteria->compare('mortgage_payment_2',$this->mortgage_payment_2,true);
		$criteria->compare('loan_balance_2',$this->loan_balance_2,true);
		$criteria->compare('behind_mortgage_payment',$this->behind_mortgage_payment);
		$criteria->compare('mortgage_payment_months',$this->mortgage_payment_months);
		$criteria->compare('home_in_foreclosure',$this->home_in_foreclosure);
		$criteria->compare('sale_date',$this->sale_date,true);
		$criteria->compare('employer_name',$this->employer_name,true);
		$criteria->compare('employer_tel',$this->employer_tel,true);
		$criteria->compare('supervisor',$this->supervisor,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('monthly_gross_incom',$this->monthly_gross_incom,true);
		$criteria->compare('monthly_gross_incom_net',$this->monthly_gross_incom_net,true);
		$criteria->compare('monthly_gross_incom_self_employed',$this->monthly_gross_incom_self_employed);
		$criteria->compare('monthly_gross_incom_wage_earner',$this->monthly_gross_incom_wage_earner);
		$criteria->compare('co_monthly_gross_incom',$this->co_monthly_gross_incom,true);
		$criteria->compare('co_monthly_gross_incom_self_employed',$this->co_monthly_gross_incom_self_employed);
		$criteria->compare('co_monthly_gross_incom_wage_earner',$this->co_monthly_gross_incom_wage_earner,true);
		$criteria->compare('co_monthly_gross_incom_net',$this->co_monthly_gross_incom_net,true);
		$criteria->compare('additional_income_social_sec',$this->additional_income_social_sec,true);
		$criteria->compare('additional_income_unemployment',$this->additional_income_unemployment,true);
		$criteria->compare('additional_income_side_job',$this->additional_income_side_job,true);
		$criteria->compare('additional_income_pension',$this->additional_income_pension,true);
		$criteria->compare('additional_income_contribution',$this->additional_income_contribution,true);
		$criteria->compare('additional_income_child_support',$this->additional_income_child_support,true);
		$criteria->compare('additional_income_alimony',$this->additional_income_alimony,true);
		$criteria->compare('additional_income_IRA',$this->additional_income_IRA,true);
		$criteria->compare('additional_income_other',$this->additional_income_other,true);
		$criteria->compare('hear_about_us_relative',$this->hear_about_us_relative,true);
		$criteria->compare('hear_about_us_radio',$this->hear_about_us_radio,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('hardship_explanation',$this->hardship_explanation,true);
		$criteria->compare('HOA',$this->HOA,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('fee',$this->fee,true);
		$criteria->compare('monthly',$this->monthly);
		$criteria->compare('quarterly',$this->quarterly);
		$criteria->compare('people_in_household',$this->people_in_household,true);
		$criteria->compare('under_18',$this->under_18,true);
		$criteria->compare('is_field_bankuptcy',$this->is_field_bankuptcy,true);
		$criteria->compare('case_num',$this->case_num,true);
		$criteria->compare('filing_date',$this->filing_date,true);
		$criteria->compare('is_discharged',$this->is_discharged,true);
		$criteria->compare('own_properties',$this->own_properties,true);
		$criteria->compare('direccion_1',$this->direccion_1,true);
		$criteria->compare('direccion_2',$this->direccion_2,true);
		$criteria->compare('direccion_3',$this->direccion_3,true);
		$criteria->compare('payment_1',$this->payment_1,true);
		$criteria->compare('payment_2',$this->payment_2,true);
		$criteria->compare('payment_3',$this->payment_3,true);
		$criteria->compare('check_account_balance',$this->check_account_balance,true);
		$criteria->compare('savings',$this->savings,true);
		$criteria->compare('indicate_rented_1',$this->indicate_rented_1,true);
		$criteria->compare('indicate_rented_2',$this->indicate_rented_2,true);
		$criteria->compare('indicate_rented_3',$this->indicate_rented_3,true);
		$criteria->compare('cridit_card_min_1',$this->cridit_card_min_1,true);
		$criteria->compare('cridit_card_min_2',$this->cridit_card_min_2,true);
		$criteria->compare('cridit_card_min_3',$this->cridit_card_min_3,true);
		$criteria->compare('cridit_card_min_4',$this->cridit_card_min_4,true);
		$criteria->compare('cridit_card_min_5',$this->cridit_card_min_5,true);
		$criteria->compare('cridit_card_balance_1',$this->cridit_card_balance_1,true);
		$criteria->compare('cridit_card_balance_2',$this->cridit_card_balance_2,true);
		$criteria->compare('cridit_card_balance_3',$this->cridit_card_balance_3,true);
		$criteria->compare('cridit_card_balance_4',$this->cridit_card_balance_4,true);
		$criteria->compare('cridit_card_balance_5',$this->cridit_card_balance_5,true);
		$criteria->compare('monthly_car_payment_1',$this->monthly_car_payment_1,true);
		$criteria->compare('monthly_car_payment_2',$this->monthly_car_payment_2,true);
		$criteria->compare('monthly_car_payment_3',$this->monthly_car_payment_3,true);
		$criteria->compare('monthly_car_payment_4',$this->monthly_car_payment_4,true);
		$criteria->compare('monthly_car_balance_1',$this->monthly_car_balance_1);
		$criteria->compare('monthly_car_balance_2',$this->monthly_car_balance_2);
		$criteria->compare('monthly_car_balance_3',$this->monthly_car_balance_3);
		$criteria->compare('monthly_car_balance_4',$this->monthly_car_balance_4);
		$criteria->compare('monthly_car_other',$this->monthly_car_other);
		$criteria->compare('expenses_wage',$this->expenses_wage,true);
		$criteria->compare('expenses_alimony',$this->expenses_alimony,true);
		$criteria->compare('expenses_child_support',$this->expenses_child_support,true);
		$criteria->compare('expenses_other',$this->expenses_other,true);
		$criteria->compare('num_of_cars',$this->num_of_cars);
		$criteria->compare('monthly_car_insurnce',$this->monthly_car_insurnce,true);
		$criteria->compare('gasolina',$this->gasolina,true);
		$criteria->compare('utilities_calbe',$this->utilities_calbe,true);
		$criteria->compare('utilities_gas',$this->utilities_gas,true);
		$criteria->compare('utilities_tel',$this->utilities_tel,true);
		$criteria->compare('utilities_internet',$this->utilities_internet,true);
		$criteria->compare('utilities_groceries',$this->utilities_groceries,true);
		$criteria->compare('utilities_electricidad',$this->utilities_electricidad,true);
		$criteria->compare('utilities_agua',$this->utilities_agua,true);
		$criteria->compare('utilities_cellular',$this->utilities_cellular,true);
		$criteria->compare('utilities_basura',$this->utilities_basura,true);
		$criteria->compare('utilities_otro',$this->utilities_otro,true);
		$criteria->compare('total',$this->total,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}