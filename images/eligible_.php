<?php 
include("php/validation_session_no_destroy.php");
$_SESSION["customer_name_error"]=0;
$_SESSION["employeee_error"]=0;
$_SESSION["login_pt_error"]=0;
$_SESSION["pass_pt_error"]=0;

$_SESSION["Address_Line_1_error"]=0;
$_SESSION["Address_Line_2_error"]=0;
$_SESSION["customer_city_error"]=0;
$_SESSION["customer_state_error"]=0;
$_SESSION["customer_zipCode_error"]=0;
$_SESSION["customer_phone_number_1_error"]=0;
$_SESSION["customer_phone_number_2_error"]=0;

?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="What is Financial Relief Alternative all about?
,

Am I eligible for a Home Loan Modification?

Please answer these questions to verify eligibility.

This questionnaire is just to pre-qualify your eligibility. 
" />


<meta name="keywords" content="Am I eligible for a Home Loan Modification?,your eligibility, mortgage payments?,FRA" />


<title>FRA - Am I eligible?</title>
<link href="css/commonstyles.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationSelect.css" rel="stylesheet" type="text/css"/>
<link href="css/loader.css" rel="stylesheet" type="text/css" />

<script type="text/javascript"> 
contenido_textarea = "" ;
num_caracteres_permitidos = 10; 

function valida_longitud(){ 
   alert("Validando");

   num_caracteres = document.forms[0].texto.value.length 

   if (num_caracteres < num_caracteres_permitidos){ 
      document.forms[0].texto.value = contenido_textarea 
   }else{ 
      contenido_textarea = document.forms[0].texto.value	
   } 

   if (num_caracteres <= num_caracteres_permitidos){ 
      document.forms[0].caracteres.style.color="#ff0000"; 
   }else{ 
      document.forms[0].caracteres.style.color="#000000"; 
   } 

   cuenta() 
}
 
function cuenta(){ 
   document.forms[0].caracteres.value=document.forms[0].texto.value.length 
} 



	 function submitForm(formName) { // submits form
	
		document.getElementById("overlay_div").style.display = "none";
        document.getElementById(formName).submit();
    }
	function validateonsubmit(){
	var myForm=document.getElementById("frm");
	var SS= Spry.Widget.Form.validate(myForm);
	if(SS==true){
	document.getElementById("overlay_div").style.display = "block";
        //if (document.getElementById("eligibiltyquestionaire")) {
    setTimeout('submitForm("frm")',10000); // set timout 

	}
}


/* Function to able/disable text field of the question 12, it is used to choose a lender that isn't in list of Lenders */
   function  disableText(){
	   var chosenLender=document.getElementById('who_is_lender');
	   var otherLender=document.getElementById('question12');
	   
	   if (chosenLender.value ==  "Other") 
	   		otherLender.disabled=false;
		else 
			otherLender.disabled=true;    
   }
   
   
   //word count (question21)
	function counterWord(){
		const minWord = 25  																				//minimum of words allowed
		var  text=document.getElementById('question21').value.split(" ");		//Words as tokens
		if  (text.length  < minWord ){
		     alert("por favor, ingrese un minimo de 25 palabra");
			 document.getElementById('question21').focus();
		}
	}
  </script> 
</head>

<body id="elegible">
<div id="overlay_div" style="display:none"><div id="preloader" style="margin-top: 18%;color:#FFFFFF; font-size: 18px;text-align:center;">Please wait while we process your request! </div><div style="text-align:center"><img style="margin-top:10px;" src="images/formLoader.gif"></div></div>

<div id="google_translate_element" style=" position:absolute;top: 48px;left: 825px;">
  
  
  
  
</div>

<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  }, 'google_translate_element');
}
</script>


<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style type="text/css">
.newClass{
border: 1px solid #A9B4BB; 
padding: 2px;
width:95px;

}
.newClass_14{
border: 1px solid #A9B4BB; 
padding: 2px;
width:40px;
height:10px;
}
.newClass2{
float:left;
width:0 auto;
/*margin:-5px 0 0 0;*/
margin:0px 0 0 10px;
}
</style>
<script>
var highlightcolor="#FFFFCC"
var ns6=document.getElementById&&!document.all
var previous=''
var eventobj
var intended=/INPUT|TEXTAREA|SELECT|OPTION/

    function checkel(which)
    {
        if (which.style&&intended.test(which.tagName))
        {
            if (ns6&&eventobj.nodeType==3)
            eventobj=eventobj.parentNode.parentNode
            return true
        }
        else
            return false
    }
    function highlight(e)
    {
        eventobj=ns6? e.target : event.srcElement
        if (previous!='')
        {
            if (checkel(previous))
                previous.style.backgroundColor='#FFFFCC'
                previous=eventobj
                if (checkel(eventobj))
                    eventobj.style.backgroundColor=highlightcolor
         }
         else
         {
             if (checkel(eventobj))
                eventobj.style.backgroundColor=highlightcolor
                previous=eventobj
         }
    }
</script>
<img src="images/maha_elegible_clickhere_over_v001.png" width="70" height="15" class="himg" />
<img src="images/maha_elegible_submit_over_v001.png" width="207" height="60" class="himg" />
<div id="wrapper">
<div id="header"><img src="images/maha_header_v001.png" /></div>
		<div id="navigation">
			<ul id="main_nav">
				<li><a class="home" href="index.php" style="padding-top:7px;"><img src="images/maha_home_nav_image_v001.png" alt="Home" /></a></li>
				<li><a class="elegible" href="#">Am I Eligible?</a></li>
				<li><a class="about" href="about.php">About FRA</a></li>
				<li><a class="faq" href="faq.php">FAQ</a></li>
				<li><a class="testimonials" href="testimonials.php">Testimonials</a></li>
				<li><a class="spanish" href="community.php"> My Community</a></li>
				<li><a class="contact" href="contact.php">Contact Us</a></li>
				<li><a class="login" href="login.php"><?php echo $login; ?></a></li>
			</ul>
		</div>


           <div style="z-index: 3" >
   <form style=" position:absolute;top: 30px;left: 825px;"  action="_faq.php"   method="post" >
    
<input type="text"  name="s1" size="18"  value ="Type your question"   style="color:#C0C0C0 ; font-family:Georgia, Arial;" onfocus="if (this.value=='Type your question') this.value = '';this.style.color='#000000'"  onBlur="if (this.value=='')
{this.value = 'Type your question';this.style.color='#C0C0C0'}" >
 <input  title="Search" type="submit" style="background: url('s_img.jpg') no-repeat scroll 0 0 transparent; height: 17px; color: #000000;;cursor: pointer; width: 40px;padding-bottom: 2px;"  value=""   >
  
</form></div>

<a href="file:///C|/PerfLogs">PerfLogs</a><div id="content">
   <div id="title_box">
	 <div id="title_text_box">
     	<p style="font-size:20px;" align="center" > <strong>  Please answer these questions to verify your eligibility </strong></p> 


<p style="clear:both font-size:11px; text-align:center; font-size: 14px;">You must complete the following application in order to have access to the (FRA) Program and obtain detailed answers to question that will help you obtain a possible Principal Reduction and Payment reduction.</p>
       </div>
</div>
<br>
			<form action="<?php if ($_SESSION["autentificado_maha"] == "SI"){echo "http://www.maha4u.com/congratulations.php?maha4u_maha_token=d63cda9cab90cc8cdd2bf306f7ce0ae4";}else{echo "congratulations.php";}?>" enctype="multipart/form-data" id="frm" name="frm" method="post">
			
			<!--<form action="php/members_eligible_php.php?eligibility=maha4u&token=d63cda9cab90cc8cdd2bf306f7ce0ae4" enctype="multipart/form-data" id="" name="" method="post">-->
			
            
			<div id="left_col">
				<ul>
                
                	<!-- -----------------------------------------Left, Question1 ------------------------------------------ -->
					<li class="form_box_dark">
						<p class="question_holder">
                           <strong>1.</strong>
                          Are you facing financial hardship, which has caused you 
                           trouble to pay your mortgage or you will soon fall behind?
                        </p>
						<p class="answer_holder" id="radioValidation1">
							<input type="radio" name="is_facing_hardship" value="Yes" id="is_facing_hardship_0" />
                            <label    for="is_facing_hardship_0">Yes</label>
							<input type="radio" name="is_facing_hardship" value="No" id="is_facing_hardship_1" />
                            <label    for="is_facing_hardship_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- -----------------------------------------Left, Question2 ------------------------------------------ -->
					<li class="form_box_light">
						<p class="question_holder" style="padding-top:24px;">
                        	<strong>2.</strong>
                            Is this your primary residence?
                        </p>
						<p class="answer_holder" id="radioValidation2">
                        	<input type="radio" name="is_primary_home" value="Yes" id="is_primary_home_0" />
                            <label for="is_primary_home_0">Yes</label>
							<input type="radio" name="is_primary_home" value="No" id="is_primary_home_1" />
                            <label for="is_primary_home_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- -----------------------------------------Left, Question3 ------------------------------------------ -->
					<li class="form_box_dark"> 
						<p class="question_holder">
                        	<strong>3.</strong> 
                            Is your mortgage equal to or less than $729,750?<br />
                            <span id="questionNote">(Higher limits are allowed for owner-occupied properties with 2-4 units.)</span>
                        </p>
						<p class="answer_holder" id="radioValidation3">
							<input type="radio" name="is_first_mortgage_equal_less" value="Yes" id="is_first_mortgage_equal_less_0" />
                            <label for="is_first_mortgage_equal_less_0">Yes</label>
							<input type="radio" name="is_first_mortgage_equal_less" value="No" id="is_first_mortgage_equal_less_1" />
                            <label for="is_first_mortgage_equal_less_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- -----------------------------------------Left, Question4 ------------------------------------------ -->
					<li class="form_box_light">
                    	<p class="question_holder" style="padding-top:18px;">
                        	<strong>4.</strong>
                           Did you obtain your mortgage before January 1, 2009?
                         </p>
						<p class="answer_holder" id="radioValidation4">
                        	<input type="radio" name="is_before_2009" value="Yes" id="is_before_2009_0" />
                            <label for="is_before_2009_0">Yes</label>
							<input type="radio" name="is_before_2009" value="No" id="is_before_2009_1" />
                            <label for="is_before_2009_1">No</label>
                            <span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
					
                    <!-- -----------------------------------------Left, Question5 ------------------------------------------ -->
                    <li class="form_box_dark">
                  		<p class="question_holder">
                    		<strong>5.</strong>
                        	What’s your monthly mortgage payment?<br />
                        	<span id="questionNote">Include: (Principal, Interest, Taxes, and Insurance)</span>
                    	</p>
						<p class="answer_holder" id="textfieldValidation1">
                    		<label for="monthly_mortgage_payment">$</label>
							<input name="monthly_mortgage_payment" type="text" class="smallTextField" id="monthly_mortgage_payment" placeholder="Mortgage Pay" style="width:108px;" />
							<span class="textfieldRequiredMsg">This field is required</span>
							<span class="textfieldInvalidFormatMsg">Please enter<br/> a quantity</span>
						</p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- -----------------------------------------Left, Question6 ------------------------------------------ -->
					<li class="form_box_light" style="padding:0px, 0px;">
						<p class="question_holder">
                        	<strong>6.</strong> 
                            What’s your monthly gross income?<br />
                            <span id="questionNote">Note: (This is the income before taxes)</span><br />
                            What’s your Checking Account Balance<br />
                            What’s your Savings Account Balance</p>
						
                        <p class="answer_holder" id="textfieldValidation2" style="margin-top: 10px;">
							<label for="monthly_gross_income">$</label>
							<input name="monthly_gross_income" type="text" class="smallTextField" id="monthly_gross_income" style="width:108px;" placeholder="Monthly Income" />
							<span class="textfieldRequiredMsg">This field is required</span>
							<span class="textfieldInvalidFormatMsg">Please enter<br/> a quantity</span>
                  		</p>
                  		
                        <p class="answer_holder" id="textfieldValidation3" style="margin-top: 10px;">
                     		<label for="chk_acct_balance">$</label>
							<input name="chk_acct_balance" type="text" class="smallTextField" id="chk_acct_balance"  style="width:108px;" placeholder="Cheking Acct. BAL" />
							<span class="textfieldRequiredMsg">This field is required</span>
							<span class="textfieldInvalidFormatMsg">Please enter<br/> a quantity</span>
                  		</p>
                        
                        <p class="answer_holder" id="textfieldValidation4" style="margin-top: 10px;">
                  			<label for="savings_acct_balance">$</label>
							<input name="savings_acct_balance" type="text" class="smallTextField" id="savings_acct_balance"  style="width:108px;" placeholder="Savings Acct. BAL"/>
							<span class="textfieldRequiredMsg">This field is required</span>
							<span class="textfieldInvalidFormatMsg">Please enter<br/> a quantity</span>
                  		</p>
						<div style="clear:both;"></div>
					 </li><!-- New field here-->
                    
                     <!-- -----------------------------------------Left, Question7 ------------------------------------------ -->
					 <li class="form_box_dark">
                     	<p class="question_holder">
                        	<strong>7.</strong>
                            Please  specify your income<br/>
                           <span id="questionNote">
                           Note:  (other income may include social security, pension, 
                           alimony, child support,  unemployment, etc)</span>
                        </p>
						<p class="answer_holder2" id="radioValidation6" style="width:120px;">
                        	<input type="radio" name="income_type" value="wage_earner"    id="income_type_0" />
                            <label for="income_type_0">Wage earner</label><br />
							<input type="radio" name="income_type" value="self_employed" id="income_type_1" />
                            <label for="income_type_1">Self employed</label><br />
							<input type="radio" name="income_type" value="other"                id="income_type_2" />
                            <label for="income_type_2">other</label>
							<span class="radioRequiredMsg">Please specify your income</span>
						</p>
						<div style="clear:both;"></div>
					</li>
					<!-- New field here -->
                    
                     <!-- -----------------------------------------Left, Question8 ------------------------------------------ -->
					<li class="form_box_dark">
						<p class="question_holder">
                        	<strong>8.</strong>
                        	Has your house hold income dropped significantly from the time you received your mortgage?
                        </p>
						<p class="answer_holder" id="radioValidation7">
							<input type="radio" name="has_income_dropped" value="Yes" id="has_income_dropped_0" />
                            <label for="has_income_dropped_0">Yes</label>
							<input type="radio" name="has_income_dropped" value="No" id="has_income_dropped_1" />
                            <label for="has_income_dropped_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
                        </p>
						<div style="clear:both;"></div>
					</li>
					
                     <!-- -----------------------------------------Left, Question9 ------------------------------------------ -->
                    <li class="form_box_dark">
                    	<p class="question_holder" style="padding-top:20px;">
                        	<strong>9.</strong>
                            Have  you filed your last 2 tax returns?<br />
                            <span id="questionNote">Note:  (All schedules required)</span>
                        </p>
						<p class="answer_holder" id="radioValidation8">
                        	<input type="radio" name="filed_08_09_tax" value="Yes" id="filed_08_09_tax_0" />
                            <label for="filed_08_09_tax_0">Yes</label>
                            <input type="radio" name="filed_08_09_tax" value="No" id="filed_08_09_tax_1" >
                            <label for="filed_08_09_tax_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
					
                     <!-- -----------------------------------------Left, Question10 ------------------------------------------ -->
                    <li class="form_box_light">
                    	<p class="question_holder" style="padding-top:5px;">
                        	<strong>10.</strong> Do you have a 1st or 2nd mortgage?<br /><br /><br />
                        </p>
                        <p class="answer_holder" id="radioValidation9"  style="margin-top: 10px;">
                        	<input type="radio" name="want_keep_home" value="Yes" id="want_keep_home_0" 
                                        onclick="javascript:clearvalue('1')" />
                            <label for="want_keep_home_0" >Yes</label>
							<input type="radio" name="want_keep_home" value="No" id="want_keep_home_1" 
                                       onclick="javascript:setvalue('1')" />
                         	<label for="want_keep_home_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
                              
                        <p class="answer_holder" id="textfieldValidation5" style="margin-top: 10px;">
							<label for="question10a">$</label>
							<input name="question10a" type="text" id="question10a"  class="smallTextField" 
                                       onClick="highlight(event)"  onKeyUp="highlight(event)"  placeholder="1st Loan" />
							<span class="textfieldRequiredMsg">This field is required</span>
							<span class="textfieldInvalidFormatMsg">Please enter a quantity</span>
                       	</p>
                       
                      <p class="answer_holder" id="textfieldValidation6"  style="margin-top: 10px;">
                        	<label for="question10b">$</label>
							<input name="question10b" type="text" id="question10b"  class="smallTextField"
                                       onClick="highlight(event)"  onKeyUp="highlight(event)" placeholder="2st Loan" />
                            <span class="textfieldRequiredMsg">This field is required</span>
                            <span class="textfieldInvalidFormatMsg">Please enter a quantity</span>
                   	  </p>
						<div style="clear:both;"></div>
					</li>
				</ul> 
			</div> <!-- left-col -->
            
            
            <!-- ----------------------------------- LEFT COLUM -------------------------------------------------------- -->
			<div id="right_col">
            	<ul>
                	
                    <!-- ---------------------------------- Question 11------------------------------ -->
                    <li class="form_box_dark">
                    	<p class="question_holder">
                        	<strong>11.</strong> 
                        	What is the value of your home?<br />
                       		<span id="questionNote">If you don’t know the value of your home 
                        		<a href="#" id="infoWindowTrigger" class="button">Click Here</a></span><br />
						</p>
						<p class="answer_holder" id="textfieldValidation7">
                    		<label for="monthly_gross_income">$</label>
                        	<input name="monthly_gross_income2" type="text" class="smallTextField" id="monthly_gross_income" placeholder="Home Value" />
                        	<span class="textfieldRequiredMsg">This field is required</span>
                        	<span class="textfieldInvalidFormatMsg">Please enter<br/> a quantity</span>
						</p>
                    	<div id="infoWindow" style="display:none">
                    		<p style="position:absolute; right:-2px; top:-12px;">
                        	<a href="#close" id="closeWindowTrigger"><img src="images/maha_close_v001.png" /></a>
                        	</p>
							<p style="width:452px; border:2px solid #a5b6b8; background-color:#2f3739; padding:24px;">
                        		To get a current estimated value of your home please copy the following link and 
                            	paste it in a new browser, thank you.<br /><br />
                           	 <strong>http://www.zillow.com</strong>   &lt;---- Please copy and paste
                        	</p>
						</div>
                        <div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 12------------------------------ --> 
					<li class="form_box_light">
					  <p class="question_holder"  style="padding-top:15px;">
                        	<strong>12.</strong> 
                            Who’s your lender?<br /> 
                            <span id="questionNote">(1st Mortgage only)</span><br /><br />
                            What’s your Loan Number	<br /><br />
                      </p>				
					  <p class="answer_holder" id="selectValidation1" style="margin-top:3px">
                        	<select name="who_is_lender" type="text" class="smallTextField" id="who_is_lender" 
                                         onchange="disableText()"style="width:125px;" >
								<option  value="" selected="selected">Select your lender</option>
								<option  value="AgFirst Farm Credit Bank">AgFirst Farm Credit Bank</option>
								<option  value="Allstate Mortgage Loans &amp; Investments, Inc.">Allstate Mortgage Loans &amp; Investments, Inc.</option>
								<option  value="Amarillo National Bank">Amarillo National Bank</option>
								<option  value="American Finance House LARIBA">American Finance House LARIBA</option>
								<option  value="American Eagle Federal Credit Union">American Eagle Federal Credit Union</option>
								<option  value="American Financial Resources Inc.">American Financial Resources Inc.</option>
								<option  value="American Home Mortgage Servicing, Inc.">American Home Mortgage Servicing, Inc.</option>
								<option  value="AMS Servicing, LLC">AMS Servicing, LLC</option>
								<option  value="Aurora Financial Group, Inc.">Aurora Financial Group, Inc.</option>
								<option  value="Aurora Loan Services LLC">Aurora Loan Services LLC</option>
								<option  value="Banco Popular de Puerto Rico">Banco Popular de Puerto Rico</option>
								<option  value="Bank of America, N.A.">Bank of America, N.A.</option>
								<option  value="Bank United">Bank United</option>
								<option  value="Bay Federal Credit Union">Bay Federal Credit Union</option>
								<option  value="Bayview Loan Servicing, LLC">Bayview Loan Servicing, LLC</option>
								<option  value="Bramble Savings Bank">Bramble Savings Bank</option>
								<option  value="Capital International Financial, Inc.">Capital International Financial, Inc.</option>
								<option  value="CCO Mortgage">CCO Mortgage</option>
								<option  value="Carrington Mortgage Services, LLC">Carrington Mortgage Services, LLC</option>
								<option  value="Central Florida Educators Federal Credit Union">Central Florida Educators Federal Credit Union</option>
								<option  value="Centrue Bank">Centrue Bank</option>
								<option  value="Chase Home Finance LLC">Chase Home Finance LLC</option>
								<option  value="Citizens Community Bank">Citizens Community Bank</option>
								<option  value="Community Bank &amp; Trust Company">Community Bank &amp; Trust Company</option>
								<option  value="Community Credit Union of Florida">Community Credit Union of Florida</option>
								<option  value="CitiMortgage, Inc.">CitiMortgage, Inc.</option>
								<option  value="Citizens 1st National Bank">Citizens 1st National Bank</option>
								<option  value="Citizens First Wholesale Mortgage Co.">Citizens First Wholesale Mortgage Co.</option>
								<option  value="Countrywide Home Loans Servicing LP">Countrywide Home Loans Servicing LP</option>
								<option  value="CU Mortgage Services, Inc.">CU Mortgage Services, Inc.</option>
								<option  value="CUC Mortgage Corporation">CUC Mortgage Corporation</option>
								<option  value="DuPage Credit Union">DuPage Credit Union</option>
								<option  value="EMC Mortgage Corporation">EMC Mortgage Corporation</option>
								<option  value="Eaton National Bank &amp; Trust Co">Eaton National Bank &amp; Trust Co</option>
								<option  value="Farmers State Bank">Farmers State Bank</option>
								<option  value="Fay Servicing, LLC">Fay Servicing, LLC</option>
								<option  value="Fidelity Homestead Savings Bank">Fidelity Homestead Savings Bank</option>
								<option  value="First Bank">First Bank</option>
								<option  value="First Federal Bank of Florida">First Federal Bank of Florida</option>
								<option  value="First Financial Bank, N.A.">First Financial Bank, N.A.</option>
								<option  value="First Mortgage Coporation">First Mortgage Coporation</option>
								<option  value="First National Bank of Grant Park">First National Bank of Grant Park</option>
								<option  value="First Keystone Bank">First Keystone Bank</option>
								<option  value="First Safety Bank">First Safety Bank</option>
								<option  value="Flagstar">Flagstar</option>
								<option  value="Franklin Credit Management Corporation">Franklin Credit Management Corporation</option>
								<option  value="Franklin Savings">Franklin Savings</option>
								<option  value="Fresno County Federal Credit Union">Fresno County Federal Credit Union</option>
								<option  value="Gateway Mortgage Group, LLC">Gateway Mortgage Group, LLC</option>
								<option  value="GFA Federal Credit Union">GFA Federal Credit Union</option>
								<option  value="Glass City Federal Credit Union">Glass City Federal Credit Union</option>
								<option  value="GMAC Mortgage LLC">GMAC Mortgage LLC</option>
								<option  value="Golden Plains Credit Union">Golden Plains Credit Union</option>
								<option  value="Grafton Suburban Credit Union">Grafton Suburban Credit Union</option>
								<option  value="Great Lakes Credit Union">Great Lakes Credit Union</option>
								<option  value="Greater Nevada Mortgage Services">Greater Nevada Mortgage Services</option>
								<option  value="Green Tree Servicing LLC">Green Tree Servicing LLC</option>
								<option  value="Guaranty Bank">Guaranty Bank</option>
								<option  value="Hartford Savings Bank">Hartford Savings Bank</option>
								<option  value="Hillsdale County National Bank">Hillsdale County National Bank</option>
								<option  value="HomEq Servicing">HomEq Servicing</option>
								<option  value="HomeStar Bank and Financial Services">HomeStar Bank and Financial Services</option>
								<option  value="Home Loan Services, Inc.">Home Loan Services, Inc.</option>
								<option  value="Horicon Bank">Horicon Bank</option>
								<option  value="Horizon Bank, NA">Horizon Bank, NA</option>
								<option  value="Iberiabank">Iberiabank</option>
								<option  value="IBM Southeast Employees Federal Credit Union">IBM Southeast Employees Federal Credit Union</option>
								<option  value="IC Federal Credit Union">IC Federal Credit Union</option>
								<option  value="Idaho Housing and Finance Association">Idaho Housing and Finance Association</option>
								<option  value="iServe Residential Lending, LLC">iServe Residential Lending, LLC</option>
								<option  value="iServe Servicing Inc.">iServe Servicing Inc.</option>
								<option  value="James B Nutter &amp; Company">James B Nutter &amp; Company</option>
								<option  value="J.P. Morgan Chase Bank, NA">J.P. Morgan Chase Bank, NA</option>
								<option  value="Lake City Bank">Lake City Bank</option>
								<option  value="Lake National Bank">Lake National Bank</option>
								<option  value="IBM Lender Business Processing Services (LBPS)">IBM Lender Business Processing Services (LBPS)</option>
								<option  value="Liberty Bank and Trust Co">Liberty Bank and Trust Co</option>
								<option  value="Litton Loan Servicing">Litton Loan Servicing</option>
								<option  value="Los Alamos National Bank">Los Alamos National Bank</option>
								<option  value="M&amp;T Bank">M&amp;T Bank</option>
								<option  value="Marix Servicing, LLC">Marix Servicing, LLC</option>
								<option  value="Magna Bank">Magna Bank</option>
								<option  value="Mainstreet Credit Union">Mainstreet Credit Union</option>
								<option  value="Marsh Associates, Inc.">Marsh Associates, Inc.</option>
								<option  value="Midland Mortgage Compnay">Midland Mortgage Compnay</option>
								<option  value="Midwest Bank and Trust Co.">Midwest Bank and Trust Co.</option>
								<option  value="Midwest Community Bank">Midwest Community Bank</option>
								<option  value="Mission Federal Credit Union">Mission Federal Credit Union</option>
								<option  value="Metropolitan National Bank">Metropolitan National Bank</option>
								<option  value="MorEquity, Inc.">MorEquity, Inc.</option>
								<option  value="Mortgage Center, LLC">Mortgage Center, LLC</option>
								<option  value="Mortgage Clearing Corporation">Mortgage Clearing Corporation</option>
								<option  value="National City Bank">National City Bank</option>
								<option  value="Nationstar Mortgage LLC">Nationstar Mortgage LLC</option>
								<option  value="Navy Federal Credit Union">Navy Federal Credit Union</option>
								<option  value="Oakland Municipal Credit Union">Oakland Municipal Credit Union</option>
								<option  value="Ocwen Financial Corporation, Inc.">Ocwen Financial Corporation, Inc.</option>
								<option  value="OneWest Bank">OneWest Bank</option>
								<option  value="ORNL Federal Credit Union">ORNL Federal Credit Union</option>
								<option  value="Park View Federal Savings Bank">Park View Federal Savings Bank</option>
								<option  value="Pathfinder Bank">Pathfinder Bank</option>
								<option  value="PennyMac Loan Services, LLC">PennyMac Loan Services, LLC</option>
								<option  value="PNC Bank, National Association">PNC Bank, National Association</option>
								<option  value="Purdue Employees Federal Credit Union">Purdue Employees Federal Credit Union</option>
								<option  value="Q lending, Inc.">Q lending, Inc.</option>
								<option  value="Quantum Servicing Corporation">Quantum Servicing Corporation</option>
								<option  value="RBC Bank (USA)">RBC Bank (USA)</option>
								<option  value="RG Mortgage Corporation">RG Mortgage Corporation</option>
								<option  value="Residential Credit Solutions">Residential Credit Solutions</option>
								<option  value="Roebling Bank">Roebling Bank</option>
								<option  value="RoundPoint Mortgage Servicing Corporation">RoundPoint Mortgage Servicing Corporation</option>
								<option  value="Saxon Mortgage Services">Saxon Mortgage Services</option>
								<option  value="Schmidt Mortgage Company">Schmidt Mortgage Company</option>
								<option  value="Schools Financial Credit Union">Schools Financial Credit Union</option>
								<option  value="SEFCU">SEFCU</option>
								<option  value="Select Portfolio Servicing">Select Portfolio Servicing</option>
								<option  value="Servis One Inc.,dba BSI Financial Services, Inc">Servis One Inc.,dba BSI Financial Services, Inc</option>
								<option  value="ShoreBank">ShoreBank</option>
								<option  value="Silver State Schools Credit Union">Silver State Schools Credit Union</option>
								<option  value="Specialized Loan Servicing, LLC">Specialized Loan Servicing, LLC</option>
								<option  value="Spirit of Alaska Federal Credit Union">Spirit of Alaska Federal Credit Union</option>
								<option  value="Stanford Federal Credit Union">Stanford Federal Credit Union</option>
								<option  value="Sterling Savings Bank">Sterling Savings Bank</option>
								<option  value="Stockman Bank of Montana">Stockman Bank of Montana</option>
								<option  value="Suburban Mortgage Company of New Mexico">Suburban Mortgage Company of New Mexico</option>
								<option  value="Tempe Schools Credit Union">Tempe Schools Credit Union</option>
								<option  value="Technology Credit Union">Technology Credit Union</option>
								<option  value="The Golden 1 Credit Union">The Golden 1 Credit Union</option>
								<option  value="United Bank">United Bank</option>
								<option  value="United Bank Mortgage Corporation">United Bank Mortgage Corporation</option>
								<option  value="University First Federal Credit Union">University First Federal Credit Union</option>
								<option  value="U.S. Bank National Association">U.S. Bank National Association</option>
								<option  value="Vantium Capital, Inc.">Vantium Capital, Inc.</option>
								<option  value="Verity Credit Union">Verity Credit Union</option>
								<option  value="Visit Financial Corp.">Visit Financial Corp.</option>
								<option  value="Wachovia Mortgage, FSB">Wachovia Mortgage, FSB</option>
								<option  value="Wachovia Bank, NA">Wachovia Bank, NA</option>
								<option  value="Wealthbridge Mortgage Corp.">Wealthbridge Mortgage Corp.</option>
								<option  value="Wells Fargo Bank, NA">Wells Fargo Bank, NA</option>
								<option  value="Wescom Central Credit Union">Wescom Central Credit Union</option>
								<option  value="Weststar Mortgage, Inc.">Weststar Mortgage, Inc.</option>
								<option  value="Wilshire Credit Corporation">Wilshire Credit Corporation</option>
								<option  value="Yadkin Valley Bank">Yadkin Valley Bank</option>
                                <option  value="Other">Other</option>
							</select>
                            <span class="selectRequiredMsg">This field is required</span>
                        </p>
                     
                        <!-- <p class="answer_holder" id="textfieldValidation8" style="margin-top:0px;">  -->
                        <p class="answer_holder"id="textfieldValidation8777" style="margin-top:0px;">
                        	<label style="font-size:9px;text-align:center">Type the name of your lender <br />if  it is not on the list:</label> <br />
                            <input name="question12" type="text" class="smallTextField" id="question12" size="15"  disabled="disabled"/> 
                        </p>
                        <p class="answer_holder" id="textfieldValidation8" style="margin-top:0px; margin-top:5px; margin-left:27px;" >
                        	<input name="numbreLoan" type="text" class="smallTextField" id="numbreLoan" size="15"  placeholder="Loan #" /> 
                            <span class="textfieldRequiredMsg">This field is required</span>
                            <span class="textfieldInvalidFormatMsg">Please enter<br/> a number loan</span>
                        </p>
                     	
						<div style="clear:both;"></div>
					</li>
                    
                     <!-- ---------------------------------- Question 13------------------------------ --> 
                     <li class="form_box_dark">
						<p class="question_holder" style="padding-top:18px;">
                        	<strong>13.</strong>
                        	Have you received a government assistance program?
                        </p>
						<p class="answer_holder" id="radioValidation10">
                        	<input type="radio" name="tax_insurance_mortgage" value="Yes" id="tax_insurance_mortgage_0" />
                            <label for="tax_insurance_mortgage_0">Yes</label>
                            <input type="radio" name="tax_insurance_mortgage" value="No" id="tax_insurance_mortgage_1" />
                            <label for="tax_insurance_mortgage_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 14------------------------------ --> 
					<li class="form_box_light">
                    	<p class="question_holder" style="padding-top:10px;">
                       	  <strong>14.</strong>
                            Do you have any other type of debt in your credit besides your mortgage?<br />
                            <span id="questionNote">If yes, add up total balances and enter it</span>
                      </p>
                      <p class="answer_holder" id="radioValidation11"  style="margin-top: 20px;">
							<input type="radio" name="tax_insurance_current" value="Yes" id="tax_insurance_current_0"
                                        onclick="javascript:clearvalue('2')" />
                            <label for="tax_insurance_current_0">Yes</label>
							<input type="radio" name="tax_insurance_current" value="No" id="tax_insurance_current_1"
                                        onclick="javascript:setvalue('2')" />
                            <label for="tax_insurance_current_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<p class="answer_holder" id="textfieldValidation9"  style="margin-top: 25px;">
                        	<input name="question14" type="text" class="smallTextField" id="question14"   
                                        onClick="highlight(event)" onKeyUp="highlight(event)"   />
                            <span class="textfieldRequiredMsg">This field is required</span>
                        </p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 15------------------------------ --> 
					<li class="form_box_dark">
                    	<p class="question_holder" style="padding-top:0px;">
                        	<strong>15.</strong> 
                           Do you have any late mortgage payments?<br/>
                           if yes, how many?<br/><br/>
                           If you have a sale date enter it
                       </p>
                      <p class="answer_holder" id="radioValidation12" style="margin-top:10px">
							<input type="radio" name="late_mortgage_payments" value="Yes" id="late_mortgage_payments_0" 
                            onclick="javascript:clearvalue('3')"/>
                            <label for="late_mortgage_payments_0">Yes</label>
							<input type="radio" name="late_mortgage_payments" value="No" id="late_mortgage_payments_1"
                             onclick="javascript:setvalue('3')"/>
                            <label for="late_mortgage_payments_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
                      <p  class="answer_holder" id="textfieldValidation10" style="margin-top:10px">
                        	<input name="question15a" type="text"  class="smallTextField" id="question15a"  style="width:115px"
                                       onClick="highlight(event)"  onKeyUp="highlight(event)" placeholder="# of Late Payments"/>
                            <span class="textfieldRequiredMsg">This field is required</span>
                            <span class="textfieldInvalidFormatMsg">Please enter<br/> a number</span>
                        </p>
                        <p class="answer_holder"id="textfieldValidation8777" style="margin-top:10px">
                        	<input name="question15b" type="text" class="smallTextField" id="question15b"  
                                       onClick="highlight(event)"  onKeyUp="highlight(event)" placeholder="aaaa-mm-dd"/>
                            <span class="textfieldRequiredMsg">This field is required</span>
                        </p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 16------------------------------ --> 
					<li class="form_box_light">
                    	<p class="question_holder" style="padding-top:0px;">
                        	<strong>16.</strong> 
                            Do you have any other loans under your name(s) such as: credit cards, auto, student, etc.?<br/>
                            If yes what’s the total monthly payment
                        </p>
                        <p class="answer_holder" id="radioValidation13" style="margin-top:20px">
                        	<input type="radio" name="lien_on_property" value="Yes" id="lien_on_property_0" 
                                       onclick="javascript:clearvalue('4')" />
                             <label for="lien_on_property_0">Yes</label>
                             <input type="radio" name="lien_on_property" value="No" id="lien_on_property_1"
                                        onclick="javascript:setvalue('4')" />
                             <label for="lien_on_property_1">No</label>
                             <span class="radioRequiredMsg">Please answer<br />Yes or No</span>
                        </p>
                        <p  class="answer_holder" id="textfieldValidation11" style="margin-top:10px">
                        	<input name="question16" type="text" class="smallTextField" id="question16" 
                                        onClick="highlight(event)"  onKeyUp="highlight(event)"  placeholder="Other Loans"/>
                            <span class="textfieldRequiredMsg">This field is required</span>
                            <span class="textfieldInvalidFormatMsg">Please enter<br/> a number</span>
                        </p>
                        <div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 17------------------------------ -->
                  <li class="form_box_dark">
                       	<p class="question_holder" style="padding-top:15px;">
                           	<strong>17.</strong> 
                            Have you filed for bankruptcy in the last 7 years? <br />
                            If yes what chapter? 
                        </p>
                        <p class="answer_holder" id="radioValidation14" style="margin-top:20px">
                        	<input type="radio" name="filed_for_bankruptcy" value="Yes" id="filed_for_bankruptcy_0" 
                                       onclick="javascript:clearvalue('5')" />
                            <label for="filed_for_bankruptcy_0">Yes</label>
							<input type="radio" name="filed_for_bankruptcy" value="No" id="filed_for_bankruptcy_1" 
                                        onclick="javascript:setvalue('5')" />
                            <label for="filed_for_bankruptcy_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p> 
                        <p  class="answer_holder" id="textfieldValidation12" style="margin-top:10px">
                        	<input name="question17" type="text" class="smallTextField" id="question17"  
                                        onClick="highlight(event)"  onKeyUp="highlight(event)" placeholder="Bk Chapter"/> 
                            <span class="textfieldRequiredMsg">This field is required</span>
                            <span class="textfieldInvalidFormatMsg">Please enter<br/> a number</span>
                        </p>
					<div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 18------------------------------ --> 
                    <li class="form_box_light">
                    	<p class="question_holder" style="padding-top:15px;"">
                        	<strong>18.</strong>
                            If the lender requires 1 / 2 of your regular monthly mtg. payment today, 
                            would you be able to comply with what is required?
                        </p>
						<p class="answer_holder" id="radioValidation15">
                        	<input type="radio" name="property_for_sale" value="Yes" id="property_for_sale_0" />
                            <label for="property_for_sale_0">Yes</label>
                            <input type="radio" name="property_for_sale" value="No" id="property_for_sale_1" />
                            <label for="property_for_sale_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- ---------------------------------- Question 19------------------------------ --> 
                    <li class="form_box_dark">
                    	<p class="question_holder" style="padding-top:0px;">
                        	<strong>19.</strong> 
                            Can you make an offer to your lender, in order for the lender to let you keep your property free and clear?
                            <br /><br />
                            If yes what can you offer?
                        </p>
                        <p class="answer_holder" id="radioValidation16"  style="margin-top:20px">
                        	<input type="radio" name="current_on_mortgage" value="Yes" id="current_on_mortgage_0" 
                                        onclick="javascript:clearvalue('6')" />
                            <label for="current_on_mortgage_0">Yes</label>
							<input type="radio" name="current_on_mortgage" value="No" id="current_on_mortgage_1" 
                                       onclick="javascript:setvalue('6')" />
                            <label for="current_on_mortgage_1">No</label>
							<span class="radioRequiredMsg">Please answer<br />Yes or No</span>
						</p>
                        <p  class="answer_holder" id="textfieldValidation13" style="margin-top:10px">
                        	<label for="question19">$</label>
                        	<input name="question19" type="text" class="smallTextField"id="question19" placeholder="Offer" />
                        	<span class="textfieldRequiredMsg">This field is required</span>
                            <span class="textfieldInvalidFormatMsg">Please enter<br/>a number</span></span> 
                        </p>
						<div style="clear:both;"></div>
					</li>
                    
                    <!-- ......................................................... Question 20 ......................................... --> 
                    <li class="form_box_dark">
                    	<p class="question_holder" style="padding-top:5px;">
                        	<strong>20.</strong> 
                            What’s your total household expense?
                            <br /> <br />
                        </p>
                        <p  class="answer_holder" id="textfieldValidation14">
                        	<label for="question20">$</label>
                       		<input name="question20" type="text" size="10" class="smallTextField" id="question20"  placeholder="Expenses"/>
                       		<span class="textfieldRequiredMsg">This field is required</span>
                       		<span class="textfieldInvalidFormatMsg">Please enter<br/> a number</span></span> 
                        </p>
						<div style="clear:both;"></div>
					</li>       

				</ul>
			</div>
<!-- HERE -->

<!-- <div class="form_box_light_large"  style="background-image:url('images/maha_elegible_form_foot.png'); width:884" > -->
<div class="form_box_light_large"  style="background-image:url('images/maha_elegible_form_foot.png'); width:884; margin-left:10px" >
	<div>
    	<p class="question_holder" style="font-size:14px; width:300px;">
        	<strong>21.</strong> 
     		Please explain your financial hardship<br />
      		<textarea name="texto" style="resize:none; background-image:url('images/text.png');" id="question21" cols="100" rows="4" onblur="counterWord() "></textarea>

    </p>
    </div>
   <div id="title_right_cap"></div>
   <div style="clear:both;"></div>
</div>
<!-- HERE -->

<div style="clear:both; text-align: center; padding: 20px 0px 25px;">
   <input name="send_form" value="" id="send_form" class="button" 
           type="button" onclick="javascript:validateonsubmit();" />
</div>
</form>
</div>

<div id="content">
	<div id="title_box">
	  <div id="title_text_box">
        	<p style="float:left; text-align:center; "> You must complete the following application in order for you to have access to the (FRA) Program and obtain a detailed answers to question that will help you obtain a possible Principal Reduction and Payment reduction.</p>
            <p style="clear:both font-size:11px; text-align:center;">Please answer these questions to verify eligibility. </p>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>

		<div id="footer">
			<ul id="footer_nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Am I Eligible</a></li>
				<li><a href="about.php">About FRA</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="testimonials.php">Testimonials</a></li>
				<li><a href="community.php">My Community</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="privacy_policy.php">Privacy Policy</a></li>
				<li><a href="tos.php">Terms of Program</a></li>
				<li style="border:0px none"><a href="login.php">Log In</a></li>
			</ul>
			<div id="cr_pow_notice">
				<p style="float:left; text-align:center;">Copyright &copy; 2013 - Financial Relief Alternative LLC &reg;<br />All rights reserved.</p>
				<!--<p style="text-align:center; float: right;">Powered by<br /><a href="http://www.bcpronto.com" target="_blank">BC Pronto!</a> Technologies</p>-->
				<div style="clear:both"></div>
			</div>
		</div>
	<img src="images/maha_footer_bottomCap_v001.png" class="siteBottomCap" />
	</div>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/element.methods.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/SpryValidationRadio.js"></script>
<script type="text/javascript" src="js/SpryValidationTextField.js"></script>
<script type="text/javascript" src="js/SpryValidationSelect.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript">
<!--

var CW = new showContentWindow('infoWindow','infoWindowTrigger','closeWindowTrigger');
var radioValidation1 = new Spry.Widget.ValidationRadio("radioValidation1",{validateOn:['submit','change']}); 
var radioValidation2 = new Spry.Widget.ValidationRadio("radioValidation2",{validateOn:['submit','change']});
var radioValidation3 = new Spry.Widget.ValidationRadio("radioValidation3",{validateOn:['submit','change']});
var radioValidation4 = new Spry.Widget.ValidationRadio("radioValidation4",{validateOn:['submit','change']});
var radioValidation6 = new Spry.Widget.ValidationRadio("radioValidation6",{validateOn:['submit','change']});
var radioValidation7 = new Spry.Widget.ValidationRadio("radioValidation7",{validateOn:['submit','change']});
var radioValidation8 = new Spry.Widget.ValidationRadio("radioValidation8",{validateOn:['submit','change']});
var radioValidation9 = new Spry.Widget.ValidationRadio("radioValidation9",{validateOn:['submit','change']});
var radioValidation10 = new Spry.Widget.ValidationRadio("radioValidation10",{validateOn:['submit','change']});
var radioValidation11 = new Spry.Widget.ValidationRadio("radioValidation11",{validateOn:['submit','change']});
var radioValidation12 = new Spry.Widget.ValidationRadio("radioValidation12",{validateOn:['submit','change']});
var radioValidation13 = new Spry.Widget.ValidationRadio("radioValidation13",{validateOn:['submit','change']});
var radioValidation14 = new Spry.Widget.ValidationRadio("radioValidation14",{validateOn:['submit','change']});
var radioValidation15 = new Spry.Widget.ValidationRadio("radioValidation15",{validateOn:['submit','change']});
var radioValidation16 = new Spry.Widget.ValidationRadio("radioValidation16",{validateOn:['submit','change']});
var textfieldValidation1 = new Spry.Widget.ValidationTextField("textfieldValidation1","currency",{validateOn:'submit'});
var textfieldValidation2 = new Spry.Widget.ValidationTextField("textfieldValidation2","currency",{validateOn:'submit'});
var textfieldValidation3 = new Spry.Widget.ValidationTextField("textfieldValidation3","currency",{validateOn:'submit'});
var textfieldValidation4 = new Spry.Widget.ValidationTextField("textfieldValidation4","currency",{validateOn:'submit'});
var textfieldValidation5 = new Spry.Widget.ValidationTextField("textfieldValidation5","currency",{validateOn:'submit'});
var textfieldValidation6 = new Spry.Widget.ValidationTextField("textfieldValidation6","currency",{validateOn:'submit'});
var textfieldValidation7 = new Spry.Widget.ValidationTextField("textfieldValidation7","currency",{validateOn:'submit'});
var textfieldValidation8 = new Spry.Widget.ValidationTextField("textfieldValidation8","currency",{validateOn:'submit'}); 
var textfieldValidation9 = new Spry.Widget.ValidationTextField("textfieldValidation9","currency",{validateOn:'submit'});
var textfieldValidation10 = new Spry.Widget.ValidationTextField("textfieldValidation10","currency",{validateOn:'submit'});
var textfieldValidation11 = new Spry.Widget.ValidationTextField("textfieldValidation11","currency",{validateOn:'submit'}); 
var textfieldValidation12 = new Spry.Widget.ValidationTextField("textfieldValidation12","currency",{validateOn:'submit'});
var textfieldValidation13 = new Spry.Widget.ValidationTextField("textfieldValidation13","currency",{validateOn:'submit'});
var textfieldValidation14 = new Spry.Widget.ValidationTextField("textfieldValidation14","currency",{validateOn:'submit'});
var selectValidation1 = new Spry.Widget.ValidationSelect("selectValidation1",{validateOn:['submit','change']});
/* var textfieldValidation100 = new Spry.Widget.ValidationTextField("textfieldValidation100","currency",{validateOn:'submit'}); */

//-->

function setvalue(str)
{
	if(str == '1')
	{
		document.frm.question10a.disabled=true;
		document.frm.question10b.disabled=true;
	}	
	if(str == '2'){
		document.frm.question14.disabled=true;
		/* document.frm.question14a.disabled=true;
		 document.frm.question14b.disabled=true;*/
	}
	if(str == '3'){
		document.frm.question15a.disabled=true;
	}
	if(str == '4'){
		document.frm.question16.disabled=true;
	}
	if(str == '5'){
		document.frm.question17.disabled=true;
	}
	if(str == '6'){
		document.frm.question19.disabled=true;
	}
}


function clearvalue(str)
{		
	if(str == '1')
	{
		document.frm.question10a.disabled=false;
		document.frm.question10b.disabled=false;
	}
	if(str == '2'){
		document.frm.question14.disabled=false;
		/*   document.frm.question14a.disabled=true;
		document.frm.question14b.disabled=false; */
	}
	if(str == '3'){
		document.frm.question15a.disabled=false;
	}
	if(str == '4'){
		document.frm.question16.disabled=false;
	}
	if(str == '5'){
		document.frm.question17.disabled=false;
	}
	if(str == '6'){
		document.frm.question19.disabled=false;
	}
}
</script>
</body>
</html>