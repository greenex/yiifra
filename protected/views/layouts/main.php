<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/commonstyles.css"  />
	<style>
		#page,#header{
			border:none;
			
		}
		.container {
		    margin: 0 auto;
		    width: 960px;
		}
		#wrapper{
			 width: 994px;
		}
		ul, ol {
		    padding-left: 0;
		}
	
	</style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id='elegible' style="position: relative; min-height: 100%; top: 0px;">
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
<img src="../../images/maha_home_elegible_over_v001.png" style="display:none;" />  
<div id="wrapper">
  
	<div id="header"><img src="../../images/maha_header_v001.png" /></div>
		<div id="navigation">
			<ul id="main_nav">
				<li><a class="home" href="../../../fra/index.php" style="padding-top:7px;"><img src="../../images/maha_home_nav_image_v001.png" alt="Home" /></a></li>
				<li><a class="elegible" href="#">Am I Eligible?</a></li>
				<li><a class="about" href="../../../fra/about.php">About FRA</a></li>
				<li><a class="faq" href="../../../fra/faq.php">FAQ</a></li>
				<li><a class="testimonials" href="vtestimonials.php">Testimonials</a></li>
				<li><a class="spanish" href="../../../fra/community.php">My Community</a></li>
				<li><a class="contact" href="../../../fra/contact.php">Contact Us</a></li>
				<li><a class="login" href="../../../fra/login.php">Login</a></li>
			</ul>
		</div>
<!--
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div>
</body>
</html>
